<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="styles4" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <title>Aufgabe 5</title>
  <?php
    function zufzahl($max, $anzahl)
    {
      for($i=1; $i<=$anzahl; $i++)
      {
        $zzahl = rand(1,$max);
        $gerundet2 = abschneiden($zzahl,2);
        $gerundet3 = abschneiden($zzahl,3);
        echo $zzahl . " " . $gerundet2  . " " . $gerundet3 . "<br/>";
      }
    }

    function abschneiden($zahl,$stellen=2)
    {
      $base = pow(10,$stellen);
      return $zahl - ($zahl % $base);
    }
    ?>
</head>
<body>
  <div class="container-fluid">
    <h1>Zufallszahlen</h1>
    <div>
      <?php zufzahl(20000, 20); ?>
    </div>
  </div>
</body>
</html>
