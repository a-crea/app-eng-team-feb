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
        $active='patients|appointmens|index';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
<div class="container mt-4">
  <div class="table-responsive">
    <div class="col-12">
        <h1>ADD A NEW APPOINTMENT</h1>
        <form>
        <div class="form-group">
                <label for="patient">
                    PATIENT:
                </label>
                <input type="text" name="patient" class="form-control" placeholder="Vera Rossi">
            </div>
            <div class="form-group">
                <label for="treatment">
                    TREATMENT:
                </label>
                <select id="select-treatments" name ="select-treatments" class="form-control">
                  <option id="teeth-whitening" value="teeth-whitening">Teeth whitening</option>
                  <option id="weekly-control" value="weekly-control">Weekly control</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">
                    DATE:
                </label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="time-slot">
                    TIME SLOT:
                </label>
                <select id="time-slot" name="time-slot" class="form-control">
                  <option value="8">8:00 - 9:00</option>
                  <option value="9">9:00 - 10:00</option>
                  <option value="10">10:00 - 11:00</option>
                  <option value="11">11:00 - 12:00</option>
                  <option value="14">14:00 - 15:00</option>
                  <option value="15">15:00 - 16:00</option>
                  <option value="16">16:00 - 17:00</option>
                  <option value="17">17:00 - 18:00</option>
                  </select>
            </div>
            <button type="button" class="btn btn-success">ADD</button>
        </form>
    </div>
  </div>
</div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
  </body>
</html>
