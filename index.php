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
<div class="main">
<table>
<tr>
<td>Id</td>
<td>name</td>
<td>Last name</td>
<td>age</td>
<td>project name</td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "sprint1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT id, name, last_name, age, project_name FROM sprint1.darbuotojai';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        print("<tr><td> " . $row["id"]."</td> " .
              " <td>" . $row["name"]."</td> " .
               "<td>" . $row["last_name"]."</td> " .
               "<td>" . $row["age"]."</td> " .
               "<td>" . $row["project_name"]."</td><tr> ");
    }
}
 else {
    echo "0 results";
    
}
?>
<tr>
<td>Project id</td>
<td>Project name</td>

</tr>
<?php
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT project_id, project_name FROM sprint1.projektai';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        print("<tr><td> " . $row["project_id"]."</td> " .
              " <td>" . $row["project_name"]."</td><tr> ");
    }
}

mysqli_close($conn);
?>
</table>
</div>
</body>
</html>