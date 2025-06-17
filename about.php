<?php include("./includes/nav.php"); ?>

<!-- About Section -->
<section id="about" class="about-section">
    <!-- Background Effects -->
    <div class="about-bg">
        <div class="gradient-sphere sphere-1"></div>
        <div class="gradient-sphere sphere-2"></div>
        <div class="gradient-sphere sphere-3"></div>
        <div class="grid-pattern"></div>
    </div>
    
    <!-- Floating Particles -->
    <div class="particles-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="header-badge">
                <span class="badge-text">Excellence in Every Pixel</span>
                <div class="badge-glow"></div>
            </div>
            
            <h2 class="section-title">
                <span class="title-line">
                    <span class="title-word gradient-text">About</span>
                    <span class="title-word">Vinovate</span>
                </span>
            </h2>
            
            <p class="section-subtitle">
                Where innovation meets excellence, transforming visions into extraordinary digital realities
            </p>
        </div>
        
        <!-- Main Content Grid -->
        <div class="content-grid">
            <!-- Left Side - Mission & Vision -->
            <div class="content-left">
                <!-- Mission Card -->
                <div class="info-card mission-card">
                    <div class="card-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Our Mission</h3>
                        <p class="card-text">
                            To revolutionize the digital landscape through visionary innovation and 
                            uncompromising excellence, creating solutions that don't just meet 
                            expectations—they redefine them.
                        </p>
                    </div>
                    <div class="card-glow"></div>
                </div>
                
                <!-- Vision Card -->
                <div class="info-card vision-card">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Our Vision</h3>
                        <p class="card-text">
                            To be the world's most trusted partner in digital transformation, 
                            where cutting-edge technology meets human-centered design to create 
                            the extraordinary.
                        </p>
                    </div>
                    <div class="card-glow"></div>
                </div>
                
                <!-- Stats Grid -->
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number" data-count="150">0</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="8">0</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="100">0</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Founder Profile -->
            <div class="content-right">
                <div class="founder-card">
                    <div class="founder-image">
                    <img src="assetes/images/cc.webp" alt="Founder Photo" class="founder-photo" />
                    <div class="image-ring ring-1"></div>
                    <div class="image-ring ring-2"></div>
                    <div class="image-ring ring-3"></div>
                </div>
                    
                    <h3 class="founder-name">Vinod Randima</h3>
                    <p class="founder-title">Founder & CEO</p>
                    
                    <p class="founder-bio">
                        A digital virtuoso with an unparalleled vision for creating extraordinary 
                        digital experiences that push the boundaries of what's possible. With a 
                        passion for innovation and a commitment to excellence, leading Vinovate 
                        to new heights in the digital realm.
                    </p>
                    
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    
                    <div class="founder-glow"></div>
                </div>
            </div>
        </div>
        
        <!-- Features Grid -->
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <h4 class="feature-title">Premium Quality</h4>
                <p class="feature-text">Uncompromising excellence in every pixel</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4 class="feature-title">Enterprise Security</h4>
                <p class="feature-text">Military-grade protection standards</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-infinity"></i>
                </div>
                <h4 class="feature-title">Scalable Solutions</h4>
                <p class="feature-text">Built for tomorrow's challenges</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-magic"></i>
                </div>
                <h4 class="feature-title">AI-Powered</h4>
                <p class="feature-text">Next-gen intelligent systems</p>
            </div>
        </div>
        
        
    </div>
</section>

<style>

/* About Section */
.about-section {
    position: relative;
    padding: 120px 0;
    background: #0a0a0a;
    overflow: hidden;
}

/* Background */
.about-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
}

.gradient-sphere {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.6;
}

.sphere-1 {
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, #667eea 0%, transparent 70%);
    top: -250px;
    right: -250px;
    animation: float-1 25s infinite ease-in-out;
}

.sphere-2 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, #764ba2 0%, transparent 70%);
    bottom: -200px;
    left: -200px;
    animation: float-2 30s infinite ease-in-out;
}

.sphere-3 {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, #f093fb 0%, transparent 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: float-3 35s infinite ease-in-out;
}

@keyframes float-1 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-50px, 50px) scale(1.1); }
}

@keyframes float-2 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(50px, -50px) scale(0.9); }
}

@keyframes float-3 {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.2); }
}

.grid-pattern {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
    background-size: 50px 50px;
}

/* Particles */
.particles-container {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: #667eea;
    border-radius: 50%;
    opacity: 0.6;
}

.particle:nth-child(1) {
    top: 20%;
    left: 10%;
    animation: particle-float 15s infinite ease-in-out;
}

.particle:nth-child(2) {
    top: 60%;
    right: 20%;
    animation: particle-float 20s infinite ease-in-out;
    animation-delay: 2s;
}

.particle:nth-child(3) {
    bottom: 30%;
    left: 30%;
    animation: particle-float 25s infinite ease-in-out;
    animation-delay: 4s;
}

.particle:nth-child(4) {
    top: 40%;
    right: 40%;
    animation: particle-float 18s infinite ease-in-out;
    animation-delay: 6s;
}

.particle:nth-child(5) {
    bottom: 20%;
    right: 10%;
    animation: particle-float 22s infinite ease-in-out;
    animation-delay: 8s;
}

@keyframes particle-float {
    0%, 100% { transform: translate(0, 0); opacity: 0; }
    10%, 90% { opacity: 0.6; }
    50% { transform: translate(30px, -30px); }
}

/* Container */
.container {
    position: relative;
    z-index: 10;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header */
.section-header {
    text-align: center;
    margin-bottom: 80px;
}

.header-badge {
    display: inline-block;
    position: relative;
    margin-bottom: 30px;
}

.badge-text {
    display: inline-block;
    padding: 10px 25px;
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
    inset: 0;
    background: #667eea;
    border-radius: 50px;
    filter: blur(20px);
    opacity: 0.2;
}

.section-title {
    font-size: clamp(3rem, 6vw, 5rem);
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.1;
}

.title-word {
    display: inline-block;
    color: white;
    animation: title-fade 0.8s ease forwards;
    opacity: 0;
    transform: translateY(30px);
}

.title-word:nth-child(2) {
    animation-delay: 0.2s;
}

.gradient-text {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

@keyframes title-fade {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section-subtitle {
    font-size: 1.25rem;
    color: #888;
    max-width: 600px;
    margin: 0 auto;
}

/* Content Grid */
.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    margin-bottom: 80px;
    align-items: start;
}

/* Info Cards */
.info-card {
    position: relative;
    padding: 40px;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    border: 1px solid #333;
    border-radius: 20px;
    margin-bottom: 30px;
    display: flex;
    align-items: start;
    gap: 30px;
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    border-color: #667eea;
}

.card-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
    flex-shrink: 0;
}

.vision-card .card-icon {
    background: linear-gradient(135deg, #764ba2 0%, #f093fb 100%);
}

.card-content {
    flex: 1;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 15px;
}

.card-text {
    font-size: 1.1rem;
    color: #aaa;
    line-height: 1.6;
}

.card-glow {
    position: absolute;
    inset: -2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 20px;
    opacity: 0;
    z-index: -1;
    filter: blur(10px);
    transition: opacity 0.3s ease;
}

.info-card:hover .card-glow {
    opacity: 0.3;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.stat-item {
    text-align: center;
    padding: 30px 20px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    transition: all 0.3s ease;
}

.stat-item:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateY(-3px);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
}

.stat-number::after {
    content: '%';
    font-size: 1.5rem;
}

.stat-number:first-child::after,
.stat-number:nth-child(2)::after {
    content: '+';
}

.stat-label {
    font-size: 0.9rem;
    color: #888;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Founder Card */
.founder-card {
    position: relative;
    padding: 50px;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    border: 1px solid #333;
    border-radius: 30px;
    text-align: center;
    overflow: hidden;
}

.founder-image {
    position: relative;
    width: 150px;
    height: 150px;
    margin: 0 auto 30px;
}
.founder-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    display: block;
    position: relative;
    z-index: 1;
}

.image-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: white;
    position: relative;
    z-index: 1;
}

.image-ring {
    position: absolute;
    inset: -10px;
    border: 2px solid transparent;
    border-radius: 50%;
    animation: ring-rotate 10s linear infinite;
}

.ring-1 {
    border-color: #667eea transparent transparent transparent;
    animation-duration: 8s;
}

.ring-2 {
    inset: -20px;
    border-color: transparent #764ba2 transparent transparent;
    animation-duration: 12s;
    animation-direction: reverse;
}

.ring-3 {
    inset: -30px;
    border-color: transparent transparent #f093fb transparent;
    animation-duration: 15s;
}

@keyframes ring-rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.founder-name {
    font-size: 2rem;
    font-weight: 800;
    color: white;
    margin-bottom: 10px;
}

.founder-title {
    font-size: 1.1rem;
    color: #667eea;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.founder-bio {
    font-size: 1.1rem;
    color: #aaa;
    line-height: 1.6;
    margin-bottom: 30px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-link {
    width: 45px;
    height: 45px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #888;
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-color: transparent;
    color: white;
    transform: translateY(-3px);
}

.founder-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, #667eea 0%, transparent 70%);
    opacity: 0.2;
    filter: blur(60px);
    pointer-events: none;
}

/* Features Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.feature-item {
    text-align: center;
    padding: 40px 30px;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    border: 1px solid #333;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-10px);
    border-color: #667eea;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    margin: 0 auto 20px;
    position: relative;
    overflow: hidden;
}

.feature-item:nth-child(2) .feature-icon {
    background: linear-gradient(135deg, #764ba2 0%, #f093fb 100%);
}

.feature-item:nth-child(3) .feature-icon {
    background: linear-gradient(135deg, #f093fb 0%, #4facfe 100%);
}

.feature-item:nth-child(4) .feature-icon {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
}

.feature-icon::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
    transform: rotate(45deg);
    animation: icon-shine 3s infinite;
}

@keyframes icon-shine {
    0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
    100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

.feature-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: white;
    margin-bottom: 10px;
}

.feature-text {
    font-size: 1rem;
    color: #888;
    line-height: 1.5;
}

/* CTA Section */
.cta-section {
    text-align: center;
}

.cta-button {
    position: relative;
    padding: 18px 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 50px;
    color: white;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
}

.btn-icon {
    transition: transform 0.3s ease;
}

.cta-button:hover .btn-icon {
    transform: translateX(5px);
}

.btn-glow {
    position: absolute;
    inset: 0;
    background: inherit;
    filter: blur(20px);
    opacity: 0.5;
    z-index: -1;
}

/* Responsive */
@media (max-width: 768px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .info-card {
        flex-direction: column;
        text-align: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.info-card,
.stat-item,
.founder-card,
.feature-item {
    animation: fadeInUp 0.8s ease forwards;
    opacity: 0;
}

.info-card:nth-child(1) { animation-delay: 0.1s; }
.info-card:nth-child(2) { animation-delay: 0.2s; }
.stat-item:nth-child(1) { animation-delay: 0.3s; }
.stat-item:nth-child(2) { animation-delay: 0.4s; }
.stat-item:nth-child(3) { animation-delay: 0.5s; }
.feature-item:nth-child(1) { animation-delay: 0.6s; }
.feature-item:nth-child(2) { animation-delay: 0.7s; }
.feature-item:nth-child(3) { animation-delay: 0.8s; }
.feature-item:nth-child(4) { animation-delay: 0.9s; }
</style>

<script>
// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    const countUp = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const increment = target / speed;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target;
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current);
            }
        }, 10);
    };
    
    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                countUp(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>