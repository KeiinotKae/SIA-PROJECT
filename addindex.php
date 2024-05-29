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
        Accounts
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Add new
</button>

<!-- Modal for add user-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add new user?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      "Respecting user privacy is paramount, ensuring their personal information remains 
      confidential and secure throughout their interaction with the platform."
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="add_new.php"><button type="button" class="btn btn-primary">Understood</button></a>
      </div>
    </div>
  </div>
</div>

 <!-- Modal for Delete -->
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this user?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a id="deleteLink" href="adddelete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal for Edit-->


        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Hotel Number</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['hotel_number'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                                
                                <td>
                                    <a href="addedit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="viewacc.php" class="link-dark"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                                    <a href="adddelete.php" class="link-dark" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteLink(<?php echo $row['id'] ?>)"><i class="fa-solid fa-trash fs-5"></i></a>

                                </td>
                            </tr>
                        <?php
                    }
                ?>
                
            </tbody>
            </table>
    </div>
    





<!--Booststrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>

<!-- JavaScript to set delete link dynamically -->
<script>
    function setDeleteLink(id) {
        document.getElementById('deleteLink').setAttribute('href', 'adddelete.php?id=' + id);
    }
</script>


</body>
</html> 