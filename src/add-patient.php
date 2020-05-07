<!doctype html>
<html lang="en">
<head>
    <?php
        include (dirname(__FILE__).'/components/head.php');
    ?>
<title>Dentist Application</title>
</head>

<body>
    <?php
        $active='patients';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <h1>ADD A NEW PATIENT</h1>

    <form action="api/add-patient.php" method="POST">
        <table>
            <tr>
            <td><label>NAME and SURNAME:</label></td>
            <td><input type="text" name="name" placeholder="Anita"></td>
            </tr>
            <tr>
            <td><label>DATE OF BIRTH:</label></td>
            <td><input type="date" name="birthdate"></td>
            </tr>
             <tr>
            <td><label>Phone</label></td>
            <td><input type="text" name="phone"></td>
            </tr>
            <tr>
            <td><label>EMAIL:</label></td>
            <td><input type="email" name="email" placeholder="anitarossi@gmail.com"></td>
            </tr>
            <tr>
            <td><label>Address</label></td>
            <td><input type="text" name="address"></td>
            </tr>
            <tr>
            <td><label>SSN</label></td>
            <td><input type="text" name="ssn"></td>
            </tr>
        </table>
        <p>
            <input type="submit" value="ADD">
        </p>
    </form>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
</body>
</html>