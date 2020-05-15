<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';

    $sql="SELECT appointment.id AS id, date, time_slot, patient.name AS patientName, treatment.name AS treatmentName, treatment.duration AS duration FROM appointment JOIN patient ON patient.id = appointment.id_patient JOIN treatment ON treatment.id = appointment.id_treatment";
    $result = $conn->query($sql);
    $toJSON = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $date = $row["date"];
            $time = $row["time_slot"];
            $patientName = $row["patientName"];
            $treatmentName = $row["treatmentName"];
            $duration = $row["duration"];
            $pushThis = ["id"=>$id,"date"=>$date,"time"=>$time,"patientName"=>$patientName,"treatmentName"=>$treatmentName,"duration"=>$duration];
            $toJSON [] = $pushThis;
        }
    } else {
        $toJSON = null;
    }
    echo json_encode($toJSON);
    $conn->close();
?>