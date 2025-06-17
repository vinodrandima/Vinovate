<!-- Services Section -->
<section id="services" class="services-section">
    <!-- Background Pattern -->
    <div class="services-bg">
        <div class="pattern-grid"></div>
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
    </div>
    
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="header-badge">
                <span class="badge-text">What We Offer</span>
                <div class="badge-glow"></div>
            </div>
            
            <h2 class="section-title">
                <span class="title-gradient">Our Services</span>
            </h2>
            
            <p class="section-subtitle">
                We offer comprehensive digital solutions to help your business succeed in the modern world
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Web Development -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        Custom responsive websites, e-commerce platforms, and content management systems built with modern technologies.
                    </p>
                    <ul class="service-features">
                        <li>
                            <span class="feature-icon">•</span>
                            Responsive Design
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            E-commerce Solutions
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            CMS Development
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            Performance Optimization
                        </li>
                    </ul>
                    <button class="service-btn">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile App Development -->
            <div class="service-card featured">
                <div class="featured-badge">Most Popular</div>
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3 class="service-title">Mobile App Development</h3>
                    <p class="service-description">
                        Native and cross-platform mobile applications for iOS and Android with seamless user experiences.
                    </p>
                    <ul class="service-features">
                        <li>
                            <span class="feature-icon">•</span>
                            iOS & Android Apps
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            Cross-platform Solutions
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            App Store Optimization
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            Maintenance & Updates
                        </li>
                    </ul>
                    <button class="service-btn">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            
            <!-- UI/UX Design -->
            <div class="service-card">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        User-centered design solutions that create intuitive and engaging digital experiences for your audience.
                    </p>
                    <ul class="service-features">
                        <li>
                            <span class="feature-icon">•</span>
                            Wireframes & Prototypes
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            User Research
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            Brand Identity
                        </li>
                        <li>
                            <span class="feature-icon">•</span>
                            Usability Testing
                        </li>
                    </ul>
                    <button class="service-btn">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Section */
.services-section {
    position: relative;
    min-height: 100vh;
    padding: 60px 0;
    background: #ffffff;
    overflow: hidden;
    display: flex;
    align-items: center;
}

/* Background */
.services-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
}

.pattern-grid {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(102, 126, 234, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(102, 126, 234, 0.03) 1px, transparent 1px);
    background-size: 50px 50px;
}

.gradient-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.1;
}

.orb-1 {
    width: 600px;
    height: 600px;
    background: #667eea;
    top: -300px;
    left: -300px;
}

.orb-2 {
    width: 500px;
    height: 500px;
    background: #764ba2;
    bottom: -250px;
    right: -250px;
}

/* Container */
.container {
    position: relative;
    z-index: 10;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
}

/* Header */
.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.header-badge {
    display: inline-block;
    position: relative;
    margin-bottom: 30px;
}

.badge-text {
    display: inline-block;
    padding: 8px 20px;
    background: rgba(102, 126, 234, 0.1);
    border: 1px solid rgba(102, 126, 234, 0.2);
    border-radius: 50px;
    color: #667eea;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.badge-glow {
    position: absolute;
    inset: 0;
    background: #667eea;
    border-radius: 50px;
    filter: blur(20px);
    opacity: 0.1;
}

.section-title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    margin-bottom: 20px;
}

.title-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.section-subtitle {
    font-size: 1.25rem;
    color: #6b7280;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 60px;
}

.service-card {
    position: relative;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(102, 126, 234, 0.15);
}

.service-card.featured {
    border: 2px solid #667eea;
}

.featured-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    z-index: 2;
}

.card-glow {
    position: absolute;
    inset: -2px;
    background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
    border-radius: 24px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.service-card:hover .card-glow {
    opacity: 0.3;
    filter: blur(10px);
}

.card-content {
    padding: 30px;
    position: relative;
    z-index: 1;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.service-icon {
    position: relative;
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
}

.service-icon i {
    position: relative;
    z-index: 2;
    font-size: 2rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.icon-bg {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    border-radius: 20px;
    transform: rotate(-6deg);
    transition: transform 0.3s ease;
}

.service-card:hover .icon-bg {
    transform: rotate(6deg) scale(1.1);
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 15px;
}

.service-description {
    font-size: 1rem;
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 25px;
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
}

.service-features li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    color: #4b5563;
    font-size: 0.95rem;
}

.feature-icon {
    color: #667eea;
    font-weight: 700;
}

.service-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.95rem;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.service-btn:hover {
    transform: translateX(5px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
}

.service-btn i {
    font-size: 0.85rem;
    transition: transform 0.3s ease;
}

.service-btn:hover i {
    transform: translateX(3px);
}

/* Responsive */
@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .card-content {
        padding: 30px;
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

.service-card {
    animation: fadeInUp 0.8s ease forwards;
    opacity: 0;
}

.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
</style>

<script>
// Smooth animations on scroll
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    document.querySelectorAll('.service-card').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
});
</script>