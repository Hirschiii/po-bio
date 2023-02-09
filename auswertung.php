<?php
// include ("connect.inc.php"); // Include der Datenbankverbindung

$ip = $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1';; // IP-Adresse des Users ausfindig machen und in $ip speichern.


// ----------------------------------

$sql = "SELECT * FROM ip WHERE ip='$ip'"; // Wählt alle Einträge aus der Datenbank aus, die in der Spalte ip die IP-Adresse des Besuchers haben.

// $result = mysqli_query($con,$sql);
// $result = mysqli_query($sql);

// $menge = mysqli_num_rows($result); // Zählt die Anzahl der Zeilen
$menge = 1;

if ($menge > 0) { // Wenn ip in Datenbank vorhanden, dann "Sie haben heute schon gewählt" ausgeben

// Content when they took part in the pas 24 hours

echo "Du hast in den letzten 24 Stunden teil genommen";
}
else {

echo "Du hast noch nicht teil genommen.";
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Biodiversität - Auswertung</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com"> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;800&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</html>
