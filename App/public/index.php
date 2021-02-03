<?php
  require '../../vendor/altorouter/altorouter/AltoRouter.php';
  require '../../vendor/autoload.php';
  require 'argaunotes.php';
  use ToisonDor\Model\ArgaunotModel;

  $methode = $_SERVER['REQUEST_METHOD'];

  $index = 0;

    
  if ($methode === 'GET' || $methode === 'POST') {
      $argo = new ArgaunotModel;
      $argaunotes = $argo->getAllArgaunotes();

      if ($methode === 'POST') {
          $argo = new ArgaunotModel;
          $argo->insertArgaunot();
      }
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>La toison d'Or - Les Argaunautes</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="assets/css/reset.css">
      <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet"> 
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
  <header class="header">
      <h1> Les Argonautes - Constantin </h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
  </header>

    <main class="container">
    
      
      <!-- Member list -->
      <div class="membersOfTheTravel">
        <h2>Membres de l'équipage</h2>
        <ul class="membersList">
          <?php foreach($argaunotes as $argaunot) :?> 
            
            <li class="member-item">  
              <p> 
                <?php $index++; echo $index. " ". $argaunot[0]['name']." ";
                    if(isset($argaunot[0]['adjective'])){ 
                      
                      echo "''{$argaunot[0]['adjective']}''"; 
                    } 
                  ?> 
              </p>

            </li>
          <?php endforeach;?>
        </ul>
      </div>
        <!-- New member form -->
        <div class="newMemberForm">   
        <h2>Ajouter un(e) Argonaute</h2>
        <form class="form" method="post" action="">
          
          <label for="charachterName">Nom de L'Argaunot</label>
          <input id="argonautName" name="charachterName" type="text" value="" placeholder="Charalampos" />
          
          <label for="charachterAdjective">Son Titre de Bravoure</label>
          <input id="argonautAdjective" name="charachterAdjective" type="text" value="" placeholder="The Greatest warior"/>
         
          <button type="submit">Envoyer</button>
        </form>
      </div>
    </main>

  <footer class="footer">
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>
  <script src ="assets/js/toisonDor.js"></script>
</body>
</html>