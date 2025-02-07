class Typewriter {
    constructor(element, text, startDelay = 1000) {
        this.element = element;
        this.fullText = text;
        this.startDelay = startDelay;
        this.currentText = '';
        this.currentIndex = 0;
        this.isTyping = false;
    }

    type() {
        if (this.currentIndex < this.fullText.length) {
            this.currentText += this.fullText.charAt(this.currentIndex);
            this.element.textContent = this.currentText;
            this.currentIndex++;
            
            // Vary the typing speed
            const delay = this.fullText.charAt(this.currentIndex - 1) === '\n' ? 125 : 
                         Math.random() * 30 + 10; // Random delay between 50-100ms
            
            setTimeout(() => this.type(), delay);
        }
    }

    start() {
        setTimeout(() => this.type(), this.startDelay);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const codeElement = document.getElementById('typewriter-code');
    if (codeElement) {
        // Use explicit line breaks and no extra spaces
        const codeText = 
`// Your complete digital toolkit
const pixelcraft = {
    web: 'development & maintenance',
    brand: 'strategy & identity',
    marketing: 'digital & content',
    product: 'design & strategy'
};`;

        codeElement.textContent = '';
        codeElement.classList.add('typewriter');
        
        const typewriter = new Typewriter(codeElement, codeText);
        typewriter.start();
    }
}); 