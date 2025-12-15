import { Canvas } from '@react-three/fiber'
import { Environment as EnvPreset, OrbitControls } from '@react-three/drei'
import { Physics } from '@react-three/cannon'
import { Suspense } from 'react'
import { Environment } from './components/Blockout8'
import { Vehicle } from './components/Vehicle'

export default function App() {
  return (
    <div style={{ width: '100vw', height: '100vh', background: '#000' }}>
      <Canvas shadows camera={{ position: [0, 5, 10], fov: 50 }} style={{ width: '100%', height: '100%' }}>
        <ambientLight intensity={0.5} />
        <directionalLight position={[10, 10, 10]} intensity={2} castShadow />
        <Physics gravity={[0, -9.8, 0]}>
          <Suspense fallback={<group><mesh><boxGeometry /><meshBasicMaterial color="wireframe" /></mesh></group>}>
            <Environment />
            <Vehicle position={[0, 2, 0]} />
          </Suspense>
        </Physics>
        <EnvPreset preset="city" />
      </Canvas>
      <div style={{ position: 'absolute', top: '50%', left: '50%', transform: 'translate(-50%, -50%)', color: 'white', pointerEvents: 'none', zIndex: 0 }}>
        {/* Loading overlay if needed, currently Suspense fallback is null but this div handles bg */}
      </div>
    </div>
  )
}
