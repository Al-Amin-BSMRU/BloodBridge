<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page with Feedback and See More</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            color: #333;
        }

        .split-layout {
            display: flex;
            height: 100vh;
        }

        /* Left Side: Hero Section */
        .hero-section {
            flex: 1;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero-content p {
            font-size: 1.5em;
            margin-bottom: 30px;
            color: #fff;
        }

   
        /* Right Side: Feedback Section */
        .feedback-section {
            flex: 1;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .feedback-section h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #ff6f61;
        }

        .feedback-slider {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            max-height: 400px;
            overflow-y: auto;
            padding-bottom: 20px;
        }

        .feedback-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feedback-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .feedback-card img {
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .feedback-card p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 10px;
        }

        .feedback-card span {
            font-size: 1em;
            color: #ff6f61;
            font-weight: bold;
        }

        /* Hidden Feedback Cards */
        .hidden {
            display: none;
        }

        /* See More Button */
        .see-more-btn {
            background: #ff6f61;
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        .see-more-btn:hover {
            background: #ff4a3d;
        }

        /* Footer */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="split-layout">
        <!-- Left Side: Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <h1>Welcome to Our Creative World</h1>
                <p>We bring your ideas to life with innovation and style.</p>
                
            </div>
        </div>

        <!-- Right Side: Feedback Section -->
        <div class="feedback-section">
            <h2>What Our Users Say</h2>
            <div class="feedback-slider" id="feedbackSlider">
                <!-- Initial Feedback Cards (Visible by Default) -->
                <div class="feedback-card">
                    <img src="https://via.placeholder.com/100" alt="User 1">
                    <p>"This platform is a game-changer! Highly recommended."</p>
                    <span>- John Doe</span>
                </div>
                <div class="feedback-card">
                    <img src="https://via.placeholder.com/100" alt="User 2">
                    <p>"Amazing experience! The design is so intuitive."</p>
                    <span>- Jane Smith</span>
                </div>
                <div class="feedback-card">
                    <img src="https://via.placeholder.com/100" alt="User 3">
                    <p>"I love how creative and user-friendly this is!"</p>
                    <span>- Alice Johnson</span>
                </div>

                <!-- Additional Feedback Cards (Hidden by Default) -->
                <div class="feedback-card hidden">
                    <img src="https://via.placeholder.com/100" alt="User 4">
                    <p>"The support team is fantastic. Quick and helpful!"</p>
                    <span>- Michael Brown</span>
                </div>
                <div class="feedback-card hidden">
                    <img src="https://via.placeholder.com/100" alt="User 5">
                    <p>"This platform has everything I need. Love it!"</p>
                    <span>- Sarah Lee</span>
                </div>
                <div class="feedback-card hidden">
                    <img src="https://via.placeholder.com/100" alt="User 6">
                    <p>"Highly recommend this to anyone looking for quality."</p>
                    <span>- David Wilson</span>
                </div>
            </div>
            <!-- See More Button -->
            <button id="seeMoreBtn" class="see-more-btn">See More</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Creative World. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to handle "See More" functionality
        const seeMoreBtn = document.getElementById('seeMoreBtn');
        const hiddenCards = document.querySelectorAll('.feedback-card.hidden');

        seeMoreBtn.addEventListener('click', () => {
            // Show all hidden feedback cards
            hiddenCards.forEach(card => {
                card.classList.remove('hidden');
            });

            // Hide the "See More" button after showing all feedback
            seeMoreBtn.style.display = 'none';
        });
    </script>
</body>
</html>