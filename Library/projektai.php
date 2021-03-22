<?php

print('<table>
<tr>
<td>Project id</td>
<td>Project name</td>
<td>Full_name</td>
</tr>');


$sql = 'SELECT project_id, project_name, GROUP_CONCAT(CONCAT(first_name, " " ,last_name) SEPARATOR ", ") 
as Full_name 
FROM sprint1.projektai
left join darbuotojai
on projektai.project_name = darbuotojai.WorkingOn
group by project_name, project_id;';

$resultproj = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultproj) > 0) {
    $counter=0;
    while($row = mysqli_fetch_assoc($resultproj)) {
        print('<tr>'.
              '<td> ' . ++$counter . '</td>' .
              ' <td>' . $row['project_name'] . '</td>' .
              ' <td>' . $row['Full_name'].'</td>' .
              '<td><form action="" method="POST"><button type="submit" name="delete" value="' . $row["project_id"]. '">DELETE</button></form>' .
              '</td></tr>');
    }
}
else {
    echo "0 results";
}
?>

</table>
<form action="" method="post">
        <input  type="text" name="project_name" placeholder="Project name" required autofocus><br>
        <button type="submit" name="addProject">Add</button>
    </form>


