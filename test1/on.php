<?php 
include 'db.php';

$sql = "SELECT * FROM num";
$result = $con->query($sql);

    if ($con -> connect_error ) {
        die ("Error connecting to" . $con -> connect_error );
    }

    $name = $_POST['name'];
    $tel = $_POST['tel'];

    $stmt = $con->prepare("INSERT INTO num (NAME, TEL) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $tel);

    if ($stmt->execute()) {
        echo "Успех";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
?>