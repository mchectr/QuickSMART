<?php

$action=$_POST['action'];
$con=mysqli_connect("localhost", "root", "", "hnm");

if ($action == "create-user") {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $createuser= mysqli_query($con, "INSERT INTO user (firstname, surname, email, user_name, user_pw) values('$firstname','$surname','$email','$username', '$password')");
    
    if (mysqli_affected_rows($con) === 1) {
        echo "Processed.";
    } else {
        echo mysqli_error($con);
    }
}

?>