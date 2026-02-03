import { Canvas } from '@react-three/fiber'
import { OrbitControls, Environment as EnvPreset, KeyboardControls, Loader, Grid } from '@react-three/drei'
import { Suspense, useState } from 'react'
import { Environment } from './components/Blockout11'
import { GridNodes } from './components/GridNodes'
import { EffectComposer, Bloom, DepthOfField, Vignette } from '@react-three/postprocessing'
import { Physics, Debug, usePlane } from '@react-three/cannon'

import { Vehicle } from './components/Vehicle'
import { FakeVehicle } from './components/FakeVehicle'
import { Road } from './components/Road'
import { InteractiveHotspot } from './components/InteractiveHotspot'
import { InfoPanel } from './components/InfoPanel'
import { MobileControls } from './components/MobileControls'

function FloorCollider() {
  usePlane(() => ({ rotation: [-Math.PI / 2, 0, 0], position: [0, 0, 0], type: 'Static' }))
  return null
}

// Experience data - matches actual resume
const experiences = {
  thios: {
    title: 'Thios',
    role: 'Founder & Lead Designer',
    duration: 'Aug 2024 - Present',
    description: 'Treating AI as my technical co-founder, learning how to compress timelines, work across disciplines, and ship products that traditionally require full teams. Building open-source modular shelter systems that transform parking spot sized spaces into productive environments.',
    highlights: [
      'Created complete product ecosystem solo in 18 months: brand identity inspired by early 2000s open-source culture, 3 websites (thios.co, blog, store), 5 shelter variants with CAD models, physical prototype, and handbook generating first revenue',
      'Applied full career toolkit simultaneously—product strategy, marketing, and design execution using GitHub Copilot → Cursor → Anti Gravity progression; proving experienced generalists can operate across traditional role boundaries with AI partnership',
      'Established AI-augmented workflows: Obsidian MD + AI for project management and research synthesis; Figma Make for design-to-code; compressed prototyping cycles 70% through conversational development in Cursor and Anti-Gravity & Claude Code',
      'Outcomes: Validated AI as practical force multiplier for startups; demonstrating how to maintain product quality while working at solo-founder velocity; any prototype is possible'
    ],
    link: 'https://thios.co'
  },
  johndeere: {
    title: 'John Deere',
    role: 'Senior Lead UX; Digital Customer Experience',
    duration: 'Aug 2020 - Jul 2024',
    description: 'Embedded with product teams to modernize 20-year-old systems and drive subscription revenue. Proving enterprise design can move fast when you have the right frameworks.',
    highlights: [
      'Redesigned license management system serving 500K+ users across 12 languages—increased authenticated engagement 34%, reduced support tickets 16%, enabled $3.8B in subscription revenue from Automation and AI services',
      'Built unified account and navigation framework deployed across 8 product lines (web, mobile, embedded)—consolidated fragmented experiences into single customer view, improved dealer support efficiency 28%',
      'Established enterprise design system in Figma spanning 6 brands and 40+ product teams globally—reduced design-to-development handoff time 45% through standardized components that actually shipped'
    ],
    link: 'https://www.deere.com'
  },
  fourkites: {
    title: 'FourKites',
    role: 'Lead UX / Manager',
    duration: 'Jan 2017 - Jan 2020',
    description: 'Employee #28 during hypergrowth ($3M to $100M ARR). Built design function from scratch—founding designer to 10-person global team.',
    highlights: [
      'Designed flagship products from 0→1: Real-time supply chain control tower and related mobile apps processing 10M+ daily tracking events for 30+ Fortune 2000 companies (Anheuser-Busch, Georgia-Pacific, Tyson); products became primary driver of 3x customer expansion',
      'Led bespoke predictive analytics dashboard products identifying shipment delays 6-12 hours earlier than competitors; increased customer retention 41% and expanded average contract value $120K annually',
      'Scaled design org: Hired and managed team across Chicago and Chennai; established component library, design operations, and hiring framework—reduced design inconsistencies 65% while maintaining startup velocity'
    ],
    link: 'https://www.fourkites.com'
  },
  mavenwave: {
    title: 'MavenWave Partners',
    role: 'Senior UX + Agile Lead (Consultant)',
    duration: 'Jan 2014 - Jan 2017',
    description: 'Led digital product design for Fortune 500 healthcare and pharmaceutical clients. Fast iteration in slow-moving industries.',
    highlights: [
      'Designed 6 internal portals for AbbVie supporting 200K+ users across clinical trials and patient support programs—improved medication adherence tracking, reduced hospital readmissions 12%',
      'Rebuilt OptumRx pharmacy formulary platform processing 1.4B prescriptions annually—created company\'s first patient-facing product, reduced fulfillment errors 15% through improved drug interaction warnings',
      'Established Lean UX and Agile practices across client engagements while mentoring junior designers and leading cross-functional design sprints'
    ]
  },
  here: {
    title: 'Nokia HERE Maps',
    role: 'Product Marketing Manager',
    duration: '2012 - 2014',
    description: 'Led UX integration of acquired Trapster app, improving onboarding completion 33%',
    highlights: [
      'Improved onboarding completion 33% through UX redesign',
      'Integrated community-based traffic and speed trap reporting',
      'Worked on navigation UI for major automotive brands'
    ],
    link: 'https://www.here.com'
  },
  gogo: {
    title: 'Gogo Inflight WiFi',
    role: 'Product Manager',
    duration: '2008 - 2012',
    description: 'Launched connectivity across 6 major airlines; developed sponsored flight tracker generating recurring revenue',
    highlights: [
      'Launched inflight WiFi services across 6 major airlines',
      'Developed sponsored flight tracker generating recurring revenue streams',
      'Improved inflight connectivity user experience'
    ],
    link: 'https://www.gogoair.com'
  },
  cognistar: {
    title: 'Cognistar',
    role: 'Co-Founder',
    duration: '2001 - 2008',
    description: 'Built digital production and UX for legal education startup; raised $3M, achieved $2M+ annual revenue before acquisition',
    highlights: [
      'Built digital production and UX for legal education startup; raised $3M, achieved $2M+ annual revenue before acquisition',
      'Led UX and digital production for legal education platform'
    ]
  }
}

export default function App() {
  const [selectedExperience, setSelectedExperience] = useState(null)
  const [mobileControls, setMobileControls] = useState({
    forward: false,
    backward: false,
    left: false,
    right: false
  })

  return (
    <>
      <div style={{ width: '100vw', height: '100vh', background: '#222' }}>
        <KeyboardControls map={[
          { name: 'forward', keys: ['ArrowUp', 'w', 'W'] },
          { name: 'backward', keys: ['ArrowDown', 's', 'S'] },
          { name: 'left', keys: ['ArrowLeft', 'a', 'A'] },
          { name: 'right', keys: ['ArrowRight', 'd', 'D'] },
        ]}>
          <Canvas shadows camera={{ position: [0, 5, -10], fov: 50, near: 0.1, far: 1000 }}>
            {/* Site Theme: Teal Background */}
            <color attach="background" args={['#518285']} />

            {/* Mood Lighting: Soft to match site aesthetic */}
            <ambientLight intensity={0.4} />
            <directionalLight position={[10, 10, 10]} intensity={1} castShadow />

            {/* Environment + Bike */}
            <Suspense fallback={null}>
              <Physics gravity={[0, -9.8, 0]}>
                <FloorCollider />
                {/* <Environment /> */}
                <FakeVehicle position={[0, 0, 0]} mobileControls={mobileControls} />
                <Road />

              </Physics>

              {/* Interactive Hotspots - Arranged like highway billboards */}
              <InteractiveHotspot
                position={[-25, 1.0, 50]}
                title="Thios"
                images={["./portfolio-images/fourkites.png", "./portfolio-images/fourkites2.png", "./portfolio-images/fourkites3.png"]}
                onOpen={() => setSelectedExperience(experiences.thios)}
              />
              <InteractiveHotspot
                position={[25, 1.0, 100]}
                title="John Deere"
                images={["./portfolio-images/johndeere.png", "./portfolio-images/johndeere2.png", "./portfolio-images/johndeere3.png"]}
                onOpen={() => setSelectedExperience(experiences.johndeere)}
              />
              <InteractiveHotspot
                position={[-25, 1.0, 150]}
                title="FourKites"
                image="./portfolio-images/thios.png" // Maintaining the swap logic requested earlier
                onOpen={() => setSelectedExperience(experiences.fourkites)}
              />
              <InteractiveHotspot
                position={[25, 1.0, 200]}
                title="HERE"
                images={["./portfolio-images/here.png", "./portfolio-images/here2.png", "./portfolio-images/here3.png"]}
                onOpen={() => setSelectedExperience(experiences.here)}
              />
              <InteractiveHotspot
                position={[-25, 1.0, 250]}
                title="Gogo"
                images={["./portfolio-images/gogo.png", "./portfolio-images/gogo2.png", "./portfolio-images/gogo3.png"]}
                onOpen={() => setSelectedExperience(experiences.gogo)}
              />
              <EnvPreset preset="city" />
              <OrbitControls makeDefault maxPolarAngle={Math.PI / 2} enablePan={false} />
            </Suspense>

            {/* Site Grid: Infinite grid with fade to match site aesthetic */}
            <Grid
              position={[0, -0.01, 0]}
              args={[100, 100]}
              cellSize={1} // Minor grid lines
              cellThickness={0.5}
              cellColor="#0d2426" // Darker teal/black for subtle contrast
              sectionSize={5} // Major grid lines where nodes will appear
              sectionThickness={1}
              sectionColor="#86d8dd"
              fadeDistance={60}
              fadeStrength={1}
              infiniteGrid
            />

            {/* Grid Nodes: Subtle '+' markers at intersections aligned with grid */}
            <GridNodes
              spacing={5}        // Match sectionSize of Grid
              range={120}        // Cover visible area
              color="#86d8dd"    // Match sectionColor
              size={0.6}         // Much smaller plus sign
              thickness={0.08}   // Thinner lines
              fadeDistance={60}  // Match grid fade
              fadeStrength={1}
            />

            {/* Post Processing: Bloom for Neon Effect + Cinematic touches */}
            <EffectComposer disableNormalPass>
              <Bloom
                luminanceThreshold={0.8}
                mipmappedBlur
                intensity={0.2}
                radius={0.1}
              />
              {/* <DepthOfField
                focusDistance={0} // Focus on camera/near objects
                focalLength={0.02} // Wide focal length
                bokehScale={2} // Blur strength
                height={480} // Resolution scale
              /> */}
              <Vignette
                eskil={false}
                offset={0.1}
                darkness={0.6} // Reduced from 1.1 by roughly half
              />
            </EffectComposer>
          </Canvas>
        </KeyboardControls>
        {/* Debug UI Removed */}
        <Loader />
      </div>

      {/* Info Panel */}
      <InfoPanel
        data={selectedExperience}
        onClose={() => setSelectedExperience(null)}
      />

      {/* Mobile Controls */}
      <MobileControls onControlChange={setMobileControls} />
    </>
  )
}
