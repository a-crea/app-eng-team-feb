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
       echo 'APPOSTO';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    echo "<br>";
    print_r($name);
    echo "<br>";
    print_r($birthdate);
    echo "<br>";
    print_r($phone);
    echo "<br>";
    print_r($email);
    echo "<br>";
    print_r($address);
    echo "<br>";
    print_r($ssn);
    echo "<br>";

    //TO INSERT IN DB
?>