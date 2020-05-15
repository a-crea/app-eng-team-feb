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
                <h1>APPOINTMENTS LIST <a class="btn btn-success" href="add-appointment.php">ADD</a></h1>
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
                <tbody id="table-appointments-body">
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
            console.log("message")
            fetch('api/get-appointments.php')
                .then(function(response) {
                    return response.text();
                }).then(function(data) {
                    if(data!='null'){
                    updateTable(JSON.parse(data));
                    } else {
                        document.getElementById("table-appointments-body").innerHTML = "";
                    }
                }).catch(function(err) {
                    console.log ('ERRORE ', err);
                })
        }

        function updateTable(data){
          let row = '';
          let table = '';
          data.forEach(appointment => {            
              row = '<tr>\
              <th scope="row">'+ appointment.date +'</th>\
              <td>'+ appointment.time +'</td>\
              <td>'+ appointment.patientName +'</td>\
              <td>'+ appointment.treatmentName +'</td>\
              <td>'+ appointment.duration +'</td>\
              <td><a href="api/get-appointment.php?idAppointment='+appointment.id+'">Edit</a> | <a href="#" onclick="openModal('+appointment.id+')">Delete</a></td>\
              </tr>';
              table += row;
          });
          document.getElementById("table-appointments-body").innerHTML=table;
        }

        function openModal(id){
          idToRemove = id;
          $('#confirmModal').modal('toggle')
        }

        function deleteTreatment(){
          $('#confirmModal').modal('toggle')
          $.post("api/delete-appointment.php", {id: idToRemove}, function(result){
              getData();
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