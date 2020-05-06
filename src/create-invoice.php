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
            <table>
                <tr>
                <td><label>PATIENT:</label></td>
                <td><input type="name" name="name" placeholder="Vera Rossi"></td></tr>
                <tr>
                <td><label>TREATMENT:</label></td>
                <td><select id="select-treatments" name ="select-treatments">
                  <option id="teeth-whitening" value="teeth-whitening">Teeth whitening</option>
                  <option id="weekly-control" value="weekly-control">Weekly control</option>
                </select></td></tr>
                <tr>
                <td><label>DATE OF EMISSION:</label></td>
                <td><input type="date" name="date"></td></tr>
            </table>
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
