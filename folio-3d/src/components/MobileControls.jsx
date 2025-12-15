import { useEffect, useState } from 'react'

export function MobileControls({ onControlChange }) {
    const [isMobile, setIsMobile] = useState(false)
    const [activeControls, setActiveControls] = useState({
        forward: false,
        backward: false,
        left: false,
        right: false
    })

    useEffect(() => {
        const checkMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        setIsMobile(checkMobile)
    }, [])

    useEffect(() => {
        onControlChange(activeControls)
    }, [activeControls, onControlChange])

    if (!isMobile) return null

    const handleTouchStart = (control) => {
        setActiveControls(prev => ({ ...prev, [control]: true }))
    }

    const handleTouchEnd = (control) => {
        setActiveControls(prev => ({ ...prev, [control]: false }))
    }

    const buttonStyle = (isActive) => ({
        width: '70px',
        height: '70px',
        borderRadius: '50%',
        border: '3px solid #86d8dd',
        background: isActive ? 'rgba(134, 216, 221, 0.5)' : 'rgba(26, 58, 61, 0.7)',
        color: '#86d8dd',
        fontSize: '24px',
        fontWeight: 'bold',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
        touchAction: 'none',
        userSelect: 'none',
        WebkitTapHighlightColor: 'transparent'
    })

    return (
        <div style={{
            position: 'fixed',
            bottom: '20px',
            left: 0,
            right: 0,
            display: 'flex',
            justifyContent: 'space-between',
            padding: '0 20px',
            pointerEvents: 'none',
            zIndex: 1000
        }}>
            {/* Left side - Direction pad */}
            <div style={{ pointerEvents: 'auto' }}>
                <div style={{
                    display: 'grid',
                    gridTemplateColumns: 'repeat(3, 70px)',
                    gridTemplateRows: 'repeat(3, 70px)',
                    gap: '10px'
                }}>
                    <div></div>
                    <button
                        onTouchStart={() => handleTouchStart('forward')}
                        onTouchEnd={() => handleTouchEnd('forward')}
                        style={buttonStyle(activeControls.forward)}
                    >
                        ▲
                    </button>
                    <div></div>

                    <button
                        onTouchStart={() => handleTouchStart('left')}
                        onTouchEnd={() => handleTouchEnd('left')}
                        style={buttonStyle(activeControls.left)}
                    >
                        ◀
                    </button>
                    <div></div>
                    <button
                        onTouchStart={() => handleTouchStart('right')}
                        onTouchEnd={() => handleTouchEnd('right')}
                        style={buttonStyle(activeControls.right)}
                    >
                        ▶
                    </button>

                    <div></div>
                    <button
                        onTouchStart={() => handleTouchStart('backward')}
                        onTouchEnd={() => handleTouchEnd('backward')}
                        style={buttonStyle(activeControls.backward)}
                    >
                        ▼
                    </button>
                    <div></div>
                </div>
            </div>

            {/* Right side - Info */}
            <div style={{
                display: 'flex',
                alignItems: 'flex-end',
                color: '#86d8dd',
                fontSize: '14px',
                textAlign: 'right',
                pointerEvents: 'none'
            }}>
                <div>
                    <div>Drive around</div>
                    <div>Click diamonds for info</div>
                </div>
            </div>
        </div>
    )
}
