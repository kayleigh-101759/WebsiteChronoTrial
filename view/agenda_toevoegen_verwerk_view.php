<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toevoegen verwerk</title>
    <link rel="stylesheet" href="css/body.css">
</head>
<body>
<?php if ($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
            <li>
                <p><strong>Onderwerp:</strong> <?= htmlspecialchars($rij["onderwerp"]) ?></p>
                <p><strong>Inhoud:</strong> <?= htmlspecialchars($rij["Inhoud"]) ?></p>
                <p><strong>Begindatum:</strong> <?= htmlspecialchars($rij["Begindatum"]) ?></p>
                <p><strong>Einddatum:</strong> <?= htmlspecialchars($rij["Einddatum"]) ?></p>
                <p><strong>Prioriteit:</strong> <?= htmlspecialchars($rij["Prioriteit"]) ?></p>
                <p><strong>Status:</strong> <?= htmlspecialchars($rij["Status"]) ?></p>

                <div class="acties">
                    <a href="agenda.php?ID=<?= $rij['ID'] ?>">home</a>
                    <a href="agenda_bewerken.php?id=<?= $rij['ID'] ?>">Bewerken</a>
                    <a href="agenda_verwijderen.php?id=<?= $rij['ID'] ?>">Verwijderen</a>
                </div>
            </li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p class="geen-resultaat">Geen resultaten gevonden.</p>
<?php } ?>

</body>
</html>