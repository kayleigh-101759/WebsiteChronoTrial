<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Records</title>
    <link rel="stylesheet" href="css/body.css">

</head>
<body>
<h1>Time Records</h1>
<a href="agenda_toevoegen_verwerk.php" class="knop-toevoegen">toevoegen</a>
<?php
if ($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
            <li>
                <p><strong>Username:</strong> <?= htmlspecialchars($rij["username"]) ?></p>
                <p><strong>Time:</strong> <?= htmlspecialchars($rij["time"]) ?></p>
                <p><strong>Datum:</strong> <?= htmlspecialchars($rij["datum"]) ?></p>
            </li>
            <hr>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Geen resultaten gevonden</p>
<?php } ?>

</body>
</html>