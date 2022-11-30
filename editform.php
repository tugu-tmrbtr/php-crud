<?php
	include('conn.php');
  $id = $_GET['id'];
	$query = $conn -> query ("select * from `user` where user_id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edit form</title>
	<link rel="stylesheet" href="css/edit.css">
</head>
<body>
	<?php
    	include_once "menu.html";
  	?>
	<div id="container">
		<form method="POST" class="form-wrap" action="update.php?id=<?php echo $id; ?>">
			<h1>Edit</h1>
			<div class="form-group">
				<label>Code</label><input type="text" value="<?php echo $row['user_code']; ?>" name="user_code">
			</div>
			<div class="form-group">
				<label>First name</label><input type="text" value="<?php echo $row['user_firstname']; ?>" name="user_firstname">
			</div>
			<div class="form-group">
        		<label>Last name</label><input type="text" value="<?php echo $row['user_lastname']; ?>" name="user_lastname">
			</div>
			<div class="form-group">
				<label>Age</label><input type="text" value="<?php echo $row['user_age']; ?>" name="user_age">
			</div>
			<div class="form-group">	
        		<label>Sex</label><input type="text" value="<?php echo $row['user_sex']; ?>" name="user_sex">
			</div>
			<div class="form-group">	
				<button type="submit" name="submit" class="btn">Save</button>
				<button type="submit" name="submit" class="btn-2"><a href="index.php">Back</a> </button>
			</div>
		</form>
	</div>
</body>
</html>