<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Form</title>
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
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 90%; /* Adjusted width for better responsiveness */
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(5px); /* Adds a blur effect to the background */
        }

        h1 {
            color: #e74c3c;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: bold;
        }

        /* Form Group Styles */
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
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
        .form-group select:not([value=""]) + label {
            top: 0;
            left: 0.5rem;
            font-size: 0.8rem;
            color: #e74c3c;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 0 0.25rem;
        }

        .form-group input,
        .form-group select {
            width: calc(100% - 2rem); /* Adjusted width to fit inside the container */
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            background-color: transparent;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #e74c3c;
            outline: none;
        }

        .form-group input:hover,
        .form-group select:hover {
            border-color: #c0392b;
        }

        /* Button Styles */
        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 1rem 2rem;
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
        <h1>Donate Blood, Save Lives</h1>
        <form id="donationForm">
            <div class="form-group">
                <input type="text" id="donorName" name="donorName" placeholder=" " required>
                <label for="donorName">Donor Name</label>
            </div>
            <div class="form-group">
                <input type="date" id="donationDate" name="donationDate" placeholder=" " required>
                <label for="donationDate">Donation Date</label>
            </div>
            <div class="form-group">
                <select id="bloodGroup" name="bloodGroup" required>
                    <option value="" disabled selected></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <label for="bloodGroup">Blood Group</label>
            </div>
            <div class="form-group">
                <input type="number" id="quantity" name="quantity" min="100" max="500" placeholder=" " required>
                <label for="quantity">Quantity (in ml)</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('donationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const donorName = document.getElementById('donorName').value;
            const donationDate = document.getElementById('donationDate').value;
            const bloodGroup = document.getElementById('bloodGroup').value;
            const quantity = document.getElementById('quantity').value;

            // You can add your form submission logic here, such as sending data to a server
            console.log({
                donorName,
                donationDate,
                bloodGroup,
                quantity
            });

            alert('Thank you for your donation!');
        });
    </script>
</body>
</html>