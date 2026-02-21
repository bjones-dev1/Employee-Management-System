<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System - Homepage</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="left-column">
            <div class="menu">
                <div class="menu-top">
                    <div class="menu-title">Menu</div>
                    <div class="menu-item"><i class="icon fa-solid fa-window-maximize"></i>Dashboard</div>
                    <div class="menu-item"><i class="icon fa-solid fa-user-plus"></i>Recruitment</div>
                    <div class="menu-item"><i class="icon fa-solid fa-user-group"></i>Employee</div>
                    <div class="menu-item"><i class="icon fa-solid fa-calendar-check"></i></i>Attendence</div>
                    <div class="menu-item"><i class="icon fa-solid fa-clipboard-check"></i></i>Task</div>
                    <div class="menu-item"><i class="icon fa-brands fa-paypal"></i></i>Payroll</div>
                </div>
                <div class="menu-bottom">
                    <div class="menu-item"><i class="icon fa-solid fa-gear"></i>Settings</div>
                    <div class="menu-item"><i class="icon fa-solid fa-arrow-right-from-bracket"></i>Log out</div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="top-section">
                <div class="searchbox">
                    <i class="icon fa-solid fa-magnifying-glass"></i><input class="search" placeholder="Search"type="text"></input>
                </div>

                <div class="profile">
                    <img class="profile-picture" src="images/profile1.jpg" alt="Profile Picture" width="50" />
                    <div class="profile-info">
                        <div class="name">Test name</div>
                        <div class="title">Administrator</div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="employee-buttons">
                <div class="employee-text">
                    <h2>Employee</h2>
                    <p>Manage your employees</p>
                </div>
                <div class="employee-actions">
                    <button class="export"><i class="icon fa-solid fa-file-export"></i>Export</button>
                    <button class="add"><i class="icon fa-solid fa-plus"></i>Add Employee</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>