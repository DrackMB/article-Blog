<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author dell
 */
class User {

    //put your code here
    private $nom;
    private $prenom;
    private $adressEmail;
    private $adress;
    private $tele;
    private $sexe;
    private $motDePasse;
    private $typeCompt;
    
    /**
     * Method remplireInfo
     *
     * @param $nom $nom [explicite description]
     * @param $prenom $prenom [explicite description]
     * @param $adressEmail $adressEmail [explicite description]
     * @param $tele $tele [explicite description]
     * @param $sexe $sexe [explicite description]
     * @param $motDePass $motDePass [explicite description]
     *
     * @return void
     */
    public function remplireInfo($nom, $prenom, $adress,$adressEmail, $tele, $sexe, $motDePass) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adress = $adress;
        $this->adressEmail = $adressEmail;
        $this->tele = $tele;
        $this->sexe = $sexe;
        $this->motDePasse = $motDePass;
        return true;
    }
    
    /**
     * Method creeCompt
     *
     * @param $type $type [explicite description]
     *
     * @return void
     */
    public function creeCompt($type) {
        $this->typeCompt = $type;
        global $Db;
        $connection = $Db->connection();
        $sqlVeri = "SELECT nom FROM user WHERE adressEmail = :adressEmail ";
        $stm2 = $connection->prepare($sqlVeri);
        $stm2->execute(array(':adressEmail' => $this->adressEmail));
        if (empty($stm2->fetch(PDO::FETCH_ASSOC))) {
            $sql = "INSERT INTO user(nom, prenom, adress,adressEmail, tele, sexe, motDePass,type) VALUES (?,?,?,?,?,?,?,?)";
            $stm = $connection->prepare($sql);
            $stm->execute([$this->nom, $this->prenom,$this->adress,$this->adressEmail, $this->tele, $this->sexe, password_hash($this->motDePasse, PASSWORD_DEFAULT), $this->typeCompt]);
        }else{
            return -1 ;//Quelqu'un utiliser cette email
        } 
            
    }
    
    /**
     * Method loging
     *
     * @param $adressEmail $adressEmail [explicite description]
     * @param $motDepass $motDepass [explicite description]
     *
     * @return void
     */
    public function loging($adressEmail, $motDepass) {
        global $Db;
        $connection = $Db->connection();
        $sql = "SELECT adressEmail,motDepass,type FROM user WHERE adressEmail = :adressEmail ";
        $stm = $connection->prepare($sql);
        $stm->execute(array(':adressEmail' => $adressEmail));
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($row)) {
                if (password_verify($motDepass, $row['motDepass'])) {
                    return $row['type'];
                } else {
                    return -1;//Mot de passe incorrect
                }
            
        } else {
            return -2;//Email incorrect
        }
    }
    

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdressEmail() {
        return $this->adressEmail;
    }

    public function getTele() {
        return $this->tele;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getMotDePasse() {
        return $this->motDePasse;
    }

    public function getTypeCompt() {
        return $this->typeCompt;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdressEmail($adressEmail) {
        $this->adressEmail = $adressEmail;
    }

    public function setTele($tele) {
        $this->tele = $tele;
    }

    public     function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    public function setTypeCompt($typeCompt) {
        $this->typeCompt = $typeCompt;
    }

}
