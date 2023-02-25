<?php
// ----------------------------------

include ("connect.inc.php"); // Include der Datenbankverbindung

$ip = $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1';; // IP-Adresse des Users ausfindig machen und in $ip speichern.


// ----------------------------------

$timebefore = time() - 86400;
$sql = "SELECT * FROM ip WHERE ip='$ip' AND datum < $timebefore;"; // Wählt alle Einträge aus der Datenbank aus, die in der Spalte ip die IP-Adresse des Besuchers haben.

$result = mysqli_query($con,$sql);
// $result = mysqli_query($sql);


$menge = mysqli_num_rows($result); // Zählt die Anzahl der Zeilen

file_put_contents("myfile.txt","$menge", FILE_APPEND);

if ($menge > 0) { // Wenn ip in Datenbank vorhanden, dann "Sie haben heute schon gewählt" ausgeben

    // header('Location: /biodiversität/biodiversität/index.html?an=1');
    header('Location: /biodiversität/index.html?an=2');
    die();
} else {


// ---------------------------------------------

// Sql eintrag vorbereiten

// $sql = "INSERT INTO umfrage (date) VALUES (NOW())";

// Sql eintrag ausführen
// $result = mysqli_query($con,$sql);
// $id = mysqli_insert_id($con);

$counter = 0;

$answers = array();

foreach ($questions as $question) {
$counter = $counter + 1;

$answers[$question] = $_POST[$question];
}

function mail_nuller($mail_value) {
    if ($mail_value == "") {
        return "NULL";
    }
    else {
        return "$mail_value";
    }
};

print_r($answers);


$mail = mail_nuller($answers["email"]);


$sql = "INSERT INTO umfrage (date, mail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13) 
VALUES (NOW(),
'". $mail . "',
'". $answers["question1"] . "',
'". $answers["question2"] . "',
'". $answers["question3"] . "',
'". $answers["question4"] . "',
'". $answers["question5"] . "',
'". $answers["question6"] . "',
'". $answers["question7"] . "',
'". $answers["question8"] . "',
'". $answers["question9"] . "',
'". $answers["question10"] . "',
'". $answers["question11"] . "',
'". $answers["question12"] . "',
'". $answers["question13"] . "');";


$result = mysqli_query($con,$sql);

$counter = 0;
foreach ($questions as $question) {
    $counter = $counter + 1;

    if ($question == "email") {
        break;
    }

    // sql to get the number
    $sql = "SELECT q$counter FROM counter WHERE id = $_POST[$question];";

    $result1 = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result1);

    // Update the number plus one
    $sql = "UPDATE counter SET q$counter = $row[0] + 1 WHERE id = $_POST[$question];";
    $update = mysqli_query($con,$sql);

    $sql = "SELECT q$counter FROM counter WHERE id = $_POST[$question];";

    $result2 = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result2);
}

// ----------

// Uncommend when Finish, function to save ip to stop multiple voting
$timestamp = time(); // Ermittelt aktuelle Zeit

$sql2 = "INSERT INTO ip (ip,datum) VALUES ('$ip','$timestamp')"; // Fügt IP und Datum in die Tabelle "ip" ein.
$result2 = mysqli_query($con,$sql2);

}

    // header('Location: /biodiversität/biodiversität/index.html?an=1');
    header('Location: /biodiversität/index.html?an=1');
    die();
?>
