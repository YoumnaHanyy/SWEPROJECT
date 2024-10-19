<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Dashboard</title>

    <!-- Linking to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Linking to your CSS file -->
    <link rel="stylesheet" href="../STYLE/style.css">
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
        
        <div class="search-bar">
            <input type="text" placeholder="Search">
        </div>
        
        <div class="action-buttons">
            <button id="noteBtn" class="btn">+ Note</button>
            <div class="sub-buttons">
                <button class="btn" id="taskbtn">+ Task</button>
                <button class="btn" id="eventbtn">+ Event</button>
            </div>
        </div>
        
        <div class="menu-items">
        <button class="btn" id="homeBtn"><i class="fa-solid fa-house"></i> Home</button>

            <button class="btn"><i class="fas fa-tasks"></i> Tasks</button>
            <button class="btn"><i class="fas fa-file"></i> Files</button>
            <button class="btn"><i class="fas fa-calendar"></i> Calendar</button>
            <button class="btn"><i class="fas fa-book"></i> Notebooks</button>
            <button class="btn"><i class="fas fa-tag"></i> Tags</button>
            <button class="btn"><i class="fas fa-share-alt"></i> Shared with Me</button>
            <button class="btn"><i class="fas fa-trash"></i> Trash</button>
        </div>
        
        <div class="download-upgrade">
            <button class="download-btn">Download the app</button>
            <button class="upgrade-btn">Upgrade</button>
        </div>
        
        <div class="help-section">
            <button class="help-btn">Need a little help?</button>
        </div>
    </div>
    
    <div class="main-content" id="mainContent" style="display: none;">
        <!-- Toolbar at the top of the main content -->
        <div class="toolbar">
            <button class="toolbar-btn" onclick="execCmd('bold')"><i class="fa fa-bold"></i></button>
            <button class="toolbar-btn" onclick="execCmd('italic')"><i class="fa fa-italic"></i></button>
            <button class="toolbar-btn" onclick="execCmd('underline')"><i class="fa fa-underline"></i></button>
            <button class="toolbar-btn" onclick="execCmd('strikeThrough')"><i class="fa fa-strikethrough"></i></button>

            <select class="font-family" onchange="execCmd('fontName', this.value)">
                <option value="Sans Serif">Sans Serif</option>
                <option value="Serif">Serif</option>
                <option value="Monospace">Monospace</option>
            </select>

            <select class="font-size" onchange="execCmd('fontSize', this.value)">
                <option value="3">12</option> <!-- Corresponds to font-size 12px -->
                <option value="4">14</option> <!-- Corresponds to font-size 14px -->
                <option value="5">16</option> <!-- Corresponds to font-size 16px -->
                <option value="6">18</option> <!-- Corresponds to font-size 18px -->
                <option value="7">24</option> <!-- Corresponds to font-size 24px -->
            </select>

            <input type="color" class="color-picker" onchange="execCmd('foreColor', this.value)" />

            <button class="toolbar-btn" onclick="execCmd('justifyLeft')"><i class="fa fa-align-left"></i></button>
            <button class="toolbar-btn" onclick="execCmd('justifyCenter')"><i class="fa fa-align-center"></i></button>
            <button class="toolbar-btn" onclick="execCmd('justifyRight')"><i class="fa fa-align-right"></i></button>
        </div>

        <!-- Content area for writing notes -->
        <div class="content-area">
            <div class="title-input" contenteditable="true" data-placeholder="Title"></div>
            <div class="subtitle" contenteditable="true" data-placeholder="Start writing, drag files or start from a template"></div>
            <div class="template-suggestions">
                <button class="template-button">To-do list</button>
                <button class="template-button">Meeting note</button>
                <button class="template-button">Project plan</button>
                <button class="template-button">Add more</button>
            </div>
            <button class="open-gallery">Open Gallery</button>
        </div>
    </div>




    <div class="task-modal" id="taskModal">
        <div class="task-modal-content">
            <h2><i class="fa fa-check-circle"></i> Enter task</h2>
            <div class="task-fields">
                <label><i class="fa fa-pen"></i> Description</label>
                <textarea placeholder="What is this task about?"></textarea>

                <label><i class="fa fa-calendar"></i> Due date</label>
                <div class="task-date-options">
                    <button>Today</button>
                    <button>Tomorrow</button>
                    <button>Custom</button>
                    <button>Repeat</button>
                </div>

                <label><i class="fa fa-bell"></i> Reminder</label>
                <div class="task-reminder-options">
                    <button>In 1 hour</button>
                    <button>In 4 hours</button>
                    <button>Custom</button>
                </div>

                <label><i class="fa fa-user"></i> Assigned to</label>
                <input type="text" placeholder="Assign">

                <label><i class="fa fa-exclamation-triangle"></i> Priority</label>
                <div class="task-priority-options">
                    <button>Low</button>
                    <button>Medium</button>
                    <button>High</button>
                </div>

                <label><i class="fa fa-flag"></i> Flag</label>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>

                <div class="task-actions">
                    <button class="cancel-btn">Cancel</button>
                    <button class="create-btn">Create task</button>
                </div>
            </div>
        </div>
    </div>
    <div class="event-modal" id="eventModal" style="display: none;">
    <div class="event-modal-content">
        <h2><i class="fa fa-calendar-plus"></i> Create Event</h2>
        <div class="event-fields">
            <label><i class="fa fa-pen"></i> Event Title</label>
            <input type="text" placeholder="Enter event title" id="eventTitle">

            <label><i class="fa fa-calendar"></i> Start Date & Time</label>
            <input type="datetime-local" id="eventStart">

            <label><i class="fa fa-calendar"></i> End Date & Time</label>
            <input type="datetime-local" id="eventEnd">

            <div class="event-actions">
                <button class="cancel-event-btn">Cancel</button>
                <button class="create-event-btn">Create Event</button>
            </div>
        </div>
    </div>
</div>

<div class="home-content" id="homeContent">
    <h2>Ready to start taking notes?</h2>
    <div class="notes-header">
        <h3>yomna2207085c5a50bc41c3d015e's Home</h3>
    </div>
    <div class="notes-section">
        <div class="note-card">
            <p>Untitled</p>
            <small>Oct 15</small>
        </div>
        <div class="note-card">
            <p>Meeting note</p>
            <p>Date & Time Goal<br>Attendees Me<br>Agenda Notes<br>Action Items</p>
            <small>Oct 14</small>
        </div>
        <div class="note-card">
            <p>Untitled</p>
            <small>Oct 14</small>
        </div>
        <div class="note-card">
            <p>Untitled</p>
            <small>Oct 14</small>
        </div>
    </div>
    <div class="recently-captured">
        <h3>Recently Captured</h3>
        <div class="capture-options">
            <button>Web Clips</button>
            <button>Images</button>
            <button>Documents</button>
            <button>Audio</button>
            <button>Emails</button>
        </div>
    </div>
</div>


    <script>
        // Show main content (toolbar + note editor) when +Note button is clicked
      

        // Show task modal when +Task button is clicked
        document.getElementById('taskbtn').addEventListener('click', function() {
    const taskModal = document.getElementById('taskModal');
    taskModal.style.display = 'flex'; // Show the task modal when the button is clicked
});

// Hide task modal when Cancel button is clicked
document.querySelector('.cancel-btn').addEventListener('click', function() {
    const taskModal = document.getElementById('taskModal');
    taskModal.style.display = 'none'; // Hide the task modal when the Cancel button is clicked
});
    </script>


    <script>
        // Show main content (toolbar + note editor) when +Note button is clicked
        document.getElementById('noteBtn').addEventListener('click', function() {
            const mainContent = document.getElementById('mainContent');
            mainContent.style.display = 'block'; // Show the main content when +Note is clicked
        });

        // Function to execute document commands for formatting
        function execCmd(command, value = null) {
            document.execCommand(command, false, value);
        }

        // Placeholder logic for contenteditable elements
        document.querySelectorAll('[contenteditable]').forEach(function(editable) {
            // Display the custom placeholder
            function showPlaceholder() {
                if (editable.textContent.trim() === '') {
                    editable.classList.add('empty');
                    editable.innerText = editable.getAttribute('data-placeholder');
                }
            }

            // Remove placeholder on focus
            function hidePlaceholder() {
                if (editable.classList.contains('empty')) {
                    editable.classList.remove('empty');
                    editable.innerText = ''; // Clear the placeholder
                }
            }

            editable.addEventListener('focus', hidePlaceholder);
            editable.addEventListener('blur', showPlaceholder);
            editable.addEventListener('input', function() {
                if (editable.textContent.trim() !== '') {
                    editable.classList.remove('empty');
                }
            });

            // Initially show placeholder
            showPlaceholder();
        });
    </script>

    <script>
        // Show event modal when +Event button is clicked
document.getElementById('eventbtn').addEventListener('click', function () {
    const eventModal = document.getElementById('eventModal');
    eventModal.style.display = 'flex'; // Show event modal
});

// Hide event modal when Cancel button is clicked
document.querySelector('.cancel-event-btn').addEventListener('click', function () {
    const eventModal = document.getElementById('eventModal');
    eventModal.style.display = 'none'; // Hide event modal
});

// Handle creating the event
document.querySelector('.create-event-btn').addEventListener('click', function () {
    const title = document.getElementById('eventTitle').value;
    const start = document.getElementById('eventStart').value;
    const end = document.getElementById('eventEnd').value;

    if (title && start && end) {
        // For now, log the event details (you can integrate with your calendar view)
        console.log(`Event Created: ${title}, Start: ${start}, End: ${end}`);
        alert(`Event "${title}" created successfully!`);

        // Hide the event modal
        document.getElementById('eventModal').style.display = 'none';
    } else {
        alert('Please fill all the fields.');
    }
});

// Show home content when Home button is clicked
document.getElementById('homeBtn').addEventListener('click', function() {
    // Hide all other sections (e.g., taskModal, eventModal, etc.)
    document.getElementById('taskModal').style.display = 'none';
    document.getElementById('eventModal').style.display = 'none';
    document.getElementById('mainContent').style.display = 'none';
    
    // Show the home content
    document.getElementById('homeContent').style.display = 'block';
});

// Load Home page content by default on page refresh
window.onload = function() {
    // Show home content by default
    document.getElementById('homeContent').style.display = 'block';
};

    </script>
    

</body>
</html>