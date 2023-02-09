<?php
// include ("connect.inc.php"); // Include der Datenbankverbindung

// ----------------------------------
if (isset($_GET['link'])) {
echo $_GET["link"];
$url = $_GET['link'];
// Content when they took part in the pas 24 hours

$url_components = parse_url($url);

parse_str($url_components['query'], $params);

if (isset($params['id']))
echo "<h1>Hallo ".$params['id'], "</h1>";

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
<div class="yanq">
<h1>Fragen mit einer richtigen Antwort</h1>
<div>
  <canvas id="tfq"></canvas>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('tfq');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
      datasets: [
    {
      label: 'Antwort 1',
      data: [1,3,-9,2,3,1],
      backgroundColor: "#FF0000",
    },
    {
      label: 'Antwort 2',
      data: [1,3,9,2,3,-1], 
      backgroundColor: "#00FF00",
    },
    {
      label: 'Antwort 3',
      data: [2,-4,5,-2,2,3],
      backgroundColor: "#0000FF",
    },
    {
      label: 'Flasch',
      data: [2,-4,5,-2,2,3],
      backgroundColor: "#FF00FF",
    },
    {
      label: 'Richtig',
      data: [2,-4,5,-2,2,3],
      backgroundColor: "#00FFFF",
    },
]
    },
options: {
plugins: {
      title: {
        display: true,
        text: 'Chart.js Bar Chart - Stacked'
      },
    },
    color: "#FFFFFF",
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
  });
</script>
</html>
