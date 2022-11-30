<?php
	$id = $_GET['id'];
	
	include('conn.php');
	$conn  -> query("delete from `user` where user_id='$id'");
	header('location:index.php');
?>