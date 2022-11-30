<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
  <?php
    include_once "menu.html";
  ?>
<div id="container">
  <div class="form-wrap">
    <form action="add.php" method="post">
      <h1>Sign up</h1>
      <div class="form-group">
        <label for="user_code">Code</label>
        <input type="text" name="user_code" id="user_code" />
      </div>
      <div class="form-group">
        <label for="user_firstname">First name</label>
        <input type="text" name="user_firstname" id="user_firstname" />
      </div>
      <div class="form-group">
        <label for="user_lastname">Last name</label>
        <input type="text" name="user_lastname" id="user_lastname" />
      </div>
      <div class="form-group">
        <label for="user_age">Age</label>
        <input type="number" name="user_age" id="user_age" />
      </div>
      <div class="form-group">
        <label for="user_sex">Sex</label>
        <input type="text" name="user_sex" id="user_sex" />
      </div>
      <button type="submit" name="submit" class="btn">Sign up</button>
    </form>
  </div>
</body>
</html>