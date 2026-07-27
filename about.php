<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About & Contact</title>
    <link rel="stylesheet" href="aboutStyle.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Blood<span>Bank</span></div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Welcome to Our Creative World</h1>
            <p>We design and build stunning digital experiences.</p>
        </div>
    </header>

    <section id="about" class="about-section">
        <h2>About Us</h2>
        <div class="about-cards">
            <div class="card">
                <h3>Who We Are</h3>
                <p>We are a team of passionate designers and developers dedicated to creating beautiful and functional websites.</p>
                <button class="read-more">Read More</button>
                <p class="hidden-text">Our expertise includes UI/UX design, web development, and digital marketing. We love turning ideas into reality!</p>
            </div>
            <div class="card">
                <h3>Our Mission</h3>
                <p>Our mission is to deliver innovative solutions that help businesses thrive in the digital world.</p>
                <button class="read-more">Read More</button>
                <p class="hidden-text">We focus on user-centric designs and cutting-edge technology to create impactful digital experiences.</p>
            </div>
            <div class="card">
                <h3>Our Vision</h3>
                <p>We envision a world where every business has a powerful online presence.</p>
                <button class="read-more">Read More</button>
                <p class="hidden-text">We aim to empower businesses with tools and strategies to succeed in the digital age.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 CreativeDesign. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript for Read More buttons
        const readMoreButtons = document.querySelectorAll('.read-more');
        readMoreButtons.forEach(button => {
            button.addEventListener('click', () => {
                const hiddenText = button.nextElementSibling;
                hiddenText.classList.toggle('hidden');
                button.textContent = hiddenText.classList.contains('hidden') ? 'Read More' : 'Read Less';
            });
        });
    </script>
</body>
</html>