<!DOCTYPE html>
<html lang="en">
<?php require_once 'Connect.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <main>
        <div class="Dark_Background Hidden" id="Dark_Background"></div>
        <div class="Add_Form Hidden" id="Add_Form">
            <h1>Add Product</h1>
            <form action="add.php" method="post">
                <label for="Product_ID">Product ID</label>
                <input type="text" class="form-control" id="Product_ID" name="Product_ID">
                <label for="Product_Name">Product Name</label>
                <input type="text" class="form-control" id="Product_Name" name="Product_Name">
                <label for="Product_Description">Description</label>
                <input type="text" class="form-control" id="Product_Description" name="Product_Description">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price" name="Price">
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="Add_Form Hidden" id="Update_Form">
            <h1>Update Product</h1>
            <form action="add.php" method="post">
                <label for="Product_ID">Product ID</label>
                <input type="text" class="form-control" id="Product_ID2" name="Product_ID">
                <label for="Product_Name">Product Name</label>
                <input type="text" class="form-control" id="Product_Name2" name="Product_Name">
                <label for="Product_Description">Description</label>
                <input type="text" class="form-control" id="Product_Description2" name="Product_Description">
                <label for="Price">Price</label>
                <input type="text" class="form-control" id="Price2" name="Price">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <h1>Product List</h1>
        <button type="button" class="btn btn-primary" id="Add_Btn">Add</button>
        <table class="table table-striped" id="Product_Table">
            <?php require_once 'Read.php'; ?>
        </table>

    </main>
</body>
<script src="assets/js/script.js"></script>

</html>