<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form</title>
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
        .form-group select:not([value=""]) + label {
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
        <h1>Request Blood</h1>
        <form id="requestForm">
            <div class="form-group">
                <input type="text" id="patientName" name="patientName" placeholder=" " required>
                <label for="patientName">Patient Name</label>
            </div>
            <div class="form-group">
                <select id="bloodType" name="bloodType" required>
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
                <label for="bloodType">Blood Type</label>
            </div>
            <div class="form-group">
                <input type="number" id="quantity" name="quantity" min="100" max="500" placeholder=" " required>
                <label for="quantity">Quantity (in ml)</label>
            </div>
            <div class="form-group">
                <textarea id="reason" name="reason" placeholder=" " required></textarea>
                <label for="reason">Reason</label>
            </div>
            <div class="form-group">
                <input type="text" id="hospitalName" name="hospitalName" placeholder=" " required>
                <label for="hospitalName">Hospital Name/Address</label>
            </div>
            <div class="form-group">
                <input type="tel" id="contactNumber" name="contactNumber" placeholder=" " required>
                <label for="contactNumber">Contact Number</label>
            </div>
            <div class="form-group">
                <select id="deliveryBy" name="deliveryBy" required>
                    <option value="" disabled selected></option>
                    <option value="Yourself">Yourself</option>
                    <option value="Staff">Staff</option>
                </select>
                <label for="deliveryBy">Delivery By</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('requestForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const patientName = document.getElementById('patientName').value;
            const bloodType = document.getElementById('bloodType').value;
            const quantity = document.getElementById('quantity').value;
            const reason = document.getElementById('reason').value;
            const hospitalName = document.getElementById('hospitalName').value;
            const contactNumber = document.getElementById('contactNumber').value;
            const deliveryBy = document.getElementById('deliveryBy').value;

            // You can add your form submission logic here, such as sending data to a server
            console.log({
                patientName,
                bloodType,
                quantity,
                reason,
                hospitalName,
                contactNumber,
                deliveryBy
            });

            alert('Your request has been submitted!');
        });
    </script>
</body>
</html>