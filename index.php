<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<header class="nav">
        <a href="?path=projektai/">Projektai</a>
        <a href="?path=darbuotojai/">Darbuotojai</a>
</header>

</html>

<?php
require('./Library/Connection.php');
require('./Library/delete.php');
require('./Library/pridetiDarbuotoja.php');
require('./Library/pridetiProjekta.php');
if ($_GET['path'] == 'darbuotojai/') {
    require('./Library/darbuotojai.php');
} else {
    require('./Library/projektai.php');
}

//Truksta update funkcionalumo.
//Truksta prideti prie naujo darbuotojo projekta.


?>

</body>
</html>