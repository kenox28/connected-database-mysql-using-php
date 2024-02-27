<?php
    include("connect-database.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $password = mysqli_real_escape_string($connect,$_POST['password']);



        
        $result = mysqli_query($connect,"SELECT * FROM login WHERE username ='$username' AND password = '$password'");
        $row = mysqli_fetch_assoc($result);
        if (is_array($row) && !empty($row)){
            $_SESSION['valid'] =$row['username'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] =$row['id'];

        }
        else{
            echo"<div class='error'><p>username or password is incorrect!</p></div>";
            
            
        };
        if(isset($_SESSION['valid'])){
            echo"<h1>login successfully</h1>";
            echo('<h1>I LOVE YOU MAHAL</h1>');
        }
        else{
            echo"<h1>login failed</h1>";
        }




        
    };




?>