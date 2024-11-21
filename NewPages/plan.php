<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #f9f6f2;
            color: #333;
            text-align: center;
            padding: 50px;
        }
    
        .container {
            margin-top:-10vh;
    width: 100%;
    text-align: center;
    padding: 20px;
}
.header {
    display: flex;
    justify-content: space-between; /* Ensures logo + links stay on the left and buttons go to the right */
    align-items: center;
    padding: 20px;
    background-color: #f9f6f2;
    border-bottom: 1px solid #000000;
    font-family: "'Playfair Display', 'Times New Roman', serif";
    font-size:xx-large;
   
}

.header .logo {
    display: flex;
    align-items: center;
}

.header .logo img {
    width: 40px;
    margin-right: 10px;
}

.header nav {
    display: flex;
    align-items: center;
    margin-left: 150px; /* Adds spacing between the logo and the nav links */
    font-size: large;
    
}

.header nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
    font-family: 'Inter', Arial, sans-serif;
    transition: box-shadow 0.3s ease;
    border-radius: 5px;
    padding: 5px 10px;
    transition: box-shadow 0.3s ease, background-color 0.3s ease;
    position: relative;
}
.header nav a:hover {
    text-shadow: 2px 2px 5px grey; /* Adds a subtle shadow when hovered */
}

.left-buttons {
    display: flex;
    justify-content: flex-end; /* Align buttons to the far right */
    align-items: center;
    flex-grow: 1; /* Takes up available space to push buttons to the right */
    font-size: large;
}

.header .login-btn,
.header .signup-btn {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: 2px solid #333;
    border-radius: 5px; 
    cursor: pointer;
    margin-left: 20px; /* Spacing between buttons */
    font-size: large;
}

/* Ensures the last link doesn't push against the buttons */
.header nav a:last-child {
    margin-right: 0;
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
        .dropdown {
    position: relative;
}
.dropdown-menu {
    display: none; /* Hidden by default */
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f6f2;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Similar shadow effect */
    border-radius: 5px;
    padding: 20px;
    width: 400px;
  
   
    z-index: 1;
}

.dropdown-column {
    display: flex;
    flex-direction: column;
    margin-right: 20px;
    font-size: small;
   padding-bottom: 50px;
    
}


.dropdown-column span {
    font-weight: bold;
    color: #aaa;
    margin-bottom: 10px;
    font-size: 0.9rem;
    padding-top: 30px;
}

.dropdown-column a {
    text-decoration: none;
    color: #333;
    margin: 5px 0;
    justify-content: space-between;
}

.dropdown:hover .dropdown-menu {
    display: flex; /* Show dropdown on hover */
}

.dropdown-toggle:hover {
    cursor: pointer;
    color: #000; /* Optional: Change text color on hover */
}
    </style>
</head>
<body>
<div class="container">
    <header class="header">
            <div class="logo">
                <img src="../Images/logoo.jpg" alt="DoneDeal Logo">
                <a href="Home.php" >
                <span class="ll">DoneDeal</span>
    </a>
            </div>
            <nav>
            <a href="whydonedeal.php">Why DoneDeal</a>
                <!-- Adding the dropdown for Explore -->
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">Explore &#9662;</a> <!-- Explore with arrow down -->
                    <div class="dropdown-menu">
                        <div class="dropdown-column">
                            <span>SOLUTIONS</span>
                            <a href="#">Note Taking</a>
                            <a href="#">Self organizing</a>
                            <a href="#">Productivity</a>
                            <a href="#">Teams</a>
                        </div>
                        <div class="dropdown-column">
                            <span>FEATURES</span>
                            <a href="#">AI features</a>
                            <a href="#">Collaboration</a>
                            <a href="#">Web Clipper</a>
                            <a href="#">Advanced search</a>
                            <a href="#">Document scanning</a>
                            <a href="#">Personalization</a>
                            <a href="#">Tasks</a>
                            <a href="#">Calendar</a>
                        </div>
                    </div>
                </div>
                <a href="plan.php">Plans</a>
            </nav>
            <div class="left-buttons">
                <a href="login.php">
                <button class="login-btn" >Log in</button>
    </a>
                <button class="signup-btn">Sign up</button>
            </div>
        </header>
    



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
            <form action="users.php" method="get">
                <input type="hidden" name="plan" value="Free">
                <button type="submit">Start For Free</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>