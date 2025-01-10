<?php
/*
    * This file is used to establish a connection to the database.
    * It is included in Read.php and add.php.
    */
// The 3366 is the port number. If you did not change the port number, you can remove it.
@$My_Connection = mysqli_connect('localhost', 'root', '', 'ajax_php_example', 3366);

if (mysqli_connect_errno()) {

    exit('Could not connect');
}
