<?php include("./includes/header.php"); ?>
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section">
    <div class="portfolio-bg">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
    
    <div class="container">
        <div class="section-header">
            <span class="section-label">Our Work</span>
            <h2 class="section-title">
                <span class="title-wordr">Creative</span>
                <span class="title-wordr">Portfolio</span>
            </h2>
            <p class="section-description">
                Transforming ideas into exceptional digital experiences that captivate and convert
            </p>
        </div>
        
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Design</button>
            <button class="filter-btn" data-filter="app">Mobile Apps</button>
        </div>
        
        <div class="portfolio-grid">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3 class="project-title">E-Commerce Platform</h3>
                            <div class="project-tags">
                                <span class="tag">React</span>
                                <span class="tag">Node.js</span>
                                <span class="tag">MongoDB</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Modern E-Commerce</h4>
                            <p>Full-featured online store with AI-powered recommendations, real-time inventory, and seamless checkout experience.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="portfolio-item" data-category="app">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon gradient-2">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3 class="project-title">Social Media App</h3>
                            <div class="project-tags">
                                <span class="tag">Flutter</span>
                                <span class="tag">Firebase</span>
                                <span class="tag">WebRTC</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Connect & Share</h4>
                            <p>Cross-platform social app with video calls, real-time messaging, and AI content moderation.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon gradient-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="project-title">Analytics Dashboard</h3>
                            <div class="project-tags">
                                <span class="tag">Vue.js</span>
                                <span class="tag">D3.js</span>
                                <span class="tag">Python</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Data Intelligence</h4>
                            <p>Advanced BI platform with predictive analytics, real-time visualization, and custom reporting.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="portfolio-item" data-category="brand">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon gradient-4">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3 class="project-title">Brand Identity</h3>
                            <div class="project-tags">
                                <span class="tag">Branding</span>
                                <span class="tag">UI/UX</span>
                                <span class="tag">Motion</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Visual Excellence</h4>
                            <p>Complete brand overhaul including logo design, brand guidelines, and motion graphics.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="portfolio-item" data-category="app">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon gradient-5">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <h3 class="project-title">Gaming Platform</h3>
                            <div class="project-tags">
                                <span class="tag">Unity</span>
                                <span class="tag">C#</span>
                                <span class="tag">WebGL</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Play & Compete</h4>
                            <p>Multiplayer gaming platform with tournaments, leaderboards, and real-time matchmaking.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="project-icon gradient-6">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="project-title">E-Learning Portal</h3>
                            <div class="project-tags">
                                <span class="tag">Next.js</span>
                                <span class="tag">GraphQL</span>
                                <span class="tag">AWS</span>
                            </div>
                        </div>
                        <div class="card-back">
                            <h4>Learn & Grow</h4>
                            <p>Interactive learning platform with AI tutors, progress tracking, and certificate generation.</p>
                            <a href="#" class="project-link">
                                View Project
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-glow"></div>
                </div>
            </div>
        </div>

        
    </div>
</section>

<style>
/* Portfolio Section Styles */
.portfolio-section {
    position: relative;
    padding: 60px 0;
    background: #0a0a0a;
    overflow: hidden;
}

.portfolio-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.floating-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.3;
}

.shape-1 {
    width: 400px;
    height: 400px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    top: -200px;
    left: -200px;
    animation: float1 20s infinite ease-in-out;
}

.shape-2 {
    width: 300px;
    height: 300px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    bottom: -150px;
    right: -150px;
    animation: float2 25s infinite ease-in-out;
}

.shape-3 {
    width: 250px;
    height: 250px;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: float3 30s infinite ease-in-out;
}

@keyframes float1 {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

@keyframes float2 {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(-30px, -20px) rotate(120deg); }
    66% { transform: translate(20px, -30px) rotate(240deg); }
}

@keyframes float3 {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.1); }
}

.container {
    position: relative;
    z-index: 1;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Section Header */
.section-header {
    text-align: center;
    margin-bottom: 80px;
}

.section-label {
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #667eea;
    margin-bottom: 20px;
    position: relative;
}

.section-label::before,
.section-label::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 50px;
    height: 1px;
    background: linear-gradient(90deg, transparent, #667eea);
}

.section-label::before {
    right: calc(100% + 20px);
    background: linear-gradient(90deg, #667eea, transparent);
}

.section-label::after {
    left: calc(100% + 20px);
}

.section-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.2;
}

.title-wordr {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradient-shift 3s ease infinite;
}

@keyframes gradient-shift {
    0%, 100% { filter: hue-rotate(0deg); }
    50% { filter: hue-rotate(30deg); }
}

.section-description {
    font-size: 1.25rem;
    color: #888;
    max-width: 600px;
    margin: 0 auto;
    margin-bottom: 60px;
}

/* Portfolio Filters */
.portfolio-filters {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 60px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 10px 25px;
    background: transparent;
    border: 2px solid #333;
    color: #888;
    font-size: 16px;
    font-weight: 600;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.filter-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, #667eea, #764ba2);
    transition: left 0.3s ease;
    z-index: -1;
}

.filter-btn:hover {
    color: white;
    border-color: transparent;
}

.filter-btn:hover::before {
    left: 0;
}

.filter-btn.active {
    color: white;
    border-color: transparent;
    background: linear-gradient(135deg, #667eea, #764ba2);
}

/* Portfolio Grid */
.portfolio-grid {
    zoom:0.8;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.portfolio-item {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.5s ease;
}

.portfolio-item.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}

.portfolio-card {
    position: relative;
    height: 400px;
    perspective: 1000px;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.portfolio-card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front,
.card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius: 20px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    border: 1px solid #333;
}

.card-back {
    transform: rotateY(180deg);
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.card-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #4facfe);
    border-radius: 20px;
    opacity: 0;
    z-index: -1;
    transition: opacity 0.3s ease;
    filter: blur(10px);
}

.portfolio-card:hover .card-glow {
    opacity: 0.5;
    animation: glow-rotate 3s linear infinite;
}

@keyframes glow-rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.project-icon {
    width: 100px;
    height: 100px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: white;
    margin-bottom: 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
}

.project-icon::before {
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

.gradient-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.gradient-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.gradient-4 { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
.gradient-5 { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); }
.gradient-6 { background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); }

.project-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
}

.project-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
}

.tag {
    padding: 5px 15px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    font-size: 0.875rem;
    color: #aaa;
}

.card-back h4 {
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
}

.card-back p {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 30px;
    line-height: 1.6;
}

.project-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 30px;
    background: rgba(255, 255, 255, 0.2);
    border: 2px solid white;
    border-radius: 50px;
    color: white;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.project-link:hover {
    background: white;
    color: #667eea;
    transform: translateY(-2px);
}

/* View All Button */
.view-all-container {
    text-align: center;
}

.view-all-btn {
    position: relative;
    padding: 18px 50px;
    font-size: 18px;
    font-weight: 700;
    color: white;
    background: transparent;
    border: 2px solid #667eea;
    border-radius: 50px;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
}

.view-all-btn span {
    position: relative;
    z-index: 1;
}

.btn-bg {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, #667eea, #764ba2);
    transition: left 0.3s ease;
}

.view-all-btn:hover {
    border-color: transparent;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.view-all-btn:hover .btn-bg {
    left: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .portfolio-section {
        padding: 80px 0;
    }
    
    .section-header {
        margin-bottom: 50px;
    }
    
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .portfolio-filters {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 8px 20px;
        font-size: 14px;
    }
    
    .card-front,
    .card-back {
        padding: 30px 20px;
    }
}

/* Animations on scroll */
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

.portfolio-item {
    animation: fadeInUp 0.8s ease forwards;
    opacity: 0;
}

.portfolio-item:nth-child(1) { animation-delay: 0.1s; }
.portfolio-item:nth-child(2) { animation-delay: 0.2s; }
.portfolio-item:nth-child(3) { animation-delay: 0.3s; }
.portfolio-item:nth-child(4) { animation-delay: 0.4s; }
.portfolio-item:nth-child(5) { animation-delay: 0.5s; }
.portfolio-item:nth-child(6) { animation-delay: 0.6s; }
</style>

<script>
// Portfolio filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('hidden');
                    setTimeout(() => {
                        item.style.display = 'block';
                    }, 10);
                } else {
                    item.classList.add('hidden');
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 500);
                }
            });
        });
    });
    
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });
    
    portfolioItems.forEach(item => {
        observer.observe(item);
    });
});
</script>