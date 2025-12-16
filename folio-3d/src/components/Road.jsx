import React from 'react'

export function Road() {
    return (
        <group position={[0, 0.02, 100]}> {/* Shifted forward to cover the start and travel path */}
            {/* Main Road Surface */}
            <mesh rotation={[-Math.PI / 2, 0, 0]} position={[0, 0, 0]}>
                <planeGeometry args={[16, 1000]} />
                <meshStandardMaterial color="#111" roughness={0.8} metalness={0.2} />
            </mesh>

            {/* Glowy Side Lines */}
            {/* Left */}
            <mesh rotation={[-Math.PI / 2, 0, 0]} position={[-7.5, 0.01, 0]}>
                <planeGeometry args={[0.3, 1000]} />
                <meshBasicMaterial color="#86d8dd" toneMapped={false} />
            </mesh>

            {/* Right */}
            <mesh rotation={[-Math.PI / 2, 0, 0]} position={[7.5, 0.01, 0]}>
                <planeGeometry args={[0.3, 1000]} />
                <meshBasicMaterial color="#86d8dd" toneMapped={false} />
            </mesh>

            {/* Center Dashed Line (Simulated with simple thin line for style) */}
            <mesh rotation={[-Math.PI / 2, 0, 0]} position={[0, 0.01, 0]}>
                <planeGeometry args={[0.1, 1000]} />
                <meshBasicMaterial color="#86d8dd" opacity={0.3} transparent toneMapped={false} />
            </mesh>
        </group>
    )
}
