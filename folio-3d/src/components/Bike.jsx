
import React, { useMemo } from 'react'
import { useGLTF } from '@react-three/drei'
import * as THREE from 'three'

export function Bike(props) {
    const { nodes } = useGLTF('./Blockout11.glb')

    // Create the material INSTANCE correctly this time
    const tronMaterial = useMemo(() => new THREE.MeshStandardMaterial({
        color: new THREE.Color('#000000'),      // Matte Black Body
        emissive: new THREE.Color('#0088ff'),   // Cyan/Blue Glow
        emissiveIntensity: 3,                   // High intensity for Bloom
        roughness: 0.3,
        metalness: 0.8
    }), [])

    return (
        <group {...props} dispose={null}>
            {/* Explicitly mapping ONLY bike parts to ensure we don't render the environment */}
            <mesh geometry={nodes.Circle.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Circle005.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube002.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube006.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube007.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube008.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube010.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube011.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube013.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube014.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube015.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube016.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube017.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube018.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube019.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube020.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cube021.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder002.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder003.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder006.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder007.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder008.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder009.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder010.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder011.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder012.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder014.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder015.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder016.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder017.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder018.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder019.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder020.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder021.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder022.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder023.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder025.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder026.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder027.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder028.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder029.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder030.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder031.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder032.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder033.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder034.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder035.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder036.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder037.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder038.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder039.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Cylinder040.geometry} material={tronMaterial} />
            <mesh geometry={nodes.NurbsPath.geometry} material={tronMaterial} />
            <mesh geometry={nodes.NurbsPath001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.NurbsPath002.geometry} material={tronMaterial} />
            <mesh geometry={nodes.NurbsPath003.geometry} material={tronMaterial} />
            <mesh geometry={nodes.NurbsPath004.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_10.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_11.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_12.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_13.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_14.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_15.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_16.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_17.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_18.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_19.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_2.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_20.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_21.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_22.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_23.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_24.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_25.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_26.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_27.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_28.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_29.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_3.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_30.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_31.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_4.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_5.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_6.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_7.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_8.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Object_9.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Plane.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Plane001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Plane002.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Sphere.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Sphere001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Sphere002.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Sphere003.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Text.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Torus.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Torus001.geometry} material={tronMaterial} />
            <mesh geometry={nodes.Torus002.geometry} material={tronMaterial} />
        </group>
    )
}

useGLTF.preload('./Blockout11.glb')
