# 3D Application Development

## Architecture

The 3D resume experience is built with:
- **React Three Fiber**: React renderer for Three.js
- **@react-three/drei**: Useful helpers and abstractions
- **@react-three/cannon**: Physics (Cannon.js integration)
- **@react-three/postprocessing**: Visual effects (bloom, DOF, vignette)
- **Vite**: Build tool and dev server

## Reference Project

Based on Bruno Simon's `folio-2025` project (https://github.com/brunosimon/folio-2025)

## Key Components

Located in `folio-3d/src/components/`:

- **Environment Models**: `Blockout*.jsx` - 3D environment/scene
- **Vehicle**: `FakeVehicle.jsx` or similar - Drivable bike/vehicle
- **Physics**: `PhysicsObjects.jsx` - Interactive physics elements
- **Road/Terrain**: `Road.jsx` - Ground/road surface
- **Hotspots**: `InteractiveHotspot.jsx` - Interactive points of interest

## Development Workflow

1. **Start dev server**: `npm run dev` (runs on http://localhost:5174)
2. **Make changes** to components in `src/`
3. **Test locally** before building
4. **Build for production**: `npm run build`
5. **Deploy** using workflow (see `deployment.md`)

## Common Tasks

### Adding New 3D Models

1. Export model as `.glb` from Blender/OnShape
2. Place in `folio-3d/public/` directory
3. Generate React component using `gltfjsx`:
   ```bash
   npx gltfjsx public/your-model.glb -o src/components/YourModel.jsx
   ```
4. Import and use in `App.jsx`

### Adjusting Physics

Physics settings are typically in component files or `App.jsx`. Key properties:
- `mass`: Object weight
- `friction`: Surface friction
- `restitution`: Bounciness
- `linearDamping`: Movement resistance
- `angularDamping`: Rotation resistance

### Visual Effects

Post-processing effects are configured in `App.jsx` using `@react-three/postprocessing`:
- **Bloom**: Glow effect
- **DepthOfField**: Focus/blur
- **Vignette**: Edge darkening

## Troubleshooting

**Black Screen**: Usually environment model or lighting issue. Check browser console.

**No Physics**: Verify `<Physics>` wrapper and colliders are properly configured.

**Performance Issues**: Reduce polygon count, simplify physics colliders, or adjust post-processing settings.

**Controls Not Working**: Check event listeners and ensure vehicle physics body exists.
