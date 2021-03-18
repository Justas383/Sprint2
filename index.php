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
<td>Id</td>
<td>Name</td>
<td>Last name</td>
<td>age</td>
<td>Working on</td>
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

$sql = 'SELECT id, first_name, last_name, age, WorkingOn FROM sprint1.darbuotojai';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        print("<tr><td> " . $row["id"]."</td> " .
              " <td>" . $row["first_name"]."</td> " .
               "<td>" . $row["last_name"]."</td> " .
               "<td>" . $row["age"]."</td> " .
               "<td>" . $row["WorkingOn"]."</td>" . 
               "<td><button>DELETE</button><button>UPDATE</button></td> <br>". "<tr>");
    }
}
 else {
    echo "0 results";
    
}
?>
</table>


</body>
</html>