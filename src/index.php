<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function addAppointment() {
            window.location= "http:///app-eng-team-feb/src/add-appointment.php";
        }
    </script>
    <?php
        include (dirname(__FILE__).'/components/head.php');
    ?>
    <title>Appointments</title>
</head>

<body>
    <?php
        $active='appointments';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
        <div class="table-responsive">
            <div class="col-12">
                <h1>APPOINTMENTS LIST <button class="btn btn-success" onclick="addAppointment()">ADD</button></h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Treatment</th>
                        <th scope="col">Duration (min)</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">18/05/2020</th>
                        <td>10:00</td>
                        <td>Mark Otto</td>
                        <td>Tooth extraction</td>
                        <td>90</td>
                        <td><a href="appointment-view.php">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
</body>

</html>