<?php
// le role de cette page et de faire la loging et transmetre à deuxiam controleur pour l'afficher ...
session_start();
    $adressEmail=$_POST['User'];
    $motDepass=$_POST['password'];
    $user = new User();
    $nbr=$user->loging($adressEmail, $motDepass);
    if($nbr == -1 ){
        echo $nbr;
    }else if($nbr == -2)
    echo $nbr;
    else if($nbr>=0) {
        $_SESSION['User']=$adressEmail;
        $_SESSION['Password']=$motDepass;
        $_SESSION['Typecompt']= $nbr; 
        $_SESSION['checkLogin']=1;
      echo "user";
    }
    

    
        
       




