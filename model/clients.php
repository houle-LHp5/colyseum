<?php

// fonction permettant d'obtenir tous les clients de la table de client
// nous retournons les champs id, lastname, firstname
class Clients extends DataBase
{
    public function getAllClients()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table...
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients`';

        // On utlile la méthode query pour éxecuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requete
        $result = $queryObj->fetchALL(); // par défaut va retourner un tableau associattif 

        return $result; // on retourne le tableau
    }


    // exercice 3
public function getALLnbrClients($limit)
    {

        $query = 'SELECT * FROM `clients` LIMIT 20' . $limit;

        $queryNbr = $this->dataBase->query($query);

        $result = $queryNbr->fetchALL();

        return $result;
    }

// exercice 4
public function getAllCardTypes($type)
    {

        $query = 'SELECT `clients.id`, lastName, firstName, `clients.cardNumber`, `cardtypes.type` 
        FROM `clients` 
        INNER JOIN `cards ON clients.cardNumber = cards.cardNumber` 
        INNER JOIN `cardtypes` 
        ON `cardtypes.id = cards.cardTypesId`
        WHERE cardTypesId = ' . $type;

        $querytype = $this->dataBase->query($query);

        $result = $querytype->fetchALL();

        return $result; 
    }

// exercice 5
public function getAllClientSort()
    {
        $query = "SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName`";

        $querySort = $this->dataBase->query($query);

        $result = $querySort->fetchAll(); 

        return $result;
    }

//  exercice 6
public function getAllartistsShows()
    {
        $query = 'SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`';

        $queryArtistShows = $this->dataBase->query($query);

        $result = $queryArtistShows->fetchAll(); 

        return $result;
    }

// exercice 7
public function getAllListClients()
    {
        $query = 'SELECT id, lastName, firstName, DATE_FORMAT(birthDate, \%) FROM `clients`';

        $queryListClient = $this->dataBase->query($query);

        $result = $queryListClient->fetchAll(); 

        return $result;
    }

}









