<?php
session_start();
if(!empty($_POST["submit"])){
    $user = new User();
    $nom=$_POST['Nom'];
    $prenom=$_POST['Prenom'];
    $adress=$_POST['Address'];
    $adressEmail=$_POST['AddressEmail'];
    $numeroDeTelephone=$_POST['numeroDeTelephone'];
    $motDePass=$_POST['motdePasse'];
    $sexe=$_POST['Sexe'];
    $user->remplireInfo($nom,$prenom,$adress, $adressEmail, $numeroDeTelephone, $sexe, $motDePass);
    $nbr=$user->creeCompt(0);
    if($nbr != -1 ){
        $_SESSION['checkLogin'] = 0;
        header("Location: accueil");

    }
}
