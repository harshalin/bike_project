<?php
  include'login_detail.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signin">
        <div class="header">
                <h2>LOG IN HERE !</h2>
        </div>
        <form  method="post" action="#">
            <div class="input-group">
                <p class="fa fa-user-o">   User Name</p>
                <input type="text" name="user_name" placeholder="User Name">
            </div>  

            <div class="input-group">
                <p class="fa fa-key"> Password</p>
                <input type="password" name="password" placeholder="password" id="pass" >
            </div>
            
            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            
		</form>
    </div>
</body>
</html>