<?php
  include'post_detail.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signin">
        <div class="header">
                <h2>post</h2>
        </div>
        <form  method="post" action="#">
            <div class="input-group">
                <p class="fa fa-user-o">Title</p>
                <input type="text" name="title" placeholder="Enter Title">
            </div>  

            <div class="input-group">
                <p class="fa fa-key"> Description</p>
                <input type="text" name="description" placeholder="Description">
            </div>

             <div class="input-group">
                <p class="fa fa-key"> Author Name</p>
                <input type="text" name="author_name" placeholder="Author_name">
            </div>


           <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            
		</form>
    </div>
</body>
</html>