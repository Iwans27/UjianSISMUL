<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">MyPortfolio</a>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Marquee Section -->
    <div class="marquee-container">
        <div class="marquee-content">
            <span>Welcome to Iwan Lasro Arjuna's Portfolio &nbsp;&nbsp;&nbsp;</span>
            <span>Web Developer & Designer &nbsp;&nbsp;&nbsp;</span>
            <span>Available for Freelance Work &nbsp;&nbsp;&nbsp;</span>
            <span>Let's Create Something Amazing! &nbsp;&nbsp;&nbsp;</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Hi, I'm <span class="highlight">Iwan Lasro Arjuna</span></h1>
                <p>Web Developer & Designer</p>
                <a href="#contact" class="btn">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>I am an informatics student with an interest in web design and Android development. I am ready to continue learning, take responsibility and play an active role in design projects, and am committed to providing added value to the environment while continuing to improve my design skills.</p>
                    <p>I have experience working with various frameworks and libraries, including React, Vue.js, and Bootstrap. My goal is to build applications that not only look great but also provide an exceptional user experience.</p>
                    <p>When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying outdoor activities.</p>
                </div>
                <div class="profile-img">
                    <img src="src/profilee.png" alt="Profile Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2>My Skills</h2>
            <div class="skills-container">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <h3>HTML5</h3>
                    <p>Creating semantic and accessible web structure</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-css3-alt"></i>
                    <h3>CSS3</h3>
                    <p>Styling with modern CSS and responsive design</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-js"></i>
                    <h3>JavaScript</h3>
                    <p>Building interactive user interfaces</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-react"></i>
                    <h3>React</h3>
                    <p>Creating dynamic single-page applications</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-php"></i>
                    <h3>PHP</h3>
                    <p>Server-side programming and web applications</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-database"></i>
                    <h3>SQL</h3>
                    <p>Database design and management</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="src/online_shop.png" alt="Project 1">
                    </div>
                    <div class="project-info">
                        <h3>E-commerce Website</h3>
                        <div class="project-tags">
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">PHP</span>
                        </div>
                        <p>A fully responsive e-commerce platform with product catalog, shopping cart, and secure checkout system.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="src/travel-app.png" alt="Project 2">
                    </div>
                    <div class="project-info">
                        <h3>Travel App</h3>
                        <div class="project-tags">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                        </div>
                        <p>A task management application with features like task creation, deadline setting, and progress tracking.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="src/web.png" alt="Project 3">
                    </div>
                    <div class="project-info">
                        <h3>Portfolio Website</h3>
                        <div class="project-tags">
                            <span class="tag">HTML</span>
                            <span class="tag">CSS</span>
                            <span class="tag">JavaScript</span>
                        </div>
                        <p>A personal portfolio website showcasing skills, projects, and contact information.</p>
                        <a href="#" class="btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h3 style="margin: 20px auto; text-align : center;">INI ADALAH AUDIO DALAM SEBUAH WEBSITE</h3>
    <audio controls loop class="audio">
    <source src="audio/audio.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<h3 style="text-align: center;">INI ADALAH VIDEO DALAM SEBUAH WEBSITE</h3>
<video controls width="640" height="360" class="video">
    <source src="video/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Get In Touch</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <p><i class="fas fa-envelope"></i> marheang18@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +123 456 7890</p>
                    <p><i class="fas fa-map-marker-alt"></i> Bekasi</p>
                    <p>Feel free to reach out to me for any inquiries or collaboration opportunities. I am always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
<footer>
    <div class="container">
        <div class="social-links">
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/iwanla_s/"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; 2025 Iwan Lasro Arjuna. All Rights Reserved.</p>
    </div>
</footer>



<script>
    // Mobile Navigation
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
            
            // Close mobile menu if open
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
            }
        });
    });

    // Form Submission
    const contactForm = document.getElementById('contactForm');
    
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        // Show alert
        alert(`Thank you for your message, ${name}! I will get back to you soon.`);
        
        // Reset form
        contactForm.reset();
    });
</script>
</body>
</html>
