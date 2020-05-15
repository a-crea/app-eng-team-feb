<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';

    $sql="SELECT * FROM patient";
    $result = $conn->query($sql);
    $toJSON = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $birthdate = $row["birthdate"];
        $phone = $row["phone"];
        $email = $row["email"];
        $address = $row["address"];
        $ssn = $row["ssn"];
        $pushThis = ["id"=>$id,"name"=>$name,"birthdate"=>$birthdate,"phone"=>$phone,"email"=>$email,"address"=>$address,"ssn"=>$ssn];
        $toJSON [] = $pushThis;
        }
    } else {
        $toJSON = false;
    }
    echo json_encode($toJSON);
    $conn->close();

    //TO INSERT IN DB
?>