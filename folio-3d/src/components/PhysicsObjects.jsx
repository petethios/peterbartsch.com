
import React from 'react'
import { useBox } from '@react-three/cannon'

const Box = ({ position, color = '#ff0055' }) => {
    const [ref] = useBox(() => ({ mass: 1, position, args: [1, 1, 1] }))

    return (
        <mesh ref={ref} castShadow receiveShadow>
            <boxGeometry args={[1, 1, 1]} />
            <meshStandardMaterial
                color="#111111"
                emissive={color}
                emissiveIntensity={2}
                roughness={0.2}
            />
        </mesh>
    )
}

export function DetailedUnlocks() {
    // A pyramid of boxes
    const boxes = []
    const startX = -5
    const startZ = 15

    // Base layer (3x3)
    for (let x = 0; x < 3; x++) {
        for (let z = 0; z < 3; z++) {
            boxes.push(<Box key={`base-${x}-${z}`} position={[startX + x * 1.1, 0.5, startZ + z * 1.1]} color="#ff0055" />)
        }
    }

    // Middle layer (2x2)
    for (let x = 0; x < 2; x++) {
        for (let z = 0; z < 2; z++) {
            boxes.push(<Box key={`mid-${x}-${z}`} position={[startX + 0.5 + x * 1.1, 1.5, startZ + 0.5 + z * 1.1]} color="#00ff55" />)
        }
    }

    // Top box
    boxes.push(<Box key="top" position={[startX + 1.1, 2.5, startZ + 1.1]} color="#0066ff" />)

    return <group>{boxes}</group>
}

export function JumpRamp({ position = [0, 0, 10], rotation = [0, 0, 0] }) {
    // A simple transform-based ramp (invisible physics shape + visible mesh)
    // We use a box rotated slightly to act as a ramp
    const width = 4
    const length = 6
    const height = 0.5

    const rampAngle = -Math.PI / 6 // 30 degrees incline

    const [ref] = useBox(() => ({
        type: 'Static',
        position,
        rotation: [rampAngle, 0, 0], // Tilt up around X axis
        args: [width, height, length]
    }))

    return (
        <mesh ref={ref} receiveShadow>
            <boxGeometry args={[width, height, length]} />
            <meshStandardMaterial
                color="#222"
                emissive="#ffff00"
                emissiveIntensity={0.5}
                roughness={0.4}
            />
            {/* Add stripes or direction indicator */}
            <mesh position={[0, 0.26, 0]} rotation={[-Math.PI / 2, 0, 0]}>
                <planeGeometry args={[width * 0.8, length * 0.8]} />
                <meshBasicMaterial color="#ffff00" opacity={0.5} transparent />
            </mesh>
        </mesh>
    )
}
