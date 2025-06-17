<?php include("./includes/header.php"); ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 12px;
            border: 1px solid rgba(209, 213, 219, 0.3);
        }
        
        .hover-float {
            transition: transform 0.3s ease;
        }
        
        .hover-float:hover {
            transform: translateY(-8px);
        }
        
        .animate-fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .service-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .tech-icon {
            transition: all 0.3s ease;
        }
        
        .tech-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .navbar-blur {
            backdrop-filter: blur(20px);
            background-color: rgba(255, 255, 255, 0.8);
        }
        .ppr {
            background-image: url('assetes/images/jj.jpg');
            min-height: 60vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-50">
   
<?php include("./includes/nav.php"); ?>
<?php include("./hero.php"); ?>

<?php include("./service.php"); ?>
   

    <?php include("./pot.php"); ?>

    <!-- Creative Contact Section -->
<section id="contact" class="creative-contact">
    <style>
        .creative-contact {
            min-height: 100vh;
            background: #ffffff;
            position: relative;
            padding: 80px 0;
            overflow: hidden;
        }

        /* Animated gradient mesh background */
        .gradient-mesh {
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(240, 147, 251, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(245, 87, 108, 0.1) 0%, transparent 50%);
            animation: meshMove 20s ease-in-out infinite;
        }

        @keyframes meshMove {
            0%, 100% { transform: rotate(0deg) scale(1); }
            25% { transform: rotate(90deg) scale(1.1); }
            50% { transform: rotate(180deg) scale(1); }
            75% { transform: rotate(270deg) scale(1.1); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 2;
        }

        /* Header with animated gradient */
        .contact-header {
            text-align: center;
            margin-bottom: 80px;
            animation: slideDown 1s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main-title {
            font-size: 72px;
            font-weight: 900;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #667eea 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 5s ease infinite;
            letter-spacing: -2px;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .subtitle {
            font-size: 24px;
            color: #6b7280;
            font-weight: 300;
        }

        /* Creative contact cards */
        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .contact-card {
            position: relative;
            padding: 40px;
            border-radius: 30px;
            background: white;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            overflow: hidden;
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
            border-radius: 30px;
            opacity: 0;
            z-index: -1;
            transition: opacity 0.4s ease;
            animation: borderRotate 3s linear infinite;
        }

        @keyframes borderRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .contact-card:hover::before {
            opacity: 1;
        }

        .contact-card::after {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            right: 2px;
            bottom: 2px;
            background: white;
            border-radius: 28px;
            z-index: -1;
        }

        .contact-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            position: relative;
        }

        .icon-circle {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .card-icon i {
            font-size: 36px;
            color: white;
            z-index: 1;
        }

        .ripple {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(102, 126, 234, 0.3);
            transform: translate(-50%, -50%);
            animation: rippleEffect 2s ease-out infinite;
        }

        @keyframes rippleEffect {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0;
            }
        }

        .card-title {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
        }

        .card-info {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 15px;
        }

        .card-action {
            display: inline-flex;
            align-items: center;
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .card-action i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .contact-card:hover .card-action i {
            transform: translateX(5px);
        }

        /* Floating social section */
        .social-float {
            position: fixed;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }

        .social-float-item {
            display: block;
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .social-float-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: left 0.3s ease;
        }

        .social-float-item i {
            font-size: 20px;
            color: #667eea;
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
        }

        .social-float-item:hover {
            transform: translateX(-10px) scale(1.1);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .social-float-item:hover::before {
            left: 0;
        }

        .social-float-item:hover i {
            color: white;
        }

        /* Interactive map section */
        .map-section {
            margin-top: 80px;
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            height: 400px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .map-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
        }

        .map-title {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out;
        }

        .locations {
            display: flex;
            gap: 40px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .location-badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            animation: fadeInUp 1s ease-out;
            animation-fill-mode: both;
        }

        .location-badge:nth-child(1) { animation-delay: 0.2s; }
        .location-badge:nth-child(2) { animation-delay: 0.4s; }
        .location-badge:nth-child(3) { animation-delay: 0.6s; }

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

        /* Animated particles */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: floatParticle 15s infinite linear;
        }

        @keyframes floatParticle {
            from {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            to {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 48px;
            }
            
            .social-float {
                right: 20px;
            }
            
            .map-title {
                font-size: 36px;
            }
        }
    </style>

    <div class="gradient-mesh"></div>
    
    <div class="container">
        <div class="contact-header">
            <h1 class="main-title">Let's Connect</h1>
            <p class="subtitle">Choose your preferred way to reach us</p>
        </div>
        
        <div class="contact-methods">
            <div class="contact-card" onclick="window.location.href='mailto:vinodrandima@gmail.com'">
                <div class="card-icon">
                    <div class="icon-circle">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="ripple"></div>
                </div>
                <h3 class="card-title">Email Us</h3>
                <p class="card-info">vinodrandima@gmail.com</p>
                <a href="mailto:vinodrandima@gmail.com" class="card-action">
                    Send Email <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="contact-card" onclick="window.location.href='tel:+94788381133'">
                <div class="card-icon">
                    <div class="icon-circle">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="ripple"></div>
                </div>
                <h3 class="card-title">Call Us</h3>
                <p class="card-info">+94 78 838 1133</p>
                <a href="tel:+94788381133" class="card-action">
                    Make a Call <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="contact-card" onclick="window.open('https://wa.me/94788381133', '_blank')">
                <div class="card-icon">
                    <div class="icon-circle" style="background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="ripple" style="border-color: rgba(37, 211, 102, 0.3);"></div>
                </div>
                <h3 class="card-title">WhatsApp</h3>
                <p class="card-info">Quick Response</p>
                <a href="https://wa.me/+94788381133 " class="card-action" style="color: #25D366;">
                    Chat Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        
    </div>
    
    <div class="social-float">
        <a href="#" class="social-float-item">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-float-item">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-float-item">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="social-float-item">
            <i class="fab fa-github"></i>
        </a>
    </div>
</section>

    <!-- Footer -->
    <footer class="hero-animation bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-code text-white text-lg"></i>
                        </div>
                        <span class="text-2xl font-bold">Vinovate Software</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Creating innovative digital solutions that empower businesses to thrive in the digital age.
                    </p>
                    <p class="text-sm text-gray-500">
                        © 2024 Vinovate Software. All rights reserved.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Mobile Apps</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Consulting</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#portfolio" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    
