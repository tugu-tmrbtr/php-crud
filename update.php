<?php
	include('conn.php');
 
	$id = $_GET['id'];

	$user_code = $_POST['user_code'];
	$user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
	$user_age = $_POST['user_age'];
  $user_sex = $_POST['user_sex'];
 
	$conn -> query ("update `user` set user_code='$user_code' , user_firstname='$user_firstname', user_lastname='$user_lastname',
    user_age='$user_age', user_sex='$user_sex' where user_id='$id'");
	header('location:index.php');
?>