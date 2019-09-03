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
    $user_name= $_POST['user_name'];
    $password= $_POST['password'];

          $query = "INSERT INTO register(user_name,password) VALUES ('$user_name','$password')";
          if(mysqli_query($db,$query)){
            header('location:home.php');
          }
      }
?>