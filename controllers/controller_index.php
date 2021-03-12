<?php

require_once 'model/database.php';
require_once 'model/clients.php';
require_once 'model/showtypes.php';


//exercice 1
$clientOjt = new Clients;
// Utilisation de la mêthode getAllClients me permettant de récupere tous les clients sous forme de Tableau
$allClientsArray = $clientOjt->getAllClients();

//exercice 2
$typeShowsObj = new ShowTypes;
$allTypesArray = $typeShowsObj->getALLShowsTypes();

//exercice 3

$allClientsNbrArray = $clientOjt->getALLnbrClients(20);

//exercice 4

$allClientsTypesArray = $clientOjt->getAllCardTypes(1);

//exercice 5

$allClientsSortArray = $clientOjt->getAllClientSort('M');

//exercice 6
$artistShowOrder = new ArtistsShows;
$allArtistShowArray = $typeShowsObj->getAllartistsShows();

//exercice 7
$listAllClients = new ListClients;
$allListClientsArray = $listAllClients->getAllListClients();

if ($listClient) {
    
}