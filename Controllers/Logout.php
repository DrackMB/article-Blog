<?php 
session_start();
$_SESSION['checkLogin'] = 0;
header("Location: accueil");
