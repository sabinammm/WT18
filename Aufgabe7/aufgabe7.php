<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div  class="container-fluid">
<h1>Anmeldung</h1>
<form action="./aufgabe7.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="vorname">Vorname : </label>
    <input type="text" name="vorname" placeholder="Vorname">
  </div>

  <div class="form-group">
    <label for="nachname">Nachname : </label>
    <input type="text" name="nachname" placeholder="Nachname">
  </div>

  <div class="form-group">
    <label for="email">E-mail : </label>
    <input type="email" name="email" placeholder="E-mail">
  </div>

  <div class="form-group">
    <label for="studiengang">Studiengang : </label>
    <select name="studiengang">
      <option value="FIW">Informatik und Wirtschaft</option>
      <option value="AI">Angewandte Informatik</option>
      <option value="IMI">Internationale Medieninformatik</option>
    </select>
  </div>

  <div class="form-group">
    <label for="pwd">Passwort : </label>
    <input type="password" name="pwd" placeholder="Passwort">
  </div>


  <button type="submit">Anmelden</button>
</form>
</div>


</body>
</html>
