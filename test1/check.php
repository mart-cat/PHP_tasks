<?php 

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $doneValue = isset($_POST['done']) ? 1 : 0;

        $sqlUpdate = "UPDATE num SET DONE = ? WHERE id = ?";
        $stmt = $con->prepare($sqlUpdate);
        $stmt->bind_param("ii", $doneValue, $id);
        
        if (!$stmt->execute()) {
            echo "Error updating record: " . $con->error;
        }
        
        $stmt->close();
        
    }

    $sql = "SELECT * FROM num";
    
    $result = $con->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    $con->close();
    
include 'admin.php';
    
?>