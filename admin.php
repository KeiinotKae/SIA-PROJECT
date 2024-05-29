<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--Booststrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laudry Management</title>
  <style>
     body {
            margin: 0;
            background-image: url('images.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            margin-left: 20px;
            margin-right: 20px;
        }
        h1 {
            text-align: center;
        }
        .navbar {
            width: 100%;
            background-color: hsl(0, 0%, 25%);
            padding: 0;
        }
        .navbar img {
            height: 40px; /* Adjust height as needed */
            margin-right: 10px
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0; /* Added to remove default padding */
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            text-align: center;
        }
        .navbar a:hover {
            background-color: hsl(0, 0%, 10%);
        }
        .navbar li {
            float: left;
        }
    </style>
</head>
<body>
<nav class="navbar">
<img src="logo.png.png" alt="Logo">
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="addindex.php">Add Account</a></li>
            <li><a href="add_prod_index.php">Add Products</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <nav class ="navbar navbar-light justify-content-center fs-3 mb-5"
    style ="background-color: #00ff5573;">
        Welcome Admin
    </nav>
 <img src="images.jpg"   alt="background">
 

<!--Booststrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>
</html> 