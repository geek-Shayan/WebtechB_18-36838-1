<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) && empty($_POST['password'])){
            header('location: login.php?messege=both_empty');
        }
        else if (empty($_POST['username'])){
            header('location: login.php?messege=empty_username');
        }
        else if (empty($_POST['password'])){
            header('location: login.php?messege=empty_password');
        }
        else{
            if($_POST['username'] == $_POST['password']){
                session_start();
                $_SESSION['start'] = 'true';
                $_SESSION['name'] = $_POST['username'];
                header('location: dashboard.php');
            }
        }

    }
    else {
        header('location: login.php');
    }
?>