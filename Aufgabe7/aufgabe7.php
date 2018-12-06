<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Anmeldung</h1>
    <?php
    IF($_POST) {

      $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
      $nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_STRING);
      $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
      $studiengang = filter_var($_POST["studiengang"], FILTER_SANITIZE_STRING); //eigentlich unnötig

      $fehler = false;
      if(!$vorname || $nachname || $studiengang) $fehler=true;

      if(!$fehler)
      {
        echo "
        <p>
        Herzlichen Dank " . $vorname . " " . $nachname . " von Studiengang " . $studiengang . "!<br/>
        Wir haben eine E-mail an " . $email . " gesendet. <br/>
        <a href="./aufgabe7.php">zurück</a>
        </p>
        ";
      }
    }
    if(($_POST && $fehler) || empty($_POST)) :

    ?>
    <p>
      Herzlichen Dank
      <?php $_POST["vorname"]." ".$_POST["nachname"]; ?>
      vom Studiengang
      <?php echo $_POST["studiengang"]; ?> ! <br/>
      Wir haben E-mail an
      <?php echo $_POST["email"]; ?> gesendet. <br/>
      <a href="./aufgabe7.php">zurück</a>
    </php>
    <?php
    else :
    ?>

<form action="./aufgabe7.php" method="post" class="form-horizontal">
  <div class="form-group row">
    <label for="vorname" class="col-3">Vorname : </label>
    <input type="text" name="vorname" placeholder="Vorname" class="form-control col-9">
  </div>

  <div class="form-group row">
    <label for="nachname"class="col-3">Nachname : </label>
    <input type="text" name="nachname" placeholder="Nachname" class="form-control col-9">
  </div>

  <div class="form-group row">
    <label for="email" class="col-3">E-mail : </label>
    <input type="email" name="email" placeholder="E-mail" autocomplete="off" class="form-control col-9">
  </div>

  <div class="form-group row">
    <label for="studiengang" class="col-3">Studiengang : </label>
    <select name="studiengang" class="form-control col-9">
      <option value="FIW">Informatik und Wirtschaft</option>
      <option value="AI">Angewandte Informatik</option>
      <option value="IMI">Internationale Medieninformatik</option>
    </select>
  </div>

  <div class="form-group row">
    <label for="pwd" class="col-3">Passwort : </label>
    <input type="password" name="pwd" placeholder="Passwort" class="form-control col-9" autocomplete="off">
  </div>

  <div class="form-group row">
    <button type="submit">Anmelden</button>
  </div>
</form>
<?php
endif;
?>
</div>


</body>
</html>
