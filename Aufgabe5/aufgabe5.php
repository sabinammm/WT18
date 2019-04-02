<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <title>Aufgabe 5</title>
  <style type="text/css">
  *{
    padding: 5px;
  }
  .page-header{
    background-color: #FF7F50 !important;
  }
  .elemente{
    background-color: #00BFFF;
    }
  </style>
  <?php
    function zufzahl($max, $anzahl)
    {

      echo '<table class="table table-striped table-hover table-responsive"><thead><tr>';
      echo '<th> Zufallszahl </th>
            <th>1 gerundet </th>
            <th>2 gerundet </th>
            <th>3 gerundet </th>';
      echo '</tr>    </thead>      <tbody>';
      for($i=1; $i<=$anzahl; $i++)
      {
        $zzahl = rand(1,$max);
        $gerundet1 = abschneiden($zzahl,1);
        $gerundet2 = abschneiden($zzahl,2);
        $gerundet3 = abschneiden($zzahl,3);

        if ($zzahl>5000)
        {
          echo "<tr class='elemente' style='background-color:red;'>
            <td>$zzahl</td>
            <td>$gerundet1</td>
            <td>$gerundet2</td>
            <td>$gerundet3</td>
          </tr>";
      }
      else {
        echo "<tr class='elemente''>
          <td>$zzahl</td>
          <td>$gerundet1</td>
          <td>$gerundet2</td>
          <td>$gerundet3</td>
        </tr>";
      }
    }
    echo '</tbody> </table>';
  }

function abschneiden($zahl,$stellen=2)
{
  $base = pow(10,$stellen=2);
  return $zahl - ($zahl % $base);
}
?>
</head>
<body>
   <div class="row page-header">
     <div class="col-xl-1-12">
    <h1>Zufallszahlen</h1>
    </div>
  </div>

  <div>
    <?php zufzahl(20000, 20); ?>
  </div>

</body>
</html>
