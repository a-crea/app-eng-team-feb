<!doctype html>
<html lang="en">
<head>
    <?php
        include (dirname(__FILE__).'/components/head.php');
    ?>
<title>Add Patient</title>
</head>

<body>
    <?php
        $active='patients';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
        <h1>ADD A NEW PATIENT</h1>
        <form action="api/add-patient.php" method="POST">
            <div class="form-group">
                <label for="name">
                    Name:
                </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="birthdate">
                    Birthdate:
                </label>
                <input type="date" name="birthdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">
                    Phone:
                </label>
                <input type="tel" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    Email:
                </label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">
                    Address:
                </label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="ssn">
                    SSN:
                </label>
                <input type="text" name="ssn" class="form-control">
            </div>
            <div class="form-row py-2">
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 mr-md-2">
                    <button type="submit" class="btn btn-success btn-block">ADD</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
</body>
</html>