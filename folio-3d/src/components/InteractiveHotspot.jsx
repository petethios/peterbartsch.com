import { useRef, useState, useEffect } from 'react'
import { useFrame } from '@react-three/fiber'
import { Html } from '@react-three/drei'
import * as THREE from 'three'

export function InteractiveHotspot({ position, title, image, images, description, onOpen }) {
    const [hovered, setHovered] = useState(false)
    const [currentImageIndex, setCurrentImageIndex] = useState(0)

    // Auto-rotate carousel
    useEffect(() => {
        if (!images || images.length <= 1) return

        const interval = setInterval(() => {
            setCurrentImageIndex(prev => (prev + 1) % images.length)
        }, 3000)

        return () => clearInterval(interval)
    }, [images])

    const currentImage = Array.isArray(images) ? images[currentImageIndex] : image

    return (
        <group position={position}>
            {/* Carousel Display - Acts as the interactive billboard */}
            <Html
                position={[0, 1.0, 0]} // Lowered significantly again (2.5 -> 1.0)
                rotation={[0, Math.PI, 0]}
                center
                distanceFactor={12} // Reduced significantly to prevent "giant billboard" effect
                transform
                style={{
                    opacity: hovered ? 1 : 0.9,
                    transition: 'opacity 0.2s',
                    pointerEvents: 'auto' // Enable interaction
                }}
            >
                <div
                    onClick={(e) => {
                        e.stopPropagation()
                        onOpen()
                    }}
                    onMouseEnter={() => {
                        setHovered(true)
                        document.body.style.cursor = 'pointer'
                    }}
                    onMouseLeave={() => {
                        setHovered(false)
                        document.body.style.cursor = 'auto'
                    }}
                    style={{
                        background: '#000',
                        padding: '10px',
                        borderRadius: '8px',
                        border: '4px solid #86d8dd',
                        boxShadow: '0 0 20px rgba(134, 216, 221, 0.4)',
                        display: 'flex',
                        flexDirection: 'column',
                        alignItems: 'center',
                        position: 'relative',
                        width: '400px',
                        height: '300px',
                        justifyContent: 'center',
                        cursor: 'pointer'
                    }}
                >
                    <img
                        src={currentImage}
                        alt={title}
                        style={{
                            width: '100%',
                            height: '100%',
                            borderRadius: '2px',
                            display: 'block',
                            objectFit: 'contain',
                            transition: 'opacity 0.5s'
                        }}
                    />
                    {Array.isArray(images) && images.length > 1 && (
                        <div style={{
                            display: 'flex',
                            gap: '2px',
                            marginTop: '0px',
                            position: 'absolute',
                            bottom: '8px'
                        }}>
                            {images.map((_, idx) => (
                                <div key={idx} style={{
                                    width: '4px',
                                    height: '4px',
                                    borderRadius: '50%',
                                    background: idx === currentImageIndex ? '#86d8dd' : '#333'
                                }} />
                            ))}
                        </div>
                    )}
                </div>
            </Html>
        </group>
    )
}
