document.addEventListener('DOMContentLoaded', function() {
    const CELL_SIZE = 10;
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
                transition: opacity 0.3s ease-in, opacity 0.6s ease-out;
            `;
            pixelContainer.appendChild(pixel);
        }
    }
    
    const pixels = Array.from(document.querySelectorAll('.pixel'));
    const colors = ['#00AEEF', '#FF4444', '#00FF87'];
    const totalPixels = pixels.length;
    const baseMaxPixels = Math.floor(totalPixels * 1); // Base maximum (1.5%)
    let activePixels = new Set();
    let time = 0;
    
    // Function to get current max pixels based on sine wave
    const getCurrentMaxPixels = () => {
        // Sine wave oscillates between 0.5x and 1.5x the base max
        const multiplier = 1;
        return Math.floor(baseMaxPixels * multiplier);
    };
    
    // Function to get current spawn interval based on sine wave
    const getCurrentSpawnInterval = () => {
        // Spawn interval varies between 100ms and 300ms based on position in wave
        return 0 + Math.sin(time * 0.1 + Math.PI) * 120;
    };
    
    const activatePixel = (pixel) => {
        const currentMax = getCurrentMaxPixels();
        if (!activePixels.has(pixel) && activePixels.size < currentMax) {
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            const rgb = hexToRgb(randomColor);
            pixel.style.setProperty('--pixel-color', `${rgb.r}, ${rgb.g}, ${rgb.b}`);
            pixel.style.backgroundColor = randomColor;
            pixel.style.opacity = '0.4';
            activePixels.add(pixel);
            
            const duration = 1000 + Math.random() * 0;
            
            setTimeout(() => {
                pixel.style.opacity = '0';
                setTimeout(() => {
                    activePixels.delete(pixel);
                }, 1000);
            }, duration);
        }
    };
    
    // Main animation loop
    const animate = () => {
        time++;
        
        if (activePixels.size < getCurrentMaxPixels()) {
            const availablePixels = pixels.filter(p => !activePixels.has(p));
            const randomPixel = availablePixels[Math.floor(Math.random() * availablePixels.length)];
            if (randomPixel) {
                activatePixel(randomPixel);
            }
        }
        
        // Schedule next frame based on current spawn interval
        setTimeout(animate, getCurrentSpawnInterval());
    };
    
    // Start the animation
    animate();
});

function hexToRgb(hex) {
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
} 