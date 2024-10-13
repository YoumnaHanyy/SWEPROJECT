<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Dashboard</title>

    <!-- Linking to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Linking to your CSS file -->
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="sidebar-menu">
        <!-- User Profile -->
        <div class="profile-section">
            <div class="profile-avatar">Y</div>
            <div class="profile-info">
                <p class="username">yomna2207085c5a5...</p>
                <p class="email">yomna2207085@miuegy...</p>
            </div>
            <div class="notifications">
                <span>&#128276;</span>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>

        <!-- Action Buttons (Note, Task, Event) -->
        <div class="action-buttons">
            <button class="btn note-btn">+ Note</button>
            <div class="sub-buttons">
                <button class="btn task-btn">+ Task</button>
                <button class="btn event-btn">+ Event</button>
            </div>
        </div>

        <!-- Scrollable Sidebar Menu Items -->
        <div class="menu-items scrollable-menu">
            <button class="btn"><i class="fa-solid fa-house"></i> Home</button>
            <button class="btn"><i class="fas fa-tasks"></i> Tasks</button>
            <button class="btn"><i class="fas fa-file"></i> Files</button>
            <button class="btn"><i class="fas fa-calendar"></i> Calendar</button>
            <button class="btn"><i class="fas fa-book"></i> Notebooks</button>
            <button class="btn"><i class="fas fa-tag"></i> Tags</button>
            <button class="btn"><i class="fas fa-share-alt"></i> Shared with Me</button>
            <button class="btn"><i class="fas fa-trash"></i> Trash</button>
        </div>

        <!-- Additional Section -->
        <div class="download-upgrade">
            <button class="download-btn">Download the app</button>
            <button class="upgrade-btn">Upgrade</button>
        </div>

        <div class="help-section">
            <button class="help-btn">Need a little help?</button>
        </div>
    </div>
</body>
</html>
