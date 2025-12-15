import { useRef, useEffect, useState } from 'react'
import { useFrame, useThree } from '@react-three/fiber'
import { Vector3, Quaternion, Euler, Raycaster, MathUtils } from 'three'
import { useKeyboardControls } from '@react-three/drei'
import { Bike } from './Bike'

export function FakeVehicle({ position = [0, 0, 0], mobileControls = {} }) {
    const ref = useRef()
    const speed = 10
    const turnSpeed = 2
    const raycaster = useRef(new Raycaster())
    const downResult = useRef(new Vector3())

    // Keyboard controls
    const [, get] = useKeyboardControls()

    useFrame((state, delta) => {
        if (!ref.current) return

        const { forward, backward, left, right } = get() || {}

        // --- 1. Turning & Leaning ---
        let turnInput = 0

        // Keyboard controls
        if (left || mobileControls.left) {
            ref.current.rotation.y += turnSpeed * delta
            turnInput = -1 // Lean left
        }
        if (right || mobileControls.right) {
            ref.current.rotation.y -= turnSpeed * delta
            turnInput = 1 // Lean right
        }

        // Calculate target lean angle (in radians) - max 25 degrees
        const maxLeanAngle = MathUtils.degToRad(25)
        const targetLeanAngle = turnInput * maxLeanAngle

        // Smoothly interpolate to target lean angle
        ref.current.rotation.z = MathUtils.lerp(ref.current.rotation.z, targetLeanAngle, 0.1)

        // --- 2. Horizontal Movement ---
        const direction = new Vector3(0, 0, 1)
        direction.applyQuaternion(ref.current.quaternion)

        // Simple position-based movement
        // Keyboard or touch
        if (forward || mobileControls.forward) {
            ref.current.position.addScaledVector(direction, speed * delta)
        }
        if (backward || mobileControls.backward) {
            ref.current.position.addScaledVector(direction, -speed * delta)
        }

        // --- 3. Ground Following (Simple floor at Y=0 for now) ---
        // Keep bike on the ground
        ref.current.position.y = 0

        // --- 4. Respawn Logic ---
        if (ref.current.position.y < -10) {
            ref.current.position.set(position[0], position[1], position[2])
            ref.current.rotation.set(0, 0, 0) // Reset rotation too if needed
            // Reset velocity if we had physics velocity, but here it's direct position
        }

        // --- 5. Camera Follow ---
        const cameraOffset = new Vector3(0, 5, -10)
        cameraOffset.applyQuaternion(ref.current.quaternion)
        const targetCamPos = ref.current.position.clone().add(cameraOffset)

        state.camera.position.lerp(targetCamPos, 0.1)
        state.camera.lookAt(ref.current.position)
    })

    return (
        <group ref={ref} position={position}>
            <Bike />
        </group>
    )
}
