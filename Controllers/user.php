<?php
session_start();
if($_SESSION['checkLogin'] == 1){
        include_once 'Layouts/layoutLoging.php';
}else {
    header("Location: accueil")  ;
}

