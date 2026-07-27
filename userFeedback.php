<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give your opinion</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('blood_red.jpg'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.85); /* Semi-transparent white background */
            padding: 1.5rem; /* Reduced padding */
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 90%; /* Adjusted width for better responsiveness */
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(5px); /* Adds a blur effect to the background */
        }

        h1 {
            color: #e74c3c;
            margin-bottom: 1rem; /* Reduced margin */
            font-size: 1.75rem; /* Slightly smaller font size */
            font-weight: bold;
        }

        /* Form Group Styles */
        .form-group {
            position: relative;
            margin-bottom: 1rem; /* Reduced margin */
            text-align: left;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            color: #777;
            font-size: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label,
        .form-group select:focus + label,
        .form-group select:not([value=""]) + label,
        .form-group textarea:focus + label,
        .form-group textarea:not(:placeholder-shown) + label {
            top: 0;
            left: 0.5rem;
            font-size: 0.8rem;
            color: #e74c3c;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 0 0.25rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: calc(100% - 2rem); /* Adjusted width to fit inside the container */
            padding: 0.75rem; /* Reduced padding */
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            background-color: transparent;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #e74c3c;
            outline: none;
        }

        .form-group input:hover,
        .form-group select:hover,
        .form-group textarea:hover {
            border-color: #c0392b;
        }

        /* Button Styles */
        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem; /* Reduced padding */
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%; /* Button takes full width */
        }

        button:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Say something about this webpage</h1>
        <form id="userForm">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder=" " required>
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="date" id="date" name="date" placeholder=" " required>
                <label for="date">Date</label>
            </div>
            <div class="form-group">
                <textarea id="text" name="text" placeholder=" " required></textarea>
                <label for="text">Give your opinion</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('userForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const date = document.getElementById('date').value;
            const text = document.getElementById('text').value;

            // You can add your form submission logic here, such as sending data to a server
            console.log({
                username,
                email,
                date,
                text
            });

            alert('Your information has been submitted!');
        });
    </script>
</body>
</html>