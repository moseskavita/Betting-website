<?php

require_once('config.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirm = md5($_POST['confirm']);

if ($password == $confirm) {
    $sqlFetch = "SELECT * FROM users WHERE username='$username' limit 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) > 0) {
        echo 'user already exists';
    } else {
        $sqlInsert = "INSERT INTO users(username,email,password)values('$username','$email','$password')";
        $success = mysqli_query($connection, $sqlInsert) or die(mysqli_error($connection, $sqlInsert));

        if ($success) {
            header('location:../index.php');
        } else {
            echo 'error';
        }
    }
} else {
    echo 'try again';
}
