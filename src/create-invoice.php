<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include (dirname(__FILE__).'/components/head.php');
  ?>
  <title>TITLE</title>
</head> 
<body>
    <?php
        $active='patients|appointmens|index';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
<div class="container mt-4">
  <div class="table-responsive">
    <div class="col-12">
        <h1>CREATE INVOICE</h1>
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
                    DATE OF EMISSION:
                </label>
                <input type="date" name="date" class="form-control">
            </div>
           
            <button type="button" class="btn btn-success">PREVIEW</button>
        </form>
    </div>
  </div>
</div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
  </body>
</html>
