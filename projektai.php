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
<div class="nav">
        <form action="./index.php">
        <button>Darbuotojai</button>
    </form>

    <form action="./projektai.php">
        <button>projektai</button>
    </form>
    </div>

<table>
<tr>
<td>Project id</td>
<td>Project name</td>
<td>Full_name</td>
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

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT project_id, project_name, CONCAT(first_name, " " ,last_name) as Full_name FROM sprint1.projektai
left join darbuotojai
on projektai.project_name = darbuotojai.WorkingOn';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        print("<tr><td> " . $row["project_id"]."</td> " .
              " <td>" . $row["project_name"]."</td>" .
              " <td>" . $row["Full_name"]."</td>" .
              "<td><button>DELETE</button><button>UPDATE</button></td> <br>"."<tr>");
    }
}

mysqli_close($conn);
?>
</table>


</body>
</html>