document.addEventListener('DOMContentLoaded', function() {
    // Enhanced paragraph animation in the home section
    const homeParagraph = document.querySelector('.home-content p');
    if (homeParagraph) {
        // Add a slight delay before starting the animation
        setTimeout(() => {
            homeParagraph.classList.add('animate-text');
        }, 300); // Reduced delay for smoother appearance
    }
    
    // Mobile navigation - FIXED
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    // Make sure burger menu works on mobile - FIXED CLASS NAMES
    if (burger) {
        burger.addEventListener('click', function() {
            console.log('Burger clicked'); // Debug message
            
            // Toggle Navigation - FIXED CLASS NAME
            nav.classList.toggle('nav-active');
            
            // Burger Animation
            burger.classList.toggle('toggle');
            
            // Animate Links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                }
            });
        });
    }
    
    // Image slider functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    }
    
    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
    }
    
    // Smooth scrolling for navigation links
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open - FIXED CLASS NAME
                if (nav.classList.contains('nav-active')) {
                    nav.classList.remove('nav-active');
                    burger.classList.remove('toggle');
                }
            }
        });
    });

    // Animate the graphs when they are in view
    function animateGraphs() {
        const ipkFill = document.querySelector('.ipk-fill');
        const ieltsBars = document.querySelectorAll('.ielts-bar');
        
        if (ipkFill) {
            const ipkValue = parseFloat(ipkFill.getAttribute('data-value'));
            const percentage = (ipkValue / 4.0) * 100; // Calculate percentage of max GPA
            
            // Set the width based on the IPK value (as percentage of 4.0)
            ipkFill.style.width = `${percentage}%`;
        }
        
        if (ieltsBars.length) {
            ieltsBars.forEach(bar => {
                const score = parseFloat(bar.getAttribute('data-score'));
                const percentage = (score / 9.0) * 100; // Calculate percentage of max IELTS score
                
                // Set the width based on IELTS score (as percentage of 9.0)
                const fill = bar.querySelector('.ielts-fill');
                if (fill) {
                    fill.style.width = `${percentage}%`;
                }
            });
        }
    }

    // Animate TOEFL scores
    function animateToeflScores() {
        const toeflBars = document.querySelectorAll('.toefl-bar-fill');
        
        if (toeflBars.length) {
            toeflBars.forEach(bar => {
                const score = parseFloat(bar.getAttribute('data-score'));
                const maxScore = 30; // TOEFL section max score is 30
                const percentage = (score / maxScore) * 100;
                
                // Animate the bar filling
                bar.style.width = `${percentage}%`;
            });
        }
    }

    // Check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Handle animation on scroll
    function handleScroll() {
        const academic = document.querySelector('.academic-achievements');
        if (academic && isInViewport(academic)) {
            animateGraphs();
            // Remove scroll listener once animation is triggered
            window.removeEventListener('scroll', handleScroll);
        }
    }

    // Handle scroll for TOEFL animation
    function handleToeflScroll() {
        const toeflContainer = document.querySelector('.toefl-meter');
        if (toeflContainer && isInViewport(toeflContainer)) {
            animateToeflScores();
            // Remove specific scroll listener once animation is triggered
            window.removeEventListener('scroll', handleToeflScroll);
        }
    }

    // Initial animation if section is already in view
    const academic = document.querySelector('.academic-achievements');
    if (academic && isInViewport(academic)) {
        setTimeout(animateGraphs, 500);
    } else {
        // Add scroll listener
        window.addEventListener('scroll', handleScroll);
    }

    // Initialize TOEFL animations
    const toeflContainer = document.querySelector('.toefl-meter');
    if (toeflContainer) {
        if (isInViewport(toeflContainer)) {
            setTimeout(animateToeflScores, 500);
        } else {
            window.addEventListener('scroll', handleToeflScroll);
        }
    }

    // Theme toggle functionality
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    
    // Check for saved theme preference or use default
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        body.classList.add('dark-mode');
    }
    
    // Toggle dark/light mode
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            
            // Save user preference to localStorage
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    }
    
    // Check for system preference if no preference is saved
    if (!currentTheme) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            body.classList.add('dark-mode');
            localStorage.setItem('theme', 'dark');
        }
    }
    
    // Listen for system theme changes
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    body.classList.add('dark-mode');
                } else {
                    body.classList.remove('dark-mode');
                }
            }
        });
    }
    
    // Navigation active state on scroll
    function updateActiveNav() {
        // Get all sections
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-links a');
        
        // Get current scroll position with a small offset to trigger a bit earlier
        const scrollY = window.pageYOffset + 150; // Adding offset to account for navbar height
        
        // Go through each section to evaluate which one is current
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            // Check if the user has scrolled to the section
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                // Remove active class from all nav links
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to the current nav link
                const correspondingNavLink = document.querySelector(`.nav-links a[href="#${sectionId}"]`);
                if (correspondingNavLink) {
                    correspondingNavLink.classList.add('active');
                }
            }
        });
    }
    
    // Run updateActiveNav initially and on scroll
    updateActiveNav();
    window.addEventListener('scroll', updateActiveNav);
});
