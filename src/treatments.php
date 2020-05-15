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
    <div id="confirmModal" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Do you really want to remove this treatment?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="deleteTreatment()">Confirm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
          </div>
        </div>
      </div>
    </div>
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
      var idToRemove=null;
      document.addEventListener('DOMContentLoaded', (event) => {
          getData();
        });
        function getData(){
          fetch('api/get-treatments.php')
            .then(function(response) {
                return response.text();
            }).then(function(data) {
                if(data!='null'){
                  updateTable(JSON.parse(data));
                } else {
                  alert("Something went wrong. Please try again.");
                }
            }).catch(function(err) {
                console.log ('ERRORE ', err);
            })
        }

        function updateTable(data){
          let row = '';
          let table = '';
          data.forEach(treatment => {            
              row = '<tr>\
              <th scope="row">'+ treatment.id +'</th>\
              <td>'+ treatment.name +'</td>\
              <td>'+ treatment.duration +'</td>\
              <td>'+ treatment.price.replace('.',',') +'</td>\
              <td><a href="api/get-treatment.php?idTreatment='+treatment.id+'">Edit</a> | <a href="#" onclick="openModal('+treatment.id+')">Delete</a></td>\
              </tr>';
              table += row;
          });
          document.getElementById("table-treatments-body").innerHTML=table;
        }
        function openModal(id){
          idToRemove = id;
          $('#confirmModal').modal('toggle')
        }
        function deleteTreatment(){
          $('#confirmModal').modal('toggle')
          $.post("api/delete-treatment.php", {id: idToRemove}, function(result){
            if(result==1){
              getData();
            } else {
              alert("Something went wrong. Please try again.");
            }
          });
        }
    </script>
  </body>
</html>
