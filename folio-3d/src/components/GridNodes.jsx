
import React, { useMemo, useRef } from 'react'
import { useFrame } from '@react-three/fiber'
import * as THREE from 'three'

const fragmentShader = `
  varying vec3 vWorldPosition;
  uniform vec3 color;
  uniform float fadeDistance;
  uniform float fadeStrength;

  void main() {
    float distance = length(vWorldPosition.xz - cameraPosition.xz);
    float alpha = 1.0 - smoothstep(fadeDistance * 0.5, fadeDistance, distance);
    alpha = clamp(alpha, 0.0, 1.0);
    
    if (alpha <= 0.01) discard;
    
    gl_FragColor = vec4(color, alpha * fadeStrength);
  }
`

const vertexShader = `
  varying vec3 vWorldPosition;
  
  void main() {
    vec4 worldPosition = instanceMatrix * vec4(position, 1.0);
    vWorldPosition = worldPosition.xyz;
    gl_Position = projectionMatrix * modelViewMatrix * worldPosition;
  }
`

export function GridNodes({
    spacing = 5,
    range = 100,
    color = '#86d8dd',
    fadeDistance = 40,
    fadeStrength = 1.0,
    size = 0.5,
    thickness = 0.1
}) {
    const meshRef = useRef()

    const geometry = useMemo(() => {
        // Create + shape (aligned with grid)
        // We strictly separate "thickness" (width of the line on floor) from height (vertical extrusion)
        // Making it very flat like a decal
        const height = 0.02

        // Arm along X axis
        const box1 = new THREE.BoxGeometry(size, height, thickness).toNonIndexed()

        // Arm along Z axis
        const box2 = new THREE.BoxGeometry(thickness, height, size).toNonIndexed()

        // Merge positions and normals
        const pos1 = box1.attributes.position.array
        const pos2 = box2.attributes.position.array
        const norm1 = box1.attributes.normal.array
        const norm2 = box2.attributes.normal.array

        const positions = new Float32Array(pos1.length + pos2.length)
        const normals = new Float32Array(norm1.length + norm2.length)

        positions.set(pos1)
        positions.set(pos2, pos1.length)

        normals.set(norm1)
        normals.set(norm2, norm1.length)

        const geo = new THREE.BufferGeometry()
        geo.setAttribute('position', new THREE.BufferAttribute(positions, 3))
        geo.setAttribute('normal', new THREE.BufferAttribute(normals, 3))

        return geo
    }, [size, thickness])

    // Generate grid positions
    const instances = useMemo(() => {
        const temp = []
        // Round range to nearest spacing
        const count = Math.floor(range / spacing)

        for (let x = -count; x <= count; x++) {
            for (let z = -count; z <= count; z++) {
                temp.push({
                    x: x * spacing,
                    y: 0,
                    z: z * spacing
                })
            }
        }
        return temp
    }, [range, spacing])

    // Update effect to set matrices
    React.useLayoutEffect(() => {
        const tempObject = new THREE.Object3D()
        instances.forEach((data, i) => {
            tempObject.position.set(data.x, 0.02, data.z) // Slightly above floor
            tempObject.updateMatrix()
            meshRef.current.setMatrixAt(i, tempObject.matrix)
        })
        meshRef.current.instanceMatrix.needsUpdate = true
    }, [instances])

    const uniforms = useMemo(() => ({
        color: { value: new THREE.Color(color) },
        fadeDistance: { value: fadeDistance },
        fadeStrength: { value: fadeStrength }
    }), [color, fadeDistance, fadeStrength])

    useFrame(({ camera }) => {
        // Update camera position uniform for fade effect? 
        // Wait, shader uses cameraPosition built-in? 
        // In ShaderMaterial in Three.js, cameraPosition is usually available as uniform unless it's RawShaderMaterial.
        // However, it's safer to not rely on automatic updates if we want to be sure.
        // But MeshBasicMaterial doesn't support custom vertex shader easily without onBeforeCompile.
        // We are using ShaderMaterial, so `cameraPosition` is provided by Three.js automatically.
    })

    return (
        <instancedMesh ref={meshRef} args={[geometry, null, instances.length]} frustumCulled={false}>
            <shaderMaterial
                vertexShader={vertexShader}
                fragmentShader={fragmentShader}
                uniforms={uniforms}
                transparent
                depthWrite={false}
            />
        </instancedMesh>
    )
}
