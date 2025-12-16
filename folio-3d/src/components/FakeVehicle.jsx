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

        const moveVector = new Vector3()

        // Simple position-based movement
        // Keyboard or touch
        if (forward || mobileControls.forward) {
            moveVector.addScaledVector(direction, speed * delta)
        }
        if (backward || mobileControls.backward) {
            moveVector.addScaledVector(direction, -speed * delta)
        }

        // Apply movement to bike
        ref.current.position.add(moveVector)

        // --- 3. Ground Following (Simple floor at Y=0 for now) ---
        // Keep bike on the ground
        ref.current.position.y = 0

        // --- 4. Respawn Logic ---
        if (ref.current.position.y < -10) {
            ref.current.position.set(position[0], position[1], position[2])
            ref.current.rotation.set(0, 0, 0)
            // Reset camera to default offset if respawned?
            state.camera.position.set(position[0], position[1] + 5, position[2] + 10)
        }

        // --- 5. Camera & Orbiter Logic ---
        // Instead of forcing the camera to a specific spot, we drag it along with the bike.
        // This allows OrbitControls to handle the rotation/zoom relative to the bike.

        // Move camera by the same amount the bike moved
        state.camera.position.add(moveVector)

        // Update OrbitControls target to stay focused on the bike
        if (state.controls) {
            state.controls.target.copy(ref.current.position)
            state.controls.target.y += 1.5 // Look slightly above the ground (at the rider/images)
            state.controls.update()
        }
    })

    return (
        <group ref={ref} position={position} rotation={[0, 0, 0]}>
            <Bike />
        </group>
    )
}
