<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>Patient</title>
</head> 
<body>
    <?php
        $active='patients';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
      <div class="table-responsive">
        <div class="col-12">
        <h1>PATIENT LIST <button class="btn btn-success" type="submit">ADD</button></h1>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Patient ID</th>
                <th scope="col">Name</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">SSN</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">AV123456</th>
                <td>Mark Otto</td>
                <td>30/02/1990</td>
                <td>3472149200</td>
                <td>markotto@unibz.it</td>
                <td>Piazza Walter 1, BZ</td>
                <td>654321</td>
                <td><a href="patient-view.php">Edit</a> | <a href="#">Delete</a></td>
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
