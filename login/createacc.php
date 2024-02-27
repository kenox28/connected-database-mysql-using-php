<?php
    include("connect-database.php");

    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query = "INSERT INTO login(firstname,surname,age,email,username,password) VALUES ('$firstname','$surname','$age','$email','$username','$password')";
    
        if (mysqli_query($connect, $query)) {

            echo"<h1>Account created successfully</h1>";
            echo"<h1>I MISS YOU</h1>";
            exit;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
    }
?>

    