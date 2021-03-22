<?php
if(isset($_POST['addProject'])){
    if($_GET['path']== 'projektai/'){
    $sql = 'INSERT INTO projektai (project_name) VALUES (?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_POST['project_name']);
    $res = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    die();}
}
?>