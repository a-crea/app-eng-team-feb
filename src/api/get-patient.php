<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';
    $idPatient = $_GET['idPatient'];
    $sql="SELECT * FROM patient WHERE id=$idPatient";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $birthdate = $row["birthdate"];
            $phone = $row["phone"];
            $email = $row["email"];
            $address = $row["address"];
            $ssn = $row["ssn"];
        }
    }
    header("Location: ../edit-patient.php?id=".$id."&name=".$name."&birthdate=".$birthdate."&phone=".$phone."&email=".$email."&address=".$address."&ssn=".$ssn); 
    $conn->close();
?>