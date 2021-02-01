<?php?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>La toison d'Or - Les Argaunautes</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet"> 
      <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
  <header class="header">
      <h1> Les Argonautes </h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
  </header>

    <main>
      <!-- New member form -->
      <div class="newMemberForm">   
        <h2>Ajouter un(e) Argonaute</h2>
        <form method="post" action="">
          <label for="argonautName">Nom de l'Argonaute</label>
          <input id="argonautName" name="argonautName" type="text" placeholder="Charalampos" />
          <label for="argonautAdjective"></label>
          <input id="argonautAdjective" name="argonautAdjective" type="text" placeholder="The Greatest warior"/>
          <button type="submit">Envoyer</button>
        </form>
      </div>
      
      <!-- Member list -->
      <div class="membersOfTheTravel"></div>
      <h2>Membres de l'équipage</h2>
      <div class="member-list">
      <?=  'Argaunautes'; ?>
        <div class="member-item"> <?= 'Argaunaute'; ?> </div>
      </div>
    </main>

  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>
  <script src ="assets/js/toisonDor.js"></script>
</body>
</html>