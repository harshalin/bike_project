<?php
    include_once('connection.php');

    $db=mysqli_connect($servername,$username,$password,$dbname);
    if($db->connect_error){
        die("connection failed".$db);
    }
    else{
        echo "sucess";
    }
    
 
    if(isset($_POST['submit'])){
    $title= $_POST['title'];
    $description= $_POST['description'];

          $query = "INSERT INTO publish(title,description,password) VALUES ('$title','$description')";
          if(mysqli_query($db,$query)){
            header('location:index.php');
          }
      }
?>