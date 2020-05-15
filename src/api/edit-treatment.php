<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    print_r($_POST);
    $id = $_POST["id"];
    $name = $_POST["name"];
    $duration = $_POST["duration"];
    $price = $_POST["price"];

    $sql="UPDATE treatment SET name = '$name', duration = '$duration', price = '$price' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../treatments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>