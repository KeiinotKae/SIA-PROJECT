<?php
include "db_productsconn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: add_prod_index.php?msg= Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>