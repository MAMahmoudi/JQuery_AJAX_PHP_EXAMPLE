<?php
// This file is used to search for data in the database.
// It starts by requiring the Connect.php file to establish a connection to the database.
require_once "Connect.php";
// It then checks if the request method is POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // It then gets the Product_ID from the form and assigns it to a variable.
    $Product_ID = $_POST["Product_ID"];
    // It then selects the data from the Product table 
    // where the Product_ID matches the one from the form.
    $sql = "SELECT * FROM Product WHERE Product_ID=?";
    $stmt = mysqli_stmt_init($My_Connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        // It then binds the Product_ID to the SQL statement and executes
        mysqli_stmt_bind_param($stmt, "i", $Product_ID);
        mysqli_stmt_execute($stmt);
        // It then fetches the result and displays it as JSON.
        mysqli_stmt_bind_result($stmt, $Product_ID, $Product_Name, $Product_Description, $Price);
        mysqli_stmt_fetch($stmt);
        // It then displays the result as JSON.
        echo json_encode(array("Product_ID" => $Product_ID, "Product_Name" => $Product_Name, "Product_Description" => $Product_Description, "Price" => $Price));
    }
}
