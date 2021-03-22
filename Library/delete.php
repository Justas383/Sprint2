<?php
if(isset($_POST['delete'])){
    if($_GET['path']== 'darbuotojai/'){
    $sql = 'DELETE FROM darbuotojai WHERE id = ?';}
    else { 
    $sql = 'DELETE FROM projektai WHERE project_id = ?';}
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_POST['delete']);
    $res = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    die();
}
?>