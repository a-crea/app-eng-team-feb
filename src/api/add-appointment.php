<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $idPatient = $_POST["patient"];
    $idTreatment = $_POST["treatment"];
    $date = $_POST["date"];
    $timeSlot = $_POST["timeSlot"];

    $sql="INSERT INTO appointment(id_patient,id_treatment,time_slot,date) VALUES('$idPatient','$idTreatment','$timeSlot','$date')";
    if ($conn->query($sql) === TRUE) {
       header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>