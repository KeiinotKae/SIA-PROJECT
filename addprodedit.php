<?php
include "db_productsconn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $product_name = $_POST ['product_name'];
    $product_description = $_POST ['product_description'];
    $quantity = $_POST ['quantity'];
    
    $sql = "UPDATE `products` SET `product_name`='$product_name',`product_description`='$product_description',`quantity`='$quantity' WHERE id=$id";
     $result = mysqli_query($conn, $sql);

     if($result) {
        header("location: add_prod_index.php?msg= Data updated successfully");
     }
     else {
        echo "Failed: " . mysqli_error($conn);
     }
}

?>





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
            background-image: url('imagess.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .custom-rounded {
    border-radius: 15px; /* Or any other value you prefer */
}
    </style>
</head>
<body>
    <nav class ="navbar navbar-light justify-content-center fs-3 mb-5"
    style ="background-color: #00ff5573;">
        
    </nav>

    <div class="container bg-white rounded p-4">
        <div class="text-center mb-4">
            <h3>Edit Product Information</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `products` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label" required>Product Name:</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name'] ?>" required>
                </div>

                <div class="col">
                    <label class="form-label" required>Product Rarity:</label>
                    <input type="text" class="form-control" name="product_description" value="<?php echo $row['product_description'] ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" required>Quantity:</label>
                <input type="number" class="form-control" name="quantity" min="1" max="999" value="<?php echo $row['quantity'] ?>" required>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <a href="add_prod_index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>





<!--Booststrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>
</html> 