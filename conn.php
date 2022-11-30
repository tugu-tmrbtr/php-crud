<?php
    $conn = new mysqli("localhost", "tuguldur", "80881399", "CRUD");
    if($conn -> connect_error) {
        die("Connection failed: ". $conn -> connect_error);
    }
?>
