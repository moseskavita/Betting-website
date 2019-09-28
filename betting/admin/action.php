<?php
session_start();

include_once('config.php');

// Register function
if (isset($_POST['reg_freebets'])) {
    $home = $_POST['home'];
    $away = $_POST['away'];
    $tip = $_POST['tip'];

    $sqlInsert = "INSERT INTO freebets(home,away,tip)VALUES('$home','$away','$tip')";
    $success = mysqli_query($connection, $sqlInsert);

    if ($success) {
        header('location: freebets.php');
    }
}

if (isset($_POST['td_bets'])) {
    $league = $_POST['league'];
    $home = $_POST['home'];
    $away = $_POST['away'];
    $tip = $_POST['tip'];

    $sqlInsert = "INSERT INTO todaysbets(league,home,away,tip)VALUES('$league','$home','$away','$tip')";
    $success = mysqli_query($connection, $sqlInsert);

    if ($success) {
        header('location: today.php');
    }
}

if (isset($_POST['tb_vip'])) {
    $leagues = $_POST['leagues'];
    $hometeam = $_POST['hometeam'];
    $awayteam = $_POST['awayteam'];
    $tips = $_POST['tips'];

    $sqlInsert = "INSERT INTO vip(leagues,hometeam,awayteam,tips)VALUES('$leagues','$hometeam','$awayteam','$tips')";
    $success = mysqli_query($connection, $sqlInsert);

    if ($success) {
        header('location: VIP.php');
    }
}

//Delete
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sqlFetch = "DELETE FROM freebets WHERE id=$id";
    $result = mysqli_query($connection, $sqlFetch);

    if ($result) {
        header('location: ./freebets.php');
    }
}

if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sqlFetch = "DELETE FROM todaysbets WHERE id=$id";
    $result = mysqli_query($connection, $sqlFetch);

    if ($result) {
        header('location: ./today.php');
    }
}

if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sqlFetch = "DELETE FROM vip WHERE id=$id";
    $result = mysqli_query($connection, $sqlFetch);

    if ($result) {
        header('location: ./VIP.php');
    }
}

// Update function
if (isset($_POST['update_freebets'])) {

    $id = $_POST['id'];
    $sqlFetch = "SELECT * FROM freebets WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {
        $home = $_POST['home'];
        $away = $_POST['away'];
        $tip = $_POST['tip'];

        $sqlUpdate = "UPDATE freebets SET home='$home',away='$away',tip='$tip' WHERE id=$id";
        $update = mysqli_query($connection, $sqlUpdate) or die(mysqli_error($connection));

        if ($update) {
            header('location: freebets.php');
        }
    }
}

if (isset($_POST['update_todaysbets'])) {

    $id = $_POST['id'];
    $sqlFetch = "SELECT * FROM todaysbets WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {
        $league = $_POST['league'];
        $home = $_POST['home'];
        $away = $_POST['away'];
        $tip = $_POST['tip'];

        $sqlUpdate = "UPDATE todaysbets SET league='$league',home='$home',away='$away',tip='$tip' WHERE id=$id";
        $update = mysqli_query($connection, $sqlUpdate) or die(mysqli_error($connection));

        if ($update) {
            header('location: today.php');
        }
    }
}

if (isset($_POST['update_vip'])) {

    $id = $_POST['id'];
    $sqlFetch = "SELECT * FROM vip WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {
        $leagues = $_POST['leagues'];
        $hometeam = $_POST['hometeam'];
        $awayteam = $_POST['awayteam'];
        $tips = $_POST['tips'];

        $sqlUpdate = "UPDATE vip SET leagues='$leagues',hometeam='$hometeam',awayteam='$awayteam',tips='$tips' WHERE id=$id";
        $update = mysqli_query($connection, $sqlUpdate) or die(mysqli_error($connection));

        if ($update) {
            header('location: VIP.php');
        }
    }
}
