<?php
include 'connectDatabase.php';
    $tpl = 'include/templets/'; // template directory
    $css ='design/css/'; // css directory
    $js ='design/js/'; // js directory
    $lang = 'include/languages/'; // language directory
    
    include $lang . 'en.php';
    include $tpl . "header.php"; 
    include $tpl . "footer.php";


    if (!isset($noNavbar)) {include $tpl . 'navbar.php';}

