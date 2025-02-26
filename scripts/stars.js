const container = document.querySelector('.cards-page'); // Wyszukuje element po klasie
const canvas = container.querySelector('canvas');
const ctx = canvas.getContext('2d');

function resizeCanvasToContainer() {
    const { width, height } = container.getBoundingClientRect();
    canvas.width = width;
    canvas.height = height;
}

// Reszta kodu pozostaje bez zmian
resizeCanvasToContainer();
let particles = [];
const centerX = canvas.width / 2;
const centerY = canvas.height / 2;

class Particle {
    constructor(angle, radius, speed, color) {
        this.angle = angle;
        this.radius = radius;
        this.speed = speed;
        this.color = color;
    }
    update() {
        this.angle += this.speed;
        const x = centerX + this.radius * Math.cos(this.angle);
        const y = centerY + this.radius * Math.sin(this.angle);
        ctx.beginPath();
        ctx.arc(x, y, 3, 0, Math.PI * 2);
        ctx.fillStyle = this.color;
        ctx.fill();
        ctx.closePath();
    }
}

function initParticles(count) {
    particles = [];
    for (let i = 0; i < count; i++) {
        const angle = Math.random() * Math.PI * 2;
        const radius = Math.random() * 200 + 90;
        const speed = Math.random() * 0.005 + 0.0001;
        const color = '#FFFFFF';
        particles.push(new Particle(angle, radius, speed, color));
    }
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach((particle) => particle.update());
    requestAnimationFrame(animate);
}

window.addEventListener('resize', () => {
    canvas.width = innerHeight;
    canvas.height = innerHeight;
    initParticles(200);
});

initParticles(200);
animate();