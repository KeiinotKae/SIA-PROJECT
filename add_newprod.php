<?php
include "db_productsconn.php";

if(isset($_POST['submit'])) {
    $product_name = $_POST ['product_name'];
    $product_description = $_POST ['product_description'];
    $quantity = $_POST ['quantity'];
    

    $sql = "INSERT INTO `products`(`id`, `product_name`, `product_description`, `quantity`)
     VALUES (NULL,'$product_name','$product_description','$quantity')";
     $result = mysqli_query($conn, $sql);

     if($result) {
        // Response will be handled by JavaScript
        echo '<script>
                alert("New record created successfully");
                window.location.href = "add_prod_index.php";
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
    <nav class ="navbar navbar-light justify-content-center fs-3 mb-5"
    style ="background-color: #00ff5573;">
        
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add new Products</h3>
            <p class="text-muted">Complete the form below to add new products</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form id="userForm" action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label" required>Product Name:</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Brand X" required>
                </div>

                <div class="col">
                    <label class="form-label"  required>Product Description:</label>
                    <input type="text" class="form-control" name="product_description" placeholder="This brand is" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" required>Quantity:</label>
                <input type="number" class="form-control" name="quantity" min="1" max="999" placeholder="1-999" required>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="add_prod_index.php" class="btn btn-danger">Cancel</a>
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
