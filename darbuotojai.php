<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Last name</td>
<td>age</td>
<td>Working on</td>
</tr>


<?php
$sql = 'SELECT id, first_name, last_name, age, WorkingOn FROM sprint1.darbuotojai';
$resultDarb = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultDarb) > 0) {
    while($row = mysqli_fetch_assoc($resultDarb)){
        print('<tr><td>' . $row['id'].'</td>' .
               '<td>' . $row['first_name'].'</td>' .
               '<td>' . $row['last_name'].'</td>' .
               '<td>' . $row['age'].'</td> ' .
               '<td>' . $row['WorkingOn'].'</td>' . 
               '<td><a href="?action=delete&id='  . $row['id'] . '"><button>DELETE</button></a>'. '<tr>');
    }
}
 else {
    echo "0 results";
    
}
?>
</table>