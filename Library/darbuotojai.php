<?php

print('<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Last name</td>
<td>Age</td>
<td>Working on</td>
</tr>');

$sql = 'SELECT id, first_name, last_name, age, WorkingOn FROM sprint1.darbuotojai';
$resultDarb = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultDarb) > 0) {
    while($row = mysqli_fetch_assoc($resultDarb)){
        print('<tr><td>' . $row['id'].'</td>' .
               '<td>' . $row['first_name'].'</td>' .
               '<td>' . $row['last_name'].'</td>' .
               '<td>' . $row['age'].'</td> ' .
               '<td>' . $row['WorkingOn'].'</td>' . 
               '<td><form action="" method="POST">
                        <button type="submit" name="delete" value="' . $row["id"]. '">DELETE</button>
                        <button type="submit" name="update" value="' . $row["id"]. '">UPDATE</button>
                    </form>'.'</td></tr>');
    }
}
 else {
    echo "0 results";
}
?>
</table>

    <form action="" method="post">
        <input type="text" name="Fname"  placeholder="First name" required autofocus><br>
        <input type="text" name="Lname"  placeholder="Last name" required autofocus><br>
        <select name="project_name"></select>
        <button class="addWorker" type="submit" name="addWorker" value="addWorker">Add</button>
    </form>
    
