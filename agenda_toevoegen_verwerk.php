<?php
// Voeg de database-verbinding toe
require 'config.php';

$resultaat = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Maak een toevoeg-query met named placeholders
        $query = "INSERT INTO Record (username, time, datum)
                  VALUES (:username, :time, :datum)";

        // Bereid het statement voor
        $stmt = $conn->prepare($query);

        // Haal data uit POST
        $username  = $_POST['username'];
        $time     = $_POST['time'];
        $datum = $_POST['datum'];


        // Voer de query uit
        $stmt->execute([
            'username' => $username,
            'time' => $time,
            'datum' => $datum
        ]);

        if (isset($_POST['username']) &&
            isset($_POST['time']) &&
            isset($_POST['datum'])){
            print ('Er is niks ingevoerd');
        }else{
            print ('het item is toegevoegd');
        }

        // Controleer of het is gelukt
        if ($stmt->rowCount() > 0) {
            $resultaat = "{$username} is toegevoegd!<br>";
        } else {
            $resultaat = "Er is een fout opgetreden bij het toevoegen.<br>";
        }

    } catch (PDOException $e) {
        $resultaat = "Fout bij het toevoegen: " . $e->getMessage();
    }

} else {
    $resultaat = "Formulier is niet verzonden.";
}
include 'view/agenda_toevoegen_view.php';
?>