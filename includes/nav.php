<?php include("./includes/header.php"); ?>

    <style>
        
        /* Navigation */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 8px 0;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 10px;    /* Add this */
            margin-bottom: 16px; /* Add this */
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            
        }
        #navbar.auto-hide {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.5s;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 24px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 30px;
            border: none;
            box-shadow:none;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Logo */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            position: relative;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .logo-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: rotate(45deg);
            transition: all 0.5s;
            opacity: 0;
        }

        .logo-container:hover .logo-icon::before {
            animation: shine 0.5s ease;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); opacity: 0; }
        }

        .logo-icon i {
            font-size: 24px;
            color: white;
            z-index: 1;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: white;
            letter-spacing: -0.5px;
        }

        /* Navigation Links */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .nav-link {
            position: relative;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 0;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: white;
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            width: 100%;
        }

        /* CTA Button */
        .cta-button {
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .cta-button:hover::before {
            left: 100%;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Mobile Menu */
        .mobile-menu {
            position: absolute;
            top: 100%;
            left: 30px;
            right: 30px;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            border: none;
            padding: 30px;
            opacity: 0;
            transform: translateY(-20px) scale(0.95);
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-menu.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        .mobile-nav-link {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 15px 0;
            transition: all 0.3s ease;
            position: relative;
        }

        .mobile-nav-link:hover {
            color: white;
            transform: translateX(10px);
        }

        /* Scrolled State */
        #navbar.scrolled {
            padding: 4px 0;
        }

        #navbar.scrolled .nav-content {
            background: linear-gradient(-45deg,rgb(255, 254, 254),rgb(254, 254, 254),rgb(255, 255, 255),rgb(255, 255, 255));
            box-shadow:none;
            padding: 8px 18px;
        }

        #navbar.scrolled .logo-text,
        #navbar.scrolled .nav-link {
            color: #333;
        }

        #navbar.scrolled .nav-link:hover {
            color: #667eea;
        }

        #navbar.scrolled .mobile-menu-btn {
            color: #333;
        }

        #navbar.scrolled .mobile-menu-btn:hover {
            background: rgba(0, 0, 0, 0.05);
        }


        

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-20px); }
            60% { transform: translateX(-50%) translateY(-10px); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links, .cta-button:first-of-type {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-content {
                padding: 15px 20px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }
        }

        /* Additional sections for demo */
        .section {
            padding: 100px 20px;
            text-align: center;
            color: white;
        }

        .section h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container ">
            <div class="nav-content ">
                <!-- Logo -->
                <div class="logo-container">
                    <div class="logo-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <span class="logo-text">Vinovate</span>
                </div>
                
                <!-- Navigation Links -->
                <div class="nav-links">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="about.php" class="nav-link">About</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
                
                <!-- CTA Button -->
                <button class="cta-button">
                    Get Started
                </button>
                
                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu">
                <a href="#home" class="mobile-nav-link">Home</a>
                <a href="about.php" class="mobile-nav-link">About</a>
                <a href="#services" class="mobile-nav-link">Services</a>
                <a href="#portfolio" class="mobile-nav-link">Portfolio</a>
                <a href="#contact" class="mobile-nav-link">Contact</a>
                <button class="cta-button" style="width: 100%; margin-top: 20px;">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

   
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        }

        // Close mobile menu when clicking links
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobileMenu').classList.remove('active');
            });
        });

        

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });

        });

        // ...existing code...

let hideTimeout;
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    const currentScroll = window.pageYOffset;

    // Existing scrolled class logic
    if (currentScroll > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    // Auto-hide logic
    navbar.classList.remove('auto-hide');
    clearTimeout(hideTimeout);
    hideTimeout = setTimeout(() => {
        navbar.classList.add('auto-hide');
    }, 4000); // 2 seconds of no scroll, hide navbar

    lastScroll = currentScroll;
});

// ...existing code...

        
    </script>
