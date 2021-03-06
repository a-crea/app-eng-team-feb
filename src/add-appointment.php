<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>Add Appointment</title>
</head> 
<body>
    <?php
        $active='appointments';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
<div class="container mt-4">
  <div class="table-responsive">
    <div class="col-12">
        <h1>ADD A NEW APPOINTMENT</h1>
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
            <div class="form-group">
                <label for="time-slot">
                    TIME SLOT:
                </label>
                <select id="time-slot" name="timeSlot" class="selectpicker form-control" data-live-search="true" required>
                  <option value="8-9">8:00 - 9:00</option>
                  <option value="9-10">9:00 - 10:00</option>
                  <option value="10-11">10:00 - 11:00</option>
                  <option value="11-12">11:00 - 12:00</option>
                  <option value="14-15">14:00 - 15:00</option>
                  <option value="15-16">15:00 - 16:00</option>
                  <option value="16-17">16:00 - 17:00</option>
                  <option value="17-18">17:00 - 18:00</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-success">ADD</button>
        </form>
    </div>
  </div>
</div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
    <script type="text/javascript">
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10){
                dd='0'+dd
            } 
            if(mm<10){
                mm='0'+mm
            } 
        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("date").setAttribute("min", today);
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
