<?php
if(isset($_POST['addWorker'])){
    if($_GET['path']== 'darbuotojai/'){
    $sql = 'INSERT INTO darbuotojai (first_name, last_name) VALUES (?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST['Fname'], $_POST['Lname']);
    $res = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    die();}
}
?>