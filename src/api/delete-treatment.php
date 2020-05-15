<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $id = $_POST["id"];

    $sql="DELETE FROM treatment WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
       echo true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>