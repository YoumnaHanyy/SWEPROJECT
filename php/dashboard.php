<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Enter your MySQL password here
$dbname = "user_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$sql = "SELECT username, email, password FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="..//assets/css/dashboard.css">
    <link rel="stylesheet" href="/project/SWEPROJECT/assets/css/edit-product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>
<style>
     .edit-user-form {
background-color: #1e1e1e;
padding: 20px;
border-radius: 10px;
color: white;
width: 400px;
margin: 20px auto;
text-align: left;
}

.edit-user-form h2 {
color: white;
}

.edit-user-form label {
display: block;
margin-top: 10px;
}

.edit-user-form input {
width: 100%;
padding: 8px;
margin-top: 5px;
border-radius: 5px;
border: 1px solid #ccc;
background-color: #333;
color: white;
}

.edit-user-form button {
margin-top: 15px;
width: 100%;
padding: 10px;
background-color: #ba947b;
border: none;
color: white;
font-weight: bold;
cursor: pointer;
border-radius: 5px;
}

.modal {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.9);
justify-content: center;
align-items: center;
z-index: 999;
 
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.modal-content {
background-color: #1e1e1e;
padding: 20px;
border-radius: 10px;
color: white;
width: 400px;
margin: auto;
transform: translateY(50px);
    transition: transform 0.3s ease;
    animation: slide-up 0.5s ease forwards;
}


@keyframes slide-up {
    from {
        transform: translateY(50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal.show {
    opacity: 1;
    visibility: visible;
}

.close-button {
    float: right;
    font-size: 1.5rem;
    cursor: pointer;
    color: #ccc;
    transition: color 0.3s;
}

.close-button:hover {
    color: #fff;
}
#error-message,
        #success-message {
            text-align: center;
            font-weight: bold;
            display: none;
        }

       

        .error-message {
            color: #ff4d4d;
            font-weight: bold;
            display: none;
            font-size: 14px;
            margin: -5px 0 10px;
        }

        #success-message {
            color: green;
        }


        .hidden {
    display: none;
     
}

/*/******* */

.dashboard-card {
    position: relative;
    left: 340px;
    margin-bottom: 40px;
    width: 350px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    animation: fadeIn 0.5s ease-in-out;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px;
    border-bottom: 1px solid #eee;
}

.card-header h4 {
    font-size: 18px;
    color: #333;
}

.view-more {
    color: #3f8dfd;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    transition: color 0.3s;
}

.view-more:hover {
    color: #1a73e8;
}

.task-item {
    display: flex;
    align-items: center;
    padding: 12px 16px;
    border-bottom: 1px solid #eee;
    transition: background-color 0.3s;
}

.task-item:hover {
    background-color: #f9f9f9;
}

.profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 12px;
    transition: transform 0.3s;
}

.task-item:hover .profile-img {
    transform: scale(1.05);
}

.task-details {
    flex: 1;
}

.task-details p {
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin-bottom: 4px;
}

.task-details small {
    display: block;
    color: #777;
    font-size: 13px;
}

.activity-info {
    color: #999;
    font-style: italic;
}

.task-time {
    font-size: 13px;
    color: #999;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<body>
    <div class="container">
        <div class="navigation" id="navigation">
            <ul>
                <li>
                    <a href="#">
                        <img class="logo" src="..//assets/images/icons8-to-do-list-250.png" alt="" width="5px">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title"> DashBoard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"> <i class="fa-solid fa-users"></i></span>
                        <span class="title"> Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-message"></i> </span>
                        <span class="title">orders</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-question"></i> </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-gear"></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
            </ul>
        </div>
          <!--//////main//////-->
          <div class="main">
            <div class="top">
                <div class="toggle" id="toggleBtn"><i class="fa-solid fa-bars"></i></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            </div>
            <!-- Main content goes here -->
        </div>



    </div>
            <div>
                    <!--//////cards//////-->
                    <div class="contain">
                        <div class="cardK">

                       
                        <div class="card">
                        <div class="iconn" class="icon"><i class="fa-solid fa-comment"></i> </div> 
                        <div id="info">
                            <h4>15240</h4>
                            <p>Comments</p>
                        </div>
                        </div>
                
                
                        <div class="card">
                            <div class="iconn" class="icon1"><i class="fa-solid fa-money-bill"></i> </div> 
                            <div id="info">
                            <h4>9000$</h4>
                            <p>profit</p>
                            </div>
                        </div>
                
                
                        <div class="card">
                            <div class="iconn" class="icon1"><i class="fa-regular fa-eye"></i></div> 
                            <div id="info">
                            <h4>18241</h4>
                            <p>customers</p>
                            </div>
                        </div>
                
                
                        <div class="card">
                            <div class="iconn" class="icon1"><i class="fa-solid fa-cart-shopping"></i></div>
                            <div id="info">
                            <h4>1900$</h4>
                            <p>Sales</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
<div>
    
    <div class="usersss">
        <div class="recent">
            <div class="title">
                <h2> Users</h2>
                <a href="#" id="view-all-btn" class="view" onclick="showAllUsers()">View All</a>    
                <a href="/project/SWEPROJECT/html/add-user.html" class="view">ADD</a>  
                <a href="#" class="view">Delete</a>
               
            </div>
            <div id="editModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-button" onclick="closeEditModal()">&times;</span>
        <h2>Edit User</h2>
        <form id="edit-form" method="POST" action="edit-user.php">
            <label for="modal_old_username">Old Username:</label>
            <input type="text" id="modal_old_username" name="old_username" readonly>

            <label for="modal_new_username">New Username:</label>
            <input type="text" id="modal_new_username" name="new_username" required>

            <label for="modal_email">Email:</label>
            <input type="email" id="modal_email" name="email" required>

            <label for="modal_password">Password:</label>
            <input type="password" id="modal_password" name="password" required>

            <button type="submit">Update User</button>
            <p id="error-message">A user with the same email already exists.</p>
            <p id="success-message">User added successfully!</p>
        </form>
    </div>
</div>




<div class="scrollable-div">

                <table>
                    <thead>
                        <tr>
                            <td>UserName</td>
                            <td>Email</td>
                            <td>Password</td>
                        </tr>
                    </thead>
                    <tbody id="user-table-body">
                    <?php
                    $displayLimit = 5; // Number of rows to display initially
                    $count = 0;

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $rowClass = $count < $displayLimit ? 'visible' : 'hidden';
                            echo "<tr class='$rowClass'>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "<td><button class='edit-button' onclick='openEditModal(\"" . $row["username"] . "\", \"" . $row["email"] . "\", \"" . $row["password"] . "\")'>Edit</button></td>";
                            echo "</tr>";
                            $count++;
                        }
                    } else {
                        echo "<tr><td colspan='4'>No users found</td></tr>";
                    }
                    $conn->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="usersss">
        <div class="recent">
     <div class="title">
         <a id="generateReportBtn">Generate Report</a>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Tasks Completed</th>
                    <th>Completion Rate</th>
                    <th>Last Active</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="..//assets/images/man.png" class="user-img" alt="User Image"> Alice Johnson</td>
                    <td>34 / 40</td>
                    <td>85%</td>
                    <td>27 Oct 2024</td>
                    <td><span class="status-badge status-completed">Active</span></td>
                </tr>
                <tr>
                    <td><img src="..//assets/images/man.png" class="user-img" alt="User Image"> Bob Smith</td>
                    <td>10 / 50</td>
                    <td>20%</td>
                    <td>25 Oct 2024</td>
                    <td><span class="status-badge status-pending">Inactive</span></td>
                </tr>
                <tr>
                    <td><img src="..//assets/images/man.png" class="user-img" alt="User Image"> Carol Davis</td>
                    <td>48 / 50</td>
                    <td>96%</td>
                    <td>27 Oct 2024</td>
                    <td><span class="status-badge status-completed">Active</span></td>
                </tr>
                <tr>
                    <td><img src="..//assets/images/man.png" class="user-img" alt="User Image"> Dan Lee</td>
                    <td>35 / 70</td>
                    <td>50%</td>
                    <td>24 Oct 2024</td>
                    <td><span class="status-badge status-in-progress">In Progress</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Report Generation -->
<div id="reportModal" class="modal">
    <div class="modal-content">
        <h4>Generate Report</h4>
        <form id="reportForm">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" required>

            <label for="reportType">Report Type:</label>
            <select id="reportType" name="reportType" required>
                <option value="activity">User Activity</option>
                <option value="completion">Task Completion</option>
            </select>

            <button type="submit">Generate</button>
            <button type="button" class="close-modal" onclick="closeModal()">Cancel</button>
        </form>
    </div>
</div>
</div>
</div>

    <div class="dashboard-card">
        <div class="card-header">
            <h4>Admin Dashboard - Active Users</h4>
            <a href="#" class="view-more">View All Users</a>
        </div>
        <div class="task-item">
            <img src="assets/images/faces/face3.jpg" alt="profile image" class="profile-img">
            <div class="task-details">
                <p>Task: Complete Mobile App UI</p>
                <small>Assigned by: John Doe</small>
                <small class="activity-info">Last active: 5 mins ago</small>
            </div>
            <small class="task-time">Due: 10:07PM</small>
        </div>
        <div class="task-item">
            <img src="assets/images/faces/face2.jpg" alt="profile image" class="profile-img">
            <div class="task-details">
                <p>Task: Backend API Development</p>
                <small>Assigned by: Jane Smith</small>
                <small class="activity-info">Last active: 1 hr ago</small>
            </div>
            <small class="task-time">Due: 01:07AM</small>
        </div>
        <div class="task-item">
            <img src="assets/images/faces/face4.jpg" alt="profile image" class="profile-img">
            <div class="task-details">
                <p>Task: Redesign Website</p>
                <small>Assigned by: Michael Lee</small>
                <small class="activity-info">Last active: 3 hrs ago</small>
            </div>
            <small class="task-time">Due: 04:42AM</small>
        </div>
        <div class="task-item">
            <img src="assets/images/faces/face8.jpg" alt="profile image" class="profile-img">
            <div class="task-details">
                <p>Task: Set Up Analytics Dashboard</p>
                <small>Assigned by: Sarah Brown</small>
                <small class="activity-info">Last active: 1 day ago</small>
            </div>
            <small class="task-time">Due: 07:44PM</small>
        </div>
        <div class="task-item">
            <img src="assets/images/faces/face7.jpg" alt="profile image" class="profile-img">
            <div class="task-details">
                <p>Task: Design New Logo</p>
                <small>Assigned by: Alex Green</small>
                <small class="activity-info">Last active: 2 days ago</small>
            </div>
            <small class="task-time">Due: 10:49AM</small>
        </div>
    </div>




</body>
<script src="..//assets/js/dash.js">
 
  </script>
</html>