<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $idAppointment = $_POST["idAppointment"];
    $idPatient = $_POST["patient"];
    $idTreatment = $_POST["treatment"];
    $date = $_POST["date"];
    $timeSlot = $_POST["time-slot"];

    $sql="UPDATE appointment SET id_patient = $idPatient, id_treatment = $idTreatment, time_slot = '$timeSlot', date = '$date' WHERE id=$idAppointment";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>