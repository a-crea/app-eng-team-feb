<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $idTreatment = $_GET['idTreatment'];
    $sql="SELECT * FROM treatment WHERE id=$idTreatment";
    $result = $conn->query($sql);
    $toJSON = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $duration = $row["duration"];
            $price = $row["price"];
        }
    }
    header("Location: ../edit-treatment.php?id=".$id."&name=".$name."&duration=".$duration."&price=".$price); 
    $conn->close();
?>