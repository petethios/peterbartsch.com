import { useRef, useState } from 'react'
import { useFrame } from '@react-three/fiber'
import { Html } from '@react-three/drei'
import * as THREE from 'three'

export function InteractiveHotspot({ position, title, description, onOpen }) {
    const meshRef = useRef()
    const [hovered, setHovered] = useState(false)

    // Animate the diamond (rotate and bob)
    useFrame((state) => {
        if (meshRef.current) {
            meshRef.current.rotation.y += 0.02
            meshRef.current.position.y = position[1] + Math.sin(state.clock.elapsedTime * 2) * 0.2
        }
    })

    return (
        <group position={position}>
            {/* Diamond/Octahedron marker */}
            <mesh
                ref={meshRef}
                onClick={(e) => {
                    e.stopPropagation()
                    onOpen()
                }}
                onPointerOver={(e) => {
                    e.stopPropagation()
                    setHovered(true)
                    document.body.style.cursor = 'pointer'
                }}
                onPointerOut={(e) => {
                    e.stopPropagation()
                    setHovered(false)
                    document.body.style.cursor = 'auto'
                }}
            >
                <octahedronGeometry args={[0.3, 0]} />
                <meshStandardMaterial
                    color={hovered ? '#86d8dd' : '#1a3a3d'}
                    emissive={hovered ? '#86d8dd' : '#1a3a3d'}
                    emissiveIntensity={hovered ? 1 : 0.5}
                    metalness={0.8}
                    roughness={0.2}
                />
            </mesh>

            {/* Label */}
            <Html
                position={[0, 0.8, 0]}
                center
                distanceFactor={8}
                style={{
                    pointerEvents: 'none',
                    userSelect: 'none',
                    opacity: hovered ? 1 : 0.7,
                    transition: 'opacity 0.2s'
                }}
            >
                <div style={{
                    background: 'rgba(26, 58, 61, 0.9)',
                    color: '#86d8dd',
                    padding: '4px 12px',
                    borderRadius: '4px',
                    fontSize: '14px',
                    fontWeight: 'bold',
                    whiteSpace: 'nowrap',
                    border: '1px solid #86d8dd'
                }}>
                    {title}
                </div>
            </Html>
        </group>
    )
}
