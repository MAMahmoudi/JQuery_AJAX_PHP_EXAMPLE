<?php
// This file is used to update data in the database.
// It starts by requiring the Connect.php file to establish a connection to the database.
require_once "Connect.php";
// It then checks if the request method is POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // It then gets the data from the form and assigns it to variables.
    $Product_ID = $_POST["Product_ID"];
    $Product_Name = $_POST["Product_Name"];
    $Description = $_POST["Product_Description"];
    $Price = $_POST["Price"];
    // It then updates the data in the Product table where
    $sql = "UPDATE Product SET Product_Name=?, Product_Description=?, Price=? WHERE Product_ID=?";
    $stmt = mysqli_stmt_init($My_Connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        mysqli_stmt_bind_param($stmt, "sssi", $Product_Name, $Description, $Price, $Product_ID);
        mysqli_stmt_execute($stmt);
    }
}
// It then calls the Read.php file to display the updated table.
require_once "Read.php";
