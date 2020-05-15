<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/app-eng-team-feb/src/db/connect.php';

    $sql="SELECT * FROM treatment";
    $result = $conn->query($sql);
    $toJSON = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $duration = $row["duration"];
        $price = $row["price"];
        $pushThis = ["id"=>$id,"name"=>$name,"duration"=>$duration,"price"=>$price];
        $toJSON [] = $pushThis;
        }
    } else {
        $toJSON = null;
    }
    echo json_encode($toJSON);
    $conn->close();
?>