<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DoneDeal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Styles/Home.css">
    
</head>
<body>
<div class="container">
<header class="header">
        <div class="logo">
            <img src="logoo.jpg" alt="DoneDeal Logo">
            <span>DoneDeal</span>
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
            <a href="#">Plans</a>
        </nav>
        <div class="left-buttons">
            <button class="login-btn">Log in</button>
            <button class="signup-btn">Sign up</button>
        </div>
    </header>

    <main class="main-content">
        <h1>What will you <br> <span class="highlight">achieve</span> today?</h1>
        <p>Remember everything and tackle any project with your notes, tasks,<br> and schedule all in one place.</p>
        <button class="cta-btn">Get DoneDeal free</button>
        <p><a href="#" class="login-link">Already have an account? Log in</a></p>

        <div class="options">
            <div class="option">Wiki</div>
            <div class="option">Planner</div>
            <div class="option">Docs</div>
            <div class="option">Class notes</div>
            <div class="option">Research</div>
            <div class="option">Task List</div>
            <div class="option">Thought</div>
            <div class="option">Meeting notes</div>
            <div class="option">Journal</div>

        </div>
        <section class="features-section">
        <div class="feature">
            <img src="work.png" alt="Work Anywhere Icon" class="feature-icon">
            <h3>Work anywhere</h3>
            <p>Keep important info handy—your notes sync automatically to all your devices.</p>
        </div>
        <div class="feature">
            <img src="pin.png" alt="Remember Everything Icon" class="feature-icon">
            <h3>Remember everything</h3>
            <p>Make notes more useful by adding text, images, audio, scans, PDFs, and documents.</p>
        </div>
        <div class="feature">
            <img src="right.png" alt="Turn to-do into done Icon" class="feature-icon">
            <h3>Turn to-do into done</h3>
            <p>Bring your notes, tasks, and schedules together to get things done more easily.</p>
        </div>
        <div class="feature">
            <img src="search.png" alt="Find things fast Icon" class="feature-icon">
            <h3>Find things fast</h3>
            <p>Get what you need, when you need it with powerful and flexible search capabilities.</p>
        </div>
    </section>
    <section class="collaboration-section">
    <div class="collaboration-content">
        <h2>Effortless collaboration</h2>
        <p>Evernote makes it easy to collaborate on projects. Real-Time Editing immediately syncs changes to keep all contributors up to date. The Tasks feature helps you outline the next steps and assign responsibilities. And with unlimited sharing permissions, everyone is in the loop and on the same page.</p>
        <a href="#" class="learn-more-link">Learn more</a>
    </div>
    <div class="collaboration-images">
        <div class="collaboration-bubble pink-bubble">
            <img src="person1.png" alt="Person 1" class="profile-pic">
        </div>
        <div class="collaboration-bubble blue-bubble">
            <img src="person2.png" alt="Person 2" class="profile-pic">
        </div>
        <div class="collaboration-bubble green-bubble">
            <img src="person3.png" alt="Person 3" class="profile-pic">
        </div>
        <div class="collaboration-bubble orange-bubble">
            <img src="person4.png" alt="Person 4" class="profile-pic">
        </div>
    </div>
</section>
<section class="whats-new">
    <div class="new-content">
        <h2>Thirty more <br> exciting <br> improvements <br> in DoneDeal</h2>
        <p>Product lead Federico Simionato shares how<br> the team introduced drastic improvements to<br> DoneDeal's Editor, Calendar, Tasks, Mobile experience,<br> and more between April and <br>June 2024.</p>
        <a href="#" class="learn-more-link">Read more</a>
    </div>
    <div class="Exciting improvements">
        <img src="30mor.png" alt="Exciting improvements" />
    </div>
</section>
<footer class="footer">
    <div class="footer-left">
        <img src="logoo.jpg" alt="DoneDeal Logo" class="footer-logo">
        <span>DoneDeal</span>
    </div>
    <div class="footer-right">
        <div class="language-selection">
            <span>Choose a language:</span>
            <select>
                <option value="english">English</option>
                <option value="spanish">Español</option>
                <option value="french">Français</option>
                <!-- Add more language options as needed -->
            </select>
        </div>
        <div class="social-icons">
            <a href="#"><img src="face.jpg" alt="Facebook"></a>
            <a href="#"><img src="twitter2.png" alt="Twitter"></a>
            <a href="#"><img src="instgram.png" alt="Instagram"></a>
        </div>
    </div>
</footer>
    </main>
</div>
</body>
</html>
