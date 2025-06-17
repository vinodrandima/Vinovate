<?php include("./includes/header.php"); ?>
    <!-- Hero Section -->
<section id="home" class="hero-section">
    <!-- Animated Background -->
    <div class="hero-bg">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="gradient-orb orb-3"></div>
        <div class="grid-overlay"></div>
        <div class="particles" id="particles"></div>
    </div>
    
    <!-- Content -->
    <div class="hero-content">
        <div class="hero-badge">
            
            <div class="badge-glow"></div>
        </div>
        
        <h1 class="hero-title">
            <div class="title-line">
                <span class="title-word" data-text="Innovative">Innovative</span>
                <span class="title-word" data-text="Solutions">Solutions</span>
            </div>
            <div class="title-line">
                <span class="title-word" data-text="for">for</span>
                <span class="title-word " data-text="Digital">Digital</span>
                <span class="title-word " data-text="Excellence">Excellence</span>
            </div>
        </h1>
        
        <p class="hero-description">
            Crafting exceptional websites and mobile applications that bring your ideas to life with cutting-edge technology and creative design.
        </p>
        
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number" data-count="150">0</span>
                <span class="stat-label">Projects Completed</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="98">0</span>
                <span class="stat-label">Happy Clients</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number" data-count="5">0</span>
                <span class="stat-label">Years Experience</span>
            </div>
        </div>
        
        <div class="hero-cta">
            <button class="cta-primary" onclick="scrollToSection('contact')">
                <span class="btn-text">Get Free Consultation</span>
                <div class="btn-glow"></div>
                <div class="btn-particles">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            
            <button class="cta-secondary" onclick="scrollToSection('portfolio')">
                <span class="btn-text">View Our Work</span>
                <div class="btn-border"></div>
            </button>
        </div>
        
        
    </div>
    
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="float-element element-1">
            <i class="fas fa-code"></i>
        </div>
        <div class="float-element element-2">
            <i class="fas fa-mobile-alt"></i>
        </div>
        <div class="float-element element-3">
            <i class="fas fa-paintbrush"></i>
        </div>
        <div class="float-element element-4">
            <i class="fas fa-rocket"></i>
        </div>
    </div>
</section>

<style>
    
/* Hero Section */
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: #000;
}

/* Animated Background */
.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.gradient-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.6;
    animation: orb-float 20s infinite ease-in-out;
}

.orb-1 {
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, #667eea 0%, transparent 70%);
    top: -300px;
    left: -300px;
    animation-delay: 0s;
}

.orb-2 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, #764ba2 0%, transparent 70%);
    bottom: -200px;
    right: -200px;
    animation-delay: 5s;
}

.orb-3 {
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, #f093fb 0%, transparent 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation-delay: 10s;
}

@keyframes orb-float {
    0%, 100% { 
        transform: translate(0, 0) scale(1);
        opacity: 0.6;
    }
    33% { 
        transform: translate(50px, -50px) scale(1.1);
        opacity: 0.8;
    }
    66% { 
        transform: translate(-50px, 50px) scale(0.9);
        opacity: 0.5;
    }
}

.grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: grid-move 10s linear infinite;
}

@keyframes grid-move {
    0% { transform: translate(0, 0); }
    100% { transform: translate(50px, 50px); }
}

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: #667eea;
    border-radius: 50%;
    opacity: 0;
    animation: particle-rise 10s infinite ease-out;
}

@keyframes particle-rise {
    0% {
        opacity: 0;
        transform: translateY(100vh) scale(0);
    }
    10% {
        opacity: 1;
        transform: translateY(80vh) scale(1);
    }
    100% {
        opacity: 0;
        transform: translateY(-100px) scale(0);
    }
}

/* Hero Content */
.hero-content {
    position: relative;
    z-index: 10;
    text-align: center;
    max-width: 1200px;
    padding: 0 20px;
}

.hero-badge {
    position: relative;
    display: inline-block;
    margin-bottom: 30px;
}

.badge-text {
    display: inline-block;
    padding: 8px 20px;
    background: rgba(102, 126, 234, 0.1);
    border: 1px solid rgba(102, 126, 234, 0.3);
    border-radius: 50px;
    color: #667eea;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.badge-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background: #667eea;
    border-radius: 50px;
    filter: blur(20px);
    opacity: 0.3;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 0.3; transform: translate(-50%, -50%) scale(1); }
    50% { opacity: 0.5; transform: translate(-50%, -50%) scale(1.1); }
}

.hero-title {
    font-size: clamp(3rem, 8vw, 6rem);
    zoom: 0.8;
    font-weight: 900;
    line-height: 1.1;
    margin-bottom: 30px;
}

.title-line {
    display: block;
    overflow: hidden;
    
}

.title-word {
    display: inline-block;
    color: white;
    position: relative;
    animation: title-reveal 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    opacity: 0;
    transform: translateY(100px) rotateX(-90deg);
}

.title-word:nth-child(1) { animation-delay: 0.1s; }
.title-word:nth-child(2) { animation-delay: 0.2s; }
.title-word:nth-child(3) { animation-delay: 0.3s; }
.title-word:nth-child(4) { animation-delay: 0.4s; }
.title-word:nth-child(5) { animation-delay: 0.5s; }

@keyframes title-reveal {
    to {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }
}

.gradient-text {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #667eea 100%);
    background-size: 400% 400%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradient-shift 5s ease infinite;
}

@keyframes gradient-shift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.hero-description {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 800px;
    margin: 0 auto 50px;
    line-height: 1.8;
    animation: fade-up 1s ease forwards 0.6s;
    opacity: 0;
    transform: translateY(30px);
}

@keyframes fade-up {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Stats */
.hero-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
    margin-bottom: 50px;
    flex-wrap: wrap;
    animation: fade-up 1s ease forwards 0.8s;
    opacity: 0;
    transform: translateY(30px);
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: 900;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 5px;
}

.stat-label {
    display: block;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.stat-divider {
    width: 1px;
    height: 50px;
    background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.2), transparent);
}

/* CTA Buttons */
.hero-cta {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    animation: fade-up 1s ease forwards 1s;
    opacity: 0;
    transform: translateY(30px);
}

.cta-primary {
    position: relative;
    padding: 18px 40px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 50px;
    color: white;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
}

.btn-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background: inherit;
    border-radius: 50px;
    filter: blur(20px);
    opacity: 0.5;
    z-index: -1;
}

.cta-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
}

.cta-primary:hover .btn-glow {
    opacity: 0.8;
}

.btn-particles {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.btn-particles span {
    position: absolute;
    display: block;
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    opacity: 0;
}

.cta-primary:hover .btn-particles span {
    animation: particle-explode 0.6s ease forwards;
}

.cta-primary:hover .btn-particles span:nth-child(1) {
    animation-delay: 0s;
    transform: rotate(0deg) translateX(0);
}

.cta-primary:hover .btn-particles span:nth-child(2) {
    animation-delay: 0.1s;
    transform: rotate(120deg) translateX(0);
}

.cta-primary:hover .btn-particles span:nth-child(3) {
    animation-delay: 0.2s;
    transform: rotate(240deg) translateX(0);
}

@keyframes particle-explode {
    0% {
        opacity: 1;
        transform: rotate(var(--r, 0deg)) translateX(0);
    }
    100% {
        opacity: 0;
        transform: rotate(var(--r, 0deg)) translateX(80px);
    }
}

.cta-secondary {
    position: relative;
    padding: 18px 40px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    color: white;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
}

.btn-border {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
    border-radius: 50px;
    opacity: 0;
    z-index: -1;
    transition: opacity 0.3s ease;
}

.cta-secondary:hover {
    color: white;
    transform: translateY(-3px);
    border-color: transparent;
}

.cta-secondary:hover .btn-border {
    opacity: 1;
    animation: border-rotate 3s linear infinite;
}

@keyframes border-rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    animation: fade-up 1s ease forwards 1.2s;
    opacity: 0;
}

.mouse {
    width: 30px;
    height: 50px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 25px;
    margin: 0 auto 10px;
    position: relative;
}

.wheel {
    width: 4px;
    height: 8px;
    background: #667eea;
    border-radius: 2px;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    animation: wheel-scroll 2s infinite;
}

@keyframes wheel-scroll {
    0% { opacity: 1; transform: translateX(-50%) translateY(0); }
    100% { opacity: 0; transform: translateX(-50%) translateY(20px); }
}

.scroll-text {
    display: block;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Floating Elements */
.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 5;
}

.float-element {
    position: absolute;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    color: rgba(255, 255, 255, 0.3);
    font-size: 24px;
}

.element-1 {
    top: 20%;
    left: 10%;
    animation: float-1 15s infinite ease-in-out;
}

.element-2 {
    top: 20%;
    right: 10%;
    animation: float-2 18s infinite ease-in-out;
}

.element-3 {
    bottom: 30%;
    left: 15%;
    animation: float-3 20s infinite ease-in-out;
}

.element-4 {
    bottom: 30%;
    right: 15%;
    animation: float-4 22s infinite ease-in-out;
}

@keyframes float-1 {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

@keyframes float-2 {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(-30px, 20px) rotate(-120deg); }
    66% { transform: translate(20px, -30px) rotate(-240deg); }
}

@keyframes float-3 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(40px, -40px) scale(1.2); }
}

@keyframes float-4 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-40px, 40px) scale(0.8); }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: clamp(2rem, 10vw, 3.5rem);
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
    .hero-stats {
        gap: 30px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .hero-cta {
        flex-direction: column;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .cta-primary,
    .cta-secondary {
        width: 100%;
    }
    
    .floating-elements {
        display: none;
    }
}
</style>

<script>
// Smooth scroll function
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

// Animated counter
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    const countUp = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const count = parseInt(counter.innerText);
        const increment = target / speed;
        
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => countUp(counter), 10);
        } else {
            counter.innerText = target;
        }
    };
    
    // Intersection Observer for counter animation
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                countUp(counter);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
    
    // Generate particles
    const particlesContainer = document.getElementById('particles');
    const particleCount = 50;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 10 + 's';
        particle.style.animationDuration = (10 + Math.random() * 10) + 's';
        particlesContainer.appendChild(particle);
    }
});
</script>