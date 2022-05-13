<?php
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    if(strcmp($user,'user') == 0 && strcmp($pass, 'pass') == 0){
        session_start();
        header('Location: success_session.php');
    } else {
        header('Location: failed_session.html');
    }
?>
