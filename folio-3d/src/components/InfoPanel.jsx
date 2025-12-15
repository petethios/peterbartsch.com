import { useEffect } from 'react'

export function InfoPanel({ data, onClose }) {
    // Close on ESC key
    useEffect(() => {
        const handleEsc = (e) => {
            if (e.key === 'Escape') onClose()
        }
        window.addEventListener('keydown', handleEsc)
        return () => window.removeEventListener('keydown', handleEsc)
    }, [onClose])

    if (!data) return null

    return (
        <div style={{
            position: 'fixed',
            top: 0,
            left: 0,
            right: 0,
            bottom: 0,
            background: 'rgba(0, 0, 0, 0.8)',
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            zIndex: 1000,
            animation: 'fadeIn 0.3s ease-out'
        }}
            onClick={onClose}
        >
            <style>{`
        @keyframes fadeIn {
          from { opacity: 0; }
          to { opacity: 1; }
        }
        @keyframes slideUp {
          from { 
            opacity: 0;
            transform: translateY(20px);
          }
          to { 
            opacity: 1;
            transform: translateY(0);
          }
        }
      `}</style>

            <div style={{
                background: '#1a3a3d',
                border: '2px solid #86d8dd',
                borderRadius: '12px',
                padding: '32px',
                maxWidth: '600px',
                width: '90%',
                maxHeight: '80vh',
                overflow: 'auto',
                animation: 'slideUp 0.3s ease-out',
                boxShadow: '0 0 40px rgba(134, 216, 221, 0.3)'
            }}
                onClick={(e) => e.stopPropagation()}
            >
                {/* Close button */}
                <button
                    onClick={onClose}
                    style={{
                        position: 'absolute',
                        top: '16px',
                        right: '16px',
                        background: 'transparent',
                        border: '2px solid #86d8dd',
                        color: '#86d8dd',
                        fontSize: '24px',
                        width: '40px',
                        height: '40px',
                        borderRadius: '50%',
                        cursor: 'pointer',
                        display: 'flex',
                        alignItems: 'center',
                        justifyContent: 'center',
                        transition: 'all 0.2s'
                    }}
                    onMouseOver={(e) => {
                        e.target.style.background = '#86d8dd'
                        e.target.style.color = '#1a3a3d'
                    }}
                    onMouseOut={(e) => {
                        e.target.style.background = 'transparent'
                        e.target.style.color = '#86d8dd'
                    }}
                >
                    ×
                </button>

                {/* Title */}
                <h2 style={{
                    color: '#86d8dd',
                    fontSize: '32px',
                    marginTop: 0,
                    marginBottom: '16px',
                    fontWeight: 'bold'
                }}>
                    {data.title}
                </h2>

                {/* Role & Duration */}
                {data.role && (
                    <div style={{
                        color: '#86d8dd',
                        fontSize: '18px',
                        marginBottom: '8px',
                        opacity: 0.9
                    }}>
                        {data.role}
                    </div>
                )}

                {data.duration && (
                    <div style={{
                        color: '#86d8dd',
                        fontSize: '14px',
                        marginBottom: '24px',
                        opacity: 0.7
                    }}>
                        {data.duration}
                    </div>
                )}

                {/* Description */}
                <div style={{
                    color: '#ffffff',
                    fontSize: '16px',
                    lineHeight: '1.6',
                    marginBottom: '24px'
                }}>
                    {data.description}
                </div>

                {/* Achievements/Highlights */}
                {data.highlights && data.highlights.length > 0 && (
                    <div style={{ marginBottom: '24px' }}>
                        <h3 style={{
                            color: '#86d8dd',
                            fontSize: '20px',
                            marginBottom: '12px'
                        }}>
                            Key Achievements
                        </h3>
                        <ul style={{
                            color: '#ffffff',
                            fontSize: '15px',
                            lineHeight: '1.8',
                            paddingLeft: '20px'
                        }}>
                            {data.highlights.map((highlight, i) => (
                                <li key={i} style={{ marginBottom: '8px' }}>{highlight}</li>
                            ))}
                        </ul>
                    </div>
                )}

                {/* Link */}
                {data.link && (
                    <a
                        href={data.link}
                        target="_blank"
                        rel="noopener noreferrer"
                        style={{
                            display: 'inline-block',
                            background: '#86d8dd',
                            color: '#1a3a3d',
                            padding: '12px 24px',
                            borderRadius: '6px',
                            textDecoration: 'none',
                            fontWeight: 'bold',
                            fontSize: '16px',
                            transition: 'all 0.2s',
                            border: '2px solid #86d8dd'
                        }}
                        onMouseOver={(e) => {
                            e.target.style.background = 'transparent'
                            e.target.style.color = '#86d8dd'
                        }}
                        onMouseOut={(e) => {
                            e.target.style.background = '#86d8dd'
                            e.target.style.color = '#1a3a3d'
                        }}
                    >
                        Learn More →
                    </a>
                )}
            </div>
        </div>
    )
}
