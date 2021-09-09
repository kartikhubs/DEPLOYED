<?php 
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['email_id']);
    unset($_SESSION['passcode']);
    header('refresh:1;url="navigation.html');
    ?>