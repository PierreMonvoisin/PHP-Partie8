<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Exercice 3</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body class='container-fluid bg-secondary'>
  <div class='row mt-5'>
    <div class='jumbotron shadow-lg mx-auto text-center'>
      <h2 class="mb-4">- Form -</h2>
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="login">Entrez votre nom d'utilisateur :</label>
          <input type="text" class="form-control" id="login" placeholder="PierreMonvoisin"
          name="login">
        </div>
        <div class="form-group">
          <label for="password">Entrez votre mot de passe :</label>
          <input type="text" class="form-control" id="password" placeholder="123456789..." name="password">
        </div>
        <button type="submit" class="btn btn-dark" name="button" value="checked">Valider</button>
      </form>
      <?php
      if (isset($_POST['button'])){
        setcookie('login', $_POST['login']);
        setcookie('password', $_POST['password']); ?>
        <p class="mt-2">Cookie enregistré !</p>
      <?php } ?>
      <p class='text-right mt-2 font-weight-bold'>Un message de la direction</p>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
