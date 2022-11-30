<?php
	include('conn.php');
    
    $user_code=$_POST['user_code'];
	$user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
	$user_age=$_POST['user_age'];
    $user_sex=$_POST['user_sex'];
 
    $conn -> query("insert into `user` (user_code,user_firstname,user_lastname,user_age,user_sex) values  
    ('$user_code','$user_firstname','$user_lastname','$user_age','$user_sex')");

    include_once('index.php');
?>