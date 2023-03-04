<?php
  $pdo = new PDO("mysql:host=localhost;dbname=patientenverwaltung","root","");

  $sql = "INSERT INTO patienten(Vorname, Nachname, Geburtsdatum, Versicherungsnummer, Versicherungen_idVersicherungen) VALUES (?,?,?,?,?)";

  $Vorname = $_POST["Vorname"];
  $Nachname = $_POST["Nachname"];
  $Geburtsdatum = $_POST["Geburtsdatum"];
  $Versicherungsnummer = $_POST["Versicherungsnummer"];
  $Versicherungen_idVersicherungen = $_POST["Versicherungen_idVersicherungen"];

  $statement = $pdo->prepare($sql);
  $statement->execute(array($Vorname, $Nachname, $Geburtsdatum, $Versicherungsnummer, $Versicherungen_idVersicherungen));
  if ($sql)
  {
    $send = "Übertragung erfolgreich!"
  } else {
    $send = "Fehler bei der Übertragung"
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>