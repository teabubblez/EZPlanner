<?php
    session_start();

    unset($_SESSION['loggedin']);
    session_destroy();
    header("Location: ../panel/forms/login.html");
    exit();
?>