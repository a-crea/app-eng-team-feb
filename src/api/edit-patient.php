<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    print_r($_POST);
    $id = $_POST["id"];
    $name = $_POST["name"];
    $birthdate = $_POST["birthdate"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $ssn = $_POST["ssn"];

    $sql="UPDATE patient SET name = '$name', birthdate = '$birthdate', phone = '$phone', email = '$email', address = '$address', ssn = '$ssn' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../patients.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>