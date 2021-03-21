
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<header>
        <a href="?path=projektai/">Projektai</a>
        <a href="?path=darbuotojai/">Darbuotojai</a>
</header>
<?php

require('./Connection.php');
require('./darbuotojai.php');
require('./projektai.php');
require('./delete.php');
?>
<form action="" method="post">
        <input class="log" type="text" name="wName" placeholder="WorkersName" required autofocus><br>
        <input class="log" type="text" name="workProject" placeholder="workProject" required autofocus><br>
        <button class="addWorker" type="submit" name="addWorker">Add</button>
    </form>
</body>
</html>