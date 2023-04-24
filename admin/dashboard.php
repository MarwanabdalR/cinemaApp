<?php 
    session_start();
    // $noNavbar ='';
    if (isset($_SESSION['Username'])) {
        # code...
        include 'init.php';

    }else{
        header('Location: index.php');

        exit();
    }