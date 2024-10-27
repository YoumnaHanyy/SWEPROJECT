<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoneDeal</title>

    <!-- Linking to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Linking to your CSS file -->
    <link rel="stylesheet" href="../Style/newStyle.css">
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
            <button class="btn" id="tasksBtn"><i class="fas fa-tasks"></i> Tasks</button>
            <button class="btn"><i class="fas fa-file"></i> Files</button>
            <button class="btn" id="calendarBtn"><i class="fas fa-calendar"></i> Calendar</button>
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

    <div id="calendarView" style="display: none;">
        <img src="/mnt/data/image.png" alt="Calendar view">
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

<div class="main-content1" id="taskContent" style="display: none;">
    <h2>Tasks </h2>
    <h4><span id="taskCount">0</span> tasks</h4>
    <div class="task-controls">
        <button id="newTaskBtn" class="new-task-btn">
            <i class="fas fa-plus-circle"></i> New Task
        </button>

        <div class="task-filters">
            <select id="filterCategory" class="filter-select">
                <option value="all">All Categories</option>
                <option value="work">Work</option>
                <option value="personal">Personal</option>
                <option value="school">School</option>
            </select>

            <select id="filterDeadline" class="filter-select">
                <option value="all">All Deadlines</option>
                <option value="today">Today</option>
                <option value="thisWeek">This Week</option>
                <option value="overdue">Overdue</option>
            </select>

            <select id="filterPriority" class="filter-select">
                <option value="all">All Priorities</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>

        <!-- Search Bar -->
        <input type="text" id="searchTask" placeholder="Find tasks..." class="search-bar1">
    </div>


    <!-- Task Tabs -->
    <div class="task-tabs">
        <span class="tab active">All tasks</span>
        <span class="tab">School</span>
        <span class="tab">Personal</span>
        <span class="tab">Work</span>
       
    </div>

    <!-- Table-like header for task details -->
    <div class="task-table-header">
        <span class="column-header">Title</span>
        <span class="column-header">Due date</span>
        <span class="column-header">Reminder</span>
        <span class="column-header">Assigned to</span>
    </div>
    <div id="taskDisplay" class="task-display">
        <!-- Tasks will be displayed here -->
         
    </div>

<div id="mainContent1">
    <div id="taskListContainer"></div>
</div>

<script src="../java/newjs.js"></script>
    

</body>
</html>
