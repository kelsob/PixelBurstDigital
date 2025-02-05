document.addEventListener('DOMContentLoaded', function() {
    const CELL_SIZE = 20;
    const pixelContainer = document.getElementById('pixel-animation');
    const backgroundGrid = document.getElementById('background-grid');
    
    // Setup background grid
    const cols = Math.ceil(pixelContainer.offsetWidth / CELL_SIZE);
    const rows = Math.ceil(pixelContainer.offsetHeight / CELL_SIZE);
    
    // Create background grid cells
    for (let i = 0; i < rows * cols; i++) {
        const cell = document.createElement('div');
        cell.className = 'border-t border-l border-gray-500';
        backgroundGrid.appendChild(cell);
    }
    
    // Create pixel grid matching background grid
    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            const pixel = document.createElement('div');
            pixel.className = 'pixel';
            pixel.style.cssText = `
                position: absolute;
                width: ${CELL_SIZE}px;
                height: ${CELL_SIZE}px;
                left: ${j * CELL_SIZE}px;
                top: ${i * CELL_SIZE}px;
                opacity: 0;
                transition: opacity 0.3s ease-in, opacity 0.9s ease-out;
            `;
            pixelContainer.appendChild(pixel);
        }
    }
    
    const pixels = Array.from(document.querySelectorAll('.pixel'));
    const colors = ['#00AEEF', '#FF4444', '#00FF87'];
    const totalPixels = pixels.length;
    const maxActivePixels = Math.floor(totalPixels * 0.015); // 1.5%
    let activePixels = new Set();
    
    // Function to activate a pixel
    const activatePixel = (pixel) => {
        if (!activePixels.has(pixel) && activePixels.size < maxActivePixels) {
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            // Convert hex to RGB for the glow
            const rgb = hexToRgb(randomColor);
            pixel.style.setProperty('--pixel-color', `${rgb.r}, ${rgb.g}, ${rgb.b}`);
            pixel.style.backgroundColor = randomColor;
            pixel.style.opacity = '0.4';
            activePixels.add(pixel);
            
            const duration = 1000 + Math.random() * 4000;
            
            setTimeout(() => {
                pixel.style.opacity = '0';
                setTimeout(() => {
                    activePixels.delete(pixel);
                }, 1000);
            }, duration);
        }
    };
    
    // Regular interval for activations
    setInterval(() => {
        if (activePixels.size < maxActivePixels) {
            const availablePixels = pixels.filter(p => !activePixels.has(p));
            const randomPixel = availablePixels[Math.floor(Math.random() * availablePixels.length)];
            if (randomPixel) {
                activatePixel(randomPixel);
            }
        }
    }, 200);
});

function hexToRgb(hex) {
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
} 