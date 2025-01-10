<?php
// This file is used to delete data from the database.
// It starts by requiring the Connect.php file to establish a connection to the database.
require_once "Connect.php";
// It then checks if the request method is POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // It then gets the Product_ID from the form and assigns it to a variable.
    $Product_ID = $_POST["Product_ID"];
    // It then deletes the data from the Product table where 
    //the Product_ID matches the one from the form.
    $sql = "DELETE FROM Product WHERE Product_ID=?";
    $stmt = mysqli_stmt_init($My_Connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $Product_ID);
        mysqli_stmt_execute($stmt);
    }
}
// It then calls the Read.php file to display the updated table.
require_once "Read.php";
