<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'config.php';


try{
    $query = "SELECT * FROM Record ORDER BY (SUBSTRING_INDEX(duration, ':', 1) * 60 + SUBSTRING_INDEX(duration, ':', -1)) DESC";
    $stmt = $conn->prepare($query);
    $stmt -> execute();


    $resultaten = $stmt -> fetchAll();
    $aantalRijen = count($resultaten);

    include_once 'view/agenda_view.php';
} catch (PDOException $e) {
    echo '<p>fout</p>';
    echo '<P>query' . $query . ' </P>.';
    echo '<P>foutmelding' . $e->getMessage() . '</P>';
    exit;
}