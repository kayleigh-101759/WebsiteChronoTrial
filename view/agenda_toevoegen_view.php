<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toevoegen</title>

</head>
<body>
<form action="./agenda_toevoegen_verwerk.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required >
    <br><br>

    <label for="time">Time:</label>
    <input type="text" id="time" name="time" required>
    <br><br>

    <label for="datum">datum:</label>
    <input type="date" id="datum" name="datum" required>
    <br><br>

    <br><br>
    <input type="submit">
    <a href="./agenda.php">overzicht</a>

</form>
</body>
</html>