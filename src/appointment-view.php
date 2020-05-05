<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="container mt-4">
        <form action="">
            <div class="form-group">
                <label for="date">
                    Date:
                </label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="time">
                    Time:
                </label>
                <input type="text" name="time" class="form-control">
            </div>
            <div class="form-group">
                <label for="patient">
                    Patient:
                </label>
                <select name="patient" class="selectpicker form-control" data-live-search="true">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                </select>
            </div>
            <div class="form-group">
                <label for="treatment">
                    Treatment:
                </label>
                <select name="treatment" class="selectpicker form-control" data-live-search="true">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                </select>
            </div>
            <div class="form-row py-2">
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 mr-md-2">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 ml-md-2">
                    <button type="reset" class="btn btn-danger btn-block">Delete</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
</body>

</html>