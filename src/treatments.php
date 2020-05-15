<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>Treatments</title>
</head> 
<body>
        <?php
        $active='treatments';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
      <div class="table-responsive">
        <div class="col-12">
        <h1>TREATMENTS LIST <a href="add-treatment.php" class="btn btn-success">ADD</a></h1>
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
            <tbody id="table-treatments-body">
            </tbody>
        </table>
      </div>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
    <script type="text/javascript">
      fetch('api/get-treatments.php')
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
          data.forEach(treatment => {            
              row = '<tr>\
              <th scope="row">'+ treatment.id +'</th>\
              <td>'+ treatment.name +'</td>\
              <td>'+ treatment.duration +'</td>\
              <td>'+ treatment.price.replace('.',',') +'</td>\
              <td><a href="api/get-treatment.php?idTreatment='+treatment.id+'">Edit</a> | <a href="#">Delete</a></td>\
              </tr>';
              table += row;
          });
          document.getElementById("table-treatments-body").innerHTML=table;
        }
    </script>
  </body>
</html>
