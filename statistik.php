<?php
include ("connect.inc.php"); // Verbindet mit der Datenbank

echo "<font face='Verdana' size='5'>"; // Schriftgrösse und -art bestimmen

// Alle Werte aus der Tabelle abholen

$questions = array("question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10");

$counter = 0;

foreach ($questions as $question) {
    $counter++;

    $sql = "SELECT q$counter FROM umfrage";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    echo "$question: $num";
}

// --------------------------------------------------------------

// Ausgabe aller Werte in einer Tabelle

// echo "<table border='0' width='300Px'>
// <tr>
// <td width='50%'>Hund</td>
// <td width='50%'>$hundp%</td>
// </tr>
// <tr>
// <td width='50%'>Katze</td>
// <td width='50%'>$katzep%</td>
// </tr>
// <tr>
// <td width='50%'>Pferd</td>
// <td width='50%'>$pferdp%</td>
// </tr>
// <tr>
// <td width='50%'>Eichhörnchen</td>
// <td width='50%'>$eichhornchenp%</td>
// </tr>
// </table>";
//
// // ---------------------------------------------------------------
//
// echo "<br><br>";
//
// echo "Insgesamt $gesamt Stimmen</font>";

?>
