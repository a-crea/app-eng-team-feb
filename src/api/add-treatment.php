<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $name = $_POST["name"];
    $duration = $_POST["duration"];
    $phone = $_POST["phone"];
    $price = $_POST["price"];

    $sql="INSERT INTO treatment(name,duration,price) VALUES('$name','$duration','$price')";
    if ($conn->query($sql) === TRUE) {
       header("Location: ../treatments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>