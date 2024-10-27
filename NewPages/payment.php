<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f6f2;
        }

        .payment-container {
            background-color: #f9f6f2;
            padding: 20px;
            border-radius: 15px;
            width: 700px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            color: #4CAF50;
            position: relative;
            text-align: left;
            font-size: 14px;
        }

        /* Add Visa logo placeholder */
        .visa-logo {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #f9bc00;
        }

        /* Chip representation */
        .chip {
            width: 40px;
            height: 30px;
            background-color: #d4af37;
            border-radius: 4px;
            margin-top: 10px;
        }

        /* Form styling */
        .payment-container label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #4CAF50;

            margin-left: 30px;

        }

        .payment-container input[type="text"], 
        .payment-container input[type="number"], 
        .payment-container select {
            width: 70%;
            padding: 10px;
            margin-top: 5px;
            margin-left: 30px;
            border-radius: 5px;
            border: 1px solid #ccc;
            color: #333;
        }

        /* Card number styling */
        .card-number-group {
            display: flex;
            gap: 5px;
        }

        .payment-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .payment-container button:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

<?php
    // Retrieve the selected plan from the GET request
    $plan = isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'No Plan Selected';
?>

<div class="payment-container">
    <div class="visa-logo">Visa</div>
    <div class="chip"></div>
    
    <h1 style="text-align: center;">You’re almost there!</h1>
    <h2 style="text-align: center;">Payment</h2>
    <p style="text-align: center;">Plan: <?php echo $plan; ?></p>

    <form action="users.php" method="POST">
        <input type="hidden" name="plan" value="<?php echo $plan; ?>">

        <label>Card Number</label>
        <input type="number" name="card_number" placeholder="1234 1234 1234 1234" required>

        <label>Expiry Date</label>
        <input type="text" name="expiry_date" placeholder="MM / YY" required>
        
        <label>CVV</label>
        <input type="number" name="cvv" placeholder="123" required>
        
        <label>Cardholder Name</label>
        <input type="text" name="cardholder_name" placeholder="Full name on card" required>
        
        <label>Country or Region</label>
        <select name="country" required>
            <option value="Egypt">Egypt</option>
            <option value="United States">United States</option>
            <!-- Add more countries as needed -->
        </select>

        <button type="submit">Continue</button>
    
    </form>
</div>

</body>
</html>