<?php

require_once('config.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$sqlfetch = "SELECT username,password FROM users";
$result = mysqli_query($connection, $sqlfetch) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {

        $dbusername = $rows['username'];
        $dbpassword = $rows['password'];

        if ($username == $dbusername && $password == $dbpassword) {
            header('location:../VIP TIPS.php');
        } else {
            echo 'user does not exist';
        }
    }
}
