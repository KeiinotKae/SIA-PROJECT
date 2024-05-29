<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Interface Navigation Bar and Profile Logo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        .navbar {
            display: flex;
            background-color: #333;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }
        .profile-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .sub-navbar {
            display: flex;
            background-color: gray;
            padding: 10px;
            margin-top: 10px;
        }
        .sub-navbar a {
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .sub-navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        a[href="logout.php"] {
        color: white;
        text-decoration: none;
        background-color: #f44336; 
        padding: 14px 20px;
        border-radius: 4px;
        margin-top: 20px; 
        display: inline-block;
    }

    a[href="logout.php"]:hover {
        background-color: #d32f2f; 
    }
      
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <img src="profile-logo.png" alt="User Profile" class="profile-logo">
    </div>
    <div class="sub-navbar">
        <a href="#module1">Module 1</a>
        <a href="#module2">Module 2</a>
        <a href="#module3">Module 3</a>
        <a href="#module4">Module 4</a>
        <a href="#module5">Module 5</a>
    </div>
    <a href="logout.php">Logout </a>
</body>
</html>