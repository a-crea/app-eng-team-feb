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

    <form action="/php/add-patient.php" method="POST">
        <table>
            <tr>
            <td><label>NAME:</label></td>
            <td><input type="name" name="name" placeholder="Anita"></td>
            <td><label>SURNAME:</label></td>
            <td><input type="surname" name="surname" placeholder="Rossi"></td>
            </tr>
            <tr>
            <td><label>DATE OF BIRTH:</label></td>
            <td><input type="date" name="birthDate"></td>
            <td><label>Gender:</label></td>
            <td><label for="male">Male</label> <input type="radio" name="gender" id="male" value="male">
            <label for="female">Female</label> <input type="radio" name="gender" id="female" value="female">
            <label for="other">Other</label> <input type="radio" name="gender" id="other" value="other" checked>
            </td>
            </tr>
            <td><label>EMAIL:</label></td>
            <td><input type="email" name="email" placeholder="anitarossi@gmail.com"></td>
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