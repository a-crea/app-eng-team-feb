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
        $active='treatments';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
      <div class="table-responsive">
        <div class="col-12">
        <h1>TREATMENTS LIST <button class="btn btn-success" type="submit">ADD</button></h1>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Treatment ID</th>
                <th scope="col">Name</th>
                <th scope="col">Duration</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">TR12345</th>
                <td>Teeth Bleaching</td>
                <td>30min</td>
                <td>100€</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
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
