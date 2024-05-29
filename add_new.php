<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $hotel_number = $_POST['hotel_number'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `hotel_number`, `gender`)
     VALUES (NULL,'$first_name','$last_name','$email', '$hotel_number', '$gender')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        // Response will be handled by JavaScript
        echo '<script>
                alert("New record created successfully");
                window.location.href = "addindex.php";
              </script>';
    }
    else {
        // Response will be handled by JavaScript
        echo '<script>
                alert("Failed: '.mysqli_error($conn).'");
              </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
        <h3 style="background-color: lightblue; padding: 10px;">Add new User</h3>
            <p class="text-muted">Complete the form below to add new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form id="userForm" action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Juan" required>
                    </div>

                    <div class="col">
                        <label class="form-label" for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Masipag" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="hotel_number">Hotel Number:</label>
                        <input type="text" class="form-control" name="hotel_number" id="hotel_number" placeholder="1-900" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-checked-input" name="gender" id="male" value="male" required>
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-checked-input" name="gender" id="female" value="female" required>
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="addindex.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
