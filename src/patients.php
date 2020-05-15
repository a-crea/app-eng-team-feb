<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>Patients</title>
</head> 
<body>
    <?php
        $active='patients';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
      <div class="table-responsive">
        <div class="col-12">
        <h1>PATIENT LIST <a href="add-patient.php" class="btn btn-success">ADD</a></h1>
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
            <tbody id="table-patients-body">
              <tr>
                <th scope="row">AV123456</th>
                <td>Mark Otto</td>
                <td>30/02/1990</td>
                <td>3472149200</td>
                <td>markotto@unibz.it</td>
                <td>Piazza Walter 1, BZ</td>
                <td>654321</td>
                <td><a href="edit-patient.php">Edit</a> | <a href="#">Delete</a></td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
    <script type="text/javascript">
      fetch('api/get-patients.php')
        .then(function(response) {
            return response.text();
        }).then(function(data) {
            if(data!='null'){
              updateTable(JSON.parse(data));
            }
        }).catch(function(err) {
            console.log ('ERRORE ', err);
        })

        function updateTable(data){
          let row = '';
          let table = '';
          data.forEach(patient => {            
              row = '<tr>\
              <th scope="row">'+ patient.id +'</th>\
              <td>'+ patient.name +'</td>\
              <td>'+ patient.birthdate +'</td>\
              <td>'+ patient.phone +'</td>\
              <td>'+ patient.email +'</td>\
              <td>'+ patient.address +'</td>\
              <td>'+ patient.ssn +'</td>\
              <td><a href="api/get-patient.php?idPatient='+patient.id+'">Edit</a></td>\
              </tr>';
              table += row;
          });
          document.getElementById("table-patients-body").innerHTML=table;
        }
    </script>
  </body>
</html>
