<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>Create Invoice</title>
</head> 
<body>
    <?php
        $active='invoices';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
<div class="container mt-4">
  <div class="table-responsive">
    <div class="col-12">
        <h1>CREATE NEW INVOICE</h1>
        <form action="api/add-appointment.php" method="POST">
            <div class="form-group">
                <label for="select-patient">
                    PATIENT:
                </label>
                 <select id="select-patient" name="patient" class="selectpicker form-control" data-live-search="true" required>
                </select>
            </div>
            <div class="form-group">
                <label for="select-treatment">
                    TREATMENT:
                </label>
                <select id="select-treatment" name ="treatment" class="selectpicker form-control" data-live-search="true" required>
                </select>
            </div>
            <div class="form-group">
                <label for="date">
                    DATE:
                </label>
                <input id="date" type="date" name="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">CREATE AND SEND EMAIL TO PATIENT</button>
        </form>
    </div>
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
                    addPatients(JSON.parse(data));
                }
            }).catch(function(err) {
                console.log ('ERRORE ', err);
            })
        fetch('api/get-treatments.php')
            .then(function(response) {
                return response.text();
            }).then(function(data) {
                if(data!='null'){
                    addTreatments(JSON.parse(data));
                }
            }).catch(function(err) {
                console.log ('ERRORE ', err);
            })

        function addPatients(data){
          let option = '';
          let select = '';
          data.forEach(patient => {       
              option = '<option value="'+patient.id+'">';    
              option += patient.name + '</option>';
              select += option;
          });
          document.getElementById("select-patient").innerHTML=select;
          $('.selectpicker').selectpicker('refresh');
        }
        function addTreatments(data){
          let option = '';
          let select = '';
          data.forEach(treatment => {       
              option = '<option value="'+treatment.id+'">';    
              option += treatment.name + '</option>';
              select += option;
          });
          document.getElementById("select-treatment").innerHTML=select;
          $('.selectpicker').selectpicker('refresh');
          $('.selectpicker').selectpicker('refresh');
        }
    </script>
  </body>
</html>
