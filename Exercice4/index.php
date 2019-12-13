<?php // Start the session
session_start(); ?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Exercice 2</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body class='container-fluid bg-secondary'>
  <div class='row mt-5'>
    <div class='jumbotron shadow-lg mx-auto text-center'>
      <h2 class="mb-4">- Account -</h2>
      <ul class="list-group">
        <li class="list-group-item list-group-item-info">Login =
        <?php
        if (!isset($_COOKIE['login'])){
          echo htmlspecialchars($_COOKIE["login"]);
        } else {
          echo 'No cookie';
        }
        ?></li>
        <li class="list-group-item list-group-item-info">Mot de passe = <?= htmlspecialchars($_COOKIE["password"]) ?></li>
      </ul>
      <p class='text-right mt-2 font-weight-bold'>Un message de la direction</p>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
