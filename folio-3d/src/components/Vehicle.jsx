import { useBox, useRaycastVehicle } from '@react-three/cannon'
import { useFrame, useThree } from '@react-three/fiber'
import { useEffect, useRef } from 'react'
import { Vector3 } from 'three'

export function Vehicle({ position = [0, 5, 0], rotation = [0, 0, 0] }) {
    const chassis = useRef(null)
    const wheel1 = useRef(null)
    const wheel2 = useRef(null)
    const wheel3 = useRef(null)
    const wheel4 = useRef(null)

    // Chassis
    const [chassisBody, chassisApi] = useBox(() => ({
        mass: 150,
        position,
        rotation,
        args: [2, 0.5, 4],
        allowSleep: false,
    }), chassis)

    // Wheels
    const [wheels, wheelApis] = useRaycastVehicle(() => ({
        chassisBody,
        wheelInfos: [
            { radius: 0.7, directionLocal: [0, -1, 0], suspensionStiffness: 30, suspensionRestLength: 0.3, maxSuspensionForce: 100000, maxSuspensionTravel: 0.3, axleLocal: [-1, 0, 0], chassisConnectionPointLocal: [-1, 0, 1.5] },
            { radius: 0.7, directionLocal: [0, -1, 0], suspensionStiffness: 30, suspensionRestLength: 0.3, maxSuspensionForce: 100000, maxSuspensionTravel: 0.3, axleLocal: [-1, 0, 0], chassisConnectionPointLocal: [1, 0, 1.5] },
            { radius: 0.7, directionLocal: [0, -1, 0], suspensionStiffness: 30, suspensionRestLength: 0.3, maxSuspensionForce: 100000, maxSuspensionTravel: 0.3, axleLocal: [-1, 0, 0], chassisConnectionPointLocal: [-1, 0, -1.5] },
            { radius: 0.7, directionLocal: [0, -1, 0], suspensionStiffness: 30, suspensionRestLength: 0.3, maxSuspensionForce: 100000, maxSuspensionTravel: 0.3, axleLocal: [-1, 0, 0], chassisConnectionPointLocal: [1, 0, -1.5] }
        ],
        indexForwardAxis: 2,
        indexRightAxis: 0,
        indexUpAxis: 1
    }), useRef(null))

    // Controls
    const keys = useRef({ w: false, a: false, s: false, d: false })
    useEffect(() => {
        const down = (e) => (keys.current[e.key] = true)
        const up = (e) => (keys.current[e.key] = false)
        window.addEventListener('keydown', down)
        window.addEventListener('keyup', up)
        return () => {
            window.removeEventListener('keydown', down)
            window.removeEventListener('keyup', up)
        }
    }, [])

    useFrame(() => {
        if (!wheelApis[0]) return
        const { w, a, s, d } = keys.current
        const force = 2000
        const steer = 0.5

        for (let i = 2; i < 4; i++) {
            wheelApis[i].applyEngineForce(w ? -force : s ? force : 0)
        }
        for (let i = 0; i < 2; i++) {
            wheelApis[i].setSteeringValue(a ? steer : d ? -steer : 0)
        }
    })

    return (
        <group ref={chassisBody}>
            <mesh>
                <boxGeometry args={[2, 0.5, 4]} />
                <meshNormalMaterial />
            </mesh>
            {/* Visual wheels could be added here */}
        </group>
    )
}
