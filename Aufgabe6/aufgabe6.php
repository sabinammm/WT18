<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datei einlesen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<h1>Datei einlesen</h1>
<?php
/*
 * falls das Zeilenende der einzulesenden Datei nicht korrekt
 * erkannt werden sollte, dann sollte die folgende Anweisung
 * ausgeführt werden
 */
ini_set("auto_detect_line_endings", true);
/* Öffnen der Datei zum Lesen "r"
 * Datei muss im gleichen Verzeichnis liegen wie aufgabe6.php
 * andernfalls Pfadangabe ändern
 * @ unterdrückt evtl Warnungen
 */
$file = @fopen ( "./mockdatatext", "r" );
/*
 * wenn das Öffnen der Datei nicht funktioniert hat, ist $file FALSE
 * ansonsten steht der Dateizeiger am Anfang der ersten Zeile
 */
if (! $file) {
    echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {

  {
    echo "<div class='row'>";
    $counter=0;
    /*
     * feof - end of file
     * prüft, ob ein Dateizeiger am Ende der Datei steht
     */
    while ( ! feof ( $file ) ) {
      if($counter%10==0)
      {
        echo "<div class='col-xl-4 col-lg-6 col-md-12' style='background-color:dimgray; margin:10px;'>";
        echo "<ul class='list-group' style='padding:10px;'>";
      }
      $vorname = fgets($file);
      $nachmane = fgets($file);
      $email = fgets($file);
      $ip = fgets($file);
      $leer = fgets($file);
      echo "<li class='list-group-item'>".$vorname." ".$nachmane." (<a href='mailto:".$email."'>".$email."</a>) </li>";
      if($counter%10==9)
      {
        echo "</ul>";
        echo "</div>";
      }
      $counter++;
      }


        /*
         * fegts() liest eine Zeile einer Datei aus
         * fgets() gibt einen String zürück
         * nach Aufruf von fgets() steht der Dateizeiger
         * in der nächsten Zeile (außer, es wurde eine
         * Leselänge als 2. Parameter fgets übergeben)
         */

        /*
         * Sie können für die Lösung der Aufgabe davon ausgehen,
         * dass jeder Datensatz aus 4 Zeilen besteht und dass zwischen
         * den einzelnen Datensätzen immer genau eine Leerzeile ist.
         */
    }

    fclose ( $file );
}
?>
</body>
</html>
