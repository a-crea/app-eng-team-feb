<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $idAppointment = $_GET['idAppointment'];
    // $sql="SELECT date, time_slot, patient.name AS patientName, treatment.name AS treatmentName, treatment.duration AS duration FROM appointment JOIN patient ON patient.id = appointment.id JOIN treatment ON treatment.id = appointment.id WHERE appointment.id=$idAppointment";
    $sql = "SELECT * FROM appointment WHERE id=$idAppointment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $selectPatient = $row["id_patient"];
            $selectTreatment = $row["id_patient"];
            $timeSlot = $row["time_slot"];
            $date = $row["date"];
        }
    }
    header("Location: ../edit-appointment.php?idAppointment=".$idAppointment."&selectPatient=".$selectPatient."&selectTreatment=".$selectTreatment."&timeSlot=".$timeSlot."&date=".$date); 
    $conn->close();
?>