<?php
if(isset($_GET['action']) and $_GET['action'] == 'delete'){
    if($_GET['path']== 'darbuotojai/'){
    $sql = 'DELETE FROM darbuotojai WHERE id = ?';}

    else { $sql = 'DELETE FROM projektai WHERE project_id = ?';}

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_GET['project_id']);
    $res = $stmt->execute();
    $stmt->close();
    mysqli_close($conn);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    die();
}

?>