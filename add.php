<?php
// This file is used to add data to the database.
// It starts by requiring the Connect.php file to establish a connection to the database.
require_once "Connect.php";
// It then checks if the request method is POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // It then gets the data from the form and assigns it to variables.
    $Product_ID = $_POST["Product_ID"];
    $Product_Name = $_POST["Product_Name"];
    $Description = $_POST["Product_Description"];
    $Price = $_POST["Price"];
    // It then inserts the data into the Product table.
    $sql = "INSERT INTO Product (Product_ID, Product_Name, Product_Description, Price) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($My_Connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        mysqli_stmt_bind_param($stmt, "isss", $Product_ID, $Product_Name, $Description, $Price);
        mysqli_stmt_execute($stmt);
    }
}
// It then calls the Read.php file to display the updated table.
require_once "Read.php";
