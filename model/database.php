<?php

class DataBase {

    protected  $dataBase;

    public function __construct()
    {
        // nous effectuons un try and catch pour obtenir un message d'erreur explixite en cas de non connexion 
        try{
            $this -> dataBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8','root', '');
        }catch (Exception $errorMessage){
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }

}