<?php
require_once 'controllers/controller_index.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Colysum</title>
</head>
<body>
    <div class="row">
    <from></from> 
    </div>
<!-- PARTIE 1 exercice 1 -->
<table class="table table-striped table-success">
  <thead>
  <h1 class="text-center">EXERCICE 1</h1>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($allClientsArray as $client){ ?>
      <th><?= $client['id'] ?></th>
      <td><?= $client['lastname'] ?></td>
      <td><?= $client['firstname'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>

<!-- exercice 2 -->
<table class="table table-striped table-warning">
  <thead>
  <h1 class="text-center">EXERCICE 2</h1>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type de spéctacle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($allTypesArray as $showType){ ?>
      <th><?= $showType['id'] ?></th>
      <td><?= $showType['type'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>

<!-- exercice 3 -->
<table class="table table-striped table-dark">
  <thead>
  <h1 class="text-center">EXERCICE 3</h1>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($allClientsNbrArray as $clients){ ?>
     <tr>
      <th><?= $clients['id'] ?></th>
      <td><?= $clients['lastName'] ?></td>
      <td><?= $clients['firstName'] ?></td>
      <td><?= $clients['birthDate'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>


<!-- exercice 4 -->
<table class="table table-striped table-danger">
  <thead>
  <h1 class="text-center">EXERCICE 4</h1>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Carte</th>
      <th scope="col">Numéro de carte</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($allClientsTypesArray as $CardTypes){ ?>
     <tr>
      <th><?= $CardTypes['id'] ?></th>
      <td><?= $CardTypes['lastName'] ?></td>
      <td><?= $CardTypes['firstName'] ?></td>
      <td><?= $CardTypes['birthDate'] ?></td>
      <td><?= $CardTypes['card'] ?></td>
      <td><?= $CardTypes['cardNumber'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>

<!-- exercice 5 -->
<table class="table table-striped table-dark">
  <thead>
  <h1 class="text-center">EXERCICE 5</h1>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($allClientsSortArray as $SortClients){ ?>
     <tr>
      <td><?= $SortClients['lastName'] ?></td>
      <td><?= $SortClients['firstName'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>

<!-- exercice 6 -->
<table class="table table-striped table-success">
  <thead>
  <h1 class="text-center">EXERCICE 6</h1>
    <tr>
      <th scope="col">Spectacle</th>
      <th scope="col">Artiste</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($allArtistShowArray as $ArtistsShows){ ?>
     <tr>
      <td><?= $ArtistsShows['title'] ?></td>
      <td><?= $ArtistsShows['performer'] ?></td>
      <td><?= $ArtistsShows['date'] ?></td>
      <td><?= $ArtistsShows['startTime'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>


<!-- exercice 7 -->
<table class="table table-striped table-danger">
  <thead>
  <h1 class="text-center">EXERCICE 7</h1>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Carte de fidélité</th>
      <th scope="col">Numéro de la carte</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($allListClientsArray as $ListClients){ ?>
     <tr>
     <td><?= $ListClients['lastName'] ?></td>
      <td><?= $ListClients['firstName'] ?></td>
      <td><?= $ListClients['birthDate'] ?></td>
      <td><?= $ListClients['card'] ?></td>
      <td><?= $ListClients['cardNumber'] ?></td>
    </tr>
   <?php }?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
 crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
  integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>