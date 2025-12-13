import { Suspense, useState } from 'react'
import { Canvas } from '@react-three/fiber'
import { OrbitControls, Environment, Html } from '@react-three/drei'
import { Physics, RigidBody } from '@react-three/rapier'
import { BlockoutModel3 } from './components/BlockoutModel3'

export default function App() {
  const [clickedObject, setClickedObject] = useState(null)

  return (
    <Canvas shadows camera={{ position: [10, 10, 10], fov: 50 }}>
      {/* Lights */}
      <ambientLight intensity={0.5} />
      <directionalLight position={[10, 10, 5]} intensity={1} castShadow />
      <Environment preset="city" />

      {/* Physics World */}
      <Physics>
        {/* Floor */}
        <RigidBody type="fixed" colliders="cuboid">
          <mesh rotation={[-Math.PI / 2, 0, 0]} position={[0, -1, 0]} receiveShadow>
            <planeGeometry args={[50, 50]} />
            <meshStandardMaterial color="#333" />
          </mesh>
        </RigidBody>

        {/* Blockout Model 3 */}
        <BlockoutModel3
          scale={0.1}
          position={[0, 0, 0]}
          onClick={(e) => {
            e.stopPropagation()
            setClickedObject(e.object.name || 'Unnamed Object')
            console.log('Clicked:', e.object.name)
          }}
        />
      </Physics>

      {/* Debug UI to show clicked part */}
      {clickedObject && (
        <Html position={[0, 5, 0]} center>
          <div style={{ background: 'white', padding: '10px', borderRadius: '5px', pointerEvents: 'none' }}>
            Clicked: {clickedObject}
          </div>
        </Html>
      )}

      {/* Controls */}
      <OrbitControls makeDefault />
    </Canvas>
  )
}
