<?php include('d.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup page</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form method="post" action="d.php">
  <div class="menu" >
    <div class="container">
      <div class="form-container">
        <img src="3.jpeg" class="rounded-circle " width="150px" height="150px">
        <img src="4.jpeg" class="rounded-circle " width="150px" height="150px">
        <h1>Signup</h1>
        
        <form action="d.php" method="POST"> 
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="email"> </label>
            <input type="email" id="email" name="email" placeholder="Email"required>

            <label for="password"> </label>
            <input type="password" id="password" name="password"placeholder="Password" required>

            <button type="submit">Sign Up</a></button>
        </form>
        <p> Already a member? <a href="login.php">sign in</a></p>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>
</html>
