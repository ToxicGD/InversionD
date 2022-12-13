<?php
session_start();
class Session{
    public function getIntro(){
        if (isset($_SESSION['login']) and $_SESSION['login'] == true){
                require_once 'view/module/dashboard/dashboard.php';
        }else{
            require_once "view/module/main.php";
        }

        }
    }
?>