<?php
/*
    * This file is used to read data from the database and display it in the table.
    * It is included in index.php.
    */
// It start by requiring the Connect.php file to establish a connection to the database.    
require_once "Connect.php";
// It then creates a table with the headers for the columns.
echo " <tr>
                <th>Product code</th>
                <th>Product name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>";
// It then selects all the data from the Product table.
$sql = "SELECT * FROM Product";
$result = mysqli_query($My_Connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // It then creates a row for each product in the table.
        echo "<tr>";
        echo "<td>" . $row["Product_ID"] . "</td>";
        echo "<td>" . $row["Product_Name"] . "</td>";
        echo "<td>" . $row["Product_Description"] . "</td>";
        echo "<td>" . $row["Price"] . "</td>";
        echo "<td><button type='button' class='btn btn-danger' onclick='Delete(" . $row["Product_ID"] . ")'>Delete</button>";
        echo "<button type='button' class='btn btn-success' onclick='Edit(" . $row["Product_ID"] . ")'>Edit</button></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
