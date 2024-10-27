<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f7;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        .pricing-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            width: 90%;
            max-width: 1200px;
            margin-top: 50px;
            padding-left: 10px;
        }

        .plan {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            flex: 1;
            margin: 0 10px; /* Adjusts space between the plans */
            max-width: 300px; /* Prevents the plan from getting too wide */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .plan:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .plan h3 {
            color: #333;
            font-size: 1.7em;
            margin-bottom: 10px;
        }

        .plan .old-price {
            text-decoration: line-through;
            color: #777;
            font-size: 1em;
        }

        .plan .price {
            font-size: 1.5em;
            color: #4CAF50;
            margin: 10px 0;
        }

        .plan p {
            margin: 5px 0;
            color: #666;
            font-size: 1em;
        }

        .plan ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .plan ul li {
            padding: 10px 0;
            border-bottom: 1px solid #eaeaea;
            font-size: 0.9em;
        }

        .plan button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .plan button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Which Plan is Right for You?</h1>
    <div class="pricing-container">
        <!-- Personal Plan -->
        <div class="plan">
            <h3>Personal</h3>
            <p class="old-price">$14.99</p>
            <p class="price">$10.83/month</p>
            <p>Pay $129.99/year</p>
            <ul>
                <li>Create up to 150,000 notes</li>
                <li>Create up to 2,000 notebooks</li>
                <li>Unlimited connected devices</li>
                <li>10 GB monthly uploads</li>
            </ul>
            <form action="payment.php" method="get">
                <input type="hidden" name="plan" value="Personal">
                <button type="submit">Choose Personal</button>
            </form>
        </div>

        <!-- Professional Plan -->
        <div class="plan">
            <h3>Professional</h3>
            <p class="old-price">$17.99</p>
            <p class="price">$14.16/month</p>
            <p>Pay $169.99/year</p>
            <ul>
                <li>Everything in Personal, plus:</li>
                <li>Adobe Acrobat Standard</li>
                <li>20 GB monthly uploads</li>
                <li>AI-Powered Search</li>
            </ul>
            <form action="payment.php" method="get">
                <input type="hidden" name="plan" value="Professional">
                <button type="submit">Choose Professional</button>
            </form>
        </div>

        <!-- Teams Plan -->
        <div class="plan">
            <h3>Teams</h3>
            <p class="old-price">$24.99/user</p>
            <p class="price">$20.83/user/month</p>
            <p>Pay $249.99/year</p>
            <ul>
                <li>Everything in Professional, plus:</li>
                <li>Shared team spaces</li>
                <li>Centralized user management</li>
                <li>20 GB monthly uploads + 2 GB per user</li>
            </ul>
            <form action="payment.php" method="get">
                <input type="hidden" name="plan" value="Teams">
                <button type="submit">Choose Teams</button>
            </form>
        </div>

        <!-- Free Plan -->
        <div class="plan">
            <h3>Free</h3>
            <p class="price">$0</p>
            <ul>
                <li>Create up to 50 notes</li>
                <li>Create 1 notebook</li>
                <li>Connect to 1 device</li>
                <li>250 MB monthly uploads</li>
            </ul>
            <form action="payment.php" method="get">
                <input type="hidden" name="plan" value="Free">
                <button type="submit">Start For Free</button>
            </form>
        </div>
    </div>
</body>
</html>
