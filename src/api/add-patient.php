<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $name = $_POST["name"];
    $birthdate = $_POST["birthdate"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $ssn = $_POST["ssn"];

    $sql="INSERT INTO patient(name,birthdate,phone,email,address,ssn) VALUES('$name','$birthdate','$phone','$email','$address','$ssn')";
    if ($conn->query($sql) === TRUE) {
       header("Location: ../patients.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>