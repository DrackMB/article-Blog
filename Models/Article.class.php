<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author dell
 */
class Article {

    //put your code here
    /* Compléter ici la liste des propriétés de l'objet */
    private $articleId;
    private $titre;
    private $texte;
    private $user;

    public function setArticleFromPost($titre, $texte, $articleId) {

        $this->titre = $titre;
        $this->texte = $texte;
        $this->articleId = $articleId;

    }


    public function addArticleToDb() {

        global $Db;
        $connection = $Db->connection();
        $sql = "INSERT INTO article(texte,titre) VALUES (?,?)";
        $stm = $connection->prepare($sql);
        $stm->execute([$this->titre, $this->texte]);
    }

    public function getAllArticlesDb() {
        global $Db;
        $connection = $Db->connection();
        $sql = "SELECT * FROM article";
        $stm = $connection->prepare($sql);
        $stm->execute();
        return $stm;
    }

    public function deleteArticleId($articleID) {

        global $Db;
        $connection = $Db->connection();
        $sql = "DELETE FROM `article` WHERE articleId = :article";
        $stm = $connection->prepare($sql);
        $stm->execute(array(':article' => $articleID));
        return $stm;
    }

    public function updateArticleId($articleId, $titre, $text) {

        global $Db;
        $connection = $Db->connection();
        $sql = "UPDATE article SET texte=:text ,titre =:titre WHERE articleId = :articleId ";
        $stm = $connection->prepare($sql);
        $stm->execute(array(':text' => $text, ':titre' => $titre, 'articleId' => $articleId));
    }

    function getTitre() {
        return $this->titre;
    }

    function getTexte() {
        return $this->texte;
    }

    function getUser() {
        return $this->user;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setTexte($texte) {
        $this->texte = $texte;
    }

    function setUser($user) {
        $this->user = $user;
    }

}
