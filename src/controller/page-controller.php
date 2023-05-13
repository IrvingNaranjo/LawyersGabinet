<?php

    if(isset($_GET['option'])){
        switch($_GET['option']){
            case 0:
                include_once "src/view/home.php";
                break;
            case 1:
                include_once "src/view/login.php";
                break;
            case 2:
                include_once "src/view/signup.php";
        }
    }

?>