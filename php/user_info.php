<?php
    f(!session_id()) session_start();
    $curr_user = "Amy";
    $curr_company = "Private";
    if(!isset($_SESSION['curr_user'])) {
        $_SESSION['curr_user'] = $curr_user;
    }
    if(!isset($_SESSION['curr_company'])) {
        $_SESSION['curr_company'] = $curr_company;
    }
?>