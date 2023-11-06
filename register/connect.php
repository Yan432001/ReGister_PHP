<?php
    $servername="localhost";
    $uername="root";
    $password="";
    $dbname="testuser";

    $conn = mysqli_connect($servername,$uername,$password,$dbname);
    if(!$conn){
        echo "connect Error.".mysqli_connect_error();
    }

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register(fullname,username,email,password)VALUES('$fullname','$username','$email','$password')";

    if(mysqli_query($conn,$sql)){
        echo "<h1> One Record Added Successfull!</h1>";
    }
    else{
        echo "Error!";
    }
  mysqli_close($conn);
?>