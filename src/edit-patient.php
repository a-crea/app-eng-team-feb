<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include (dirname(__FILE__).'/components/head.php');
    ?>
    <title>Patient</title>
</head>
<body>
    <?php
        $active='patients';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
        <form action="api/edit-patient.php" method="POST">
                <input id="id-patient" type="hidden" name="id" class="form-control">
            <div class="form-group">
                <label for="name">
                    Name:
                </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="birthdate">
                    Birthdate:
                </label>
                <input type="date" name="birthdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">
                    Phone:
                </label>
                <input type="tel" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">
                    Email:
                </label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">
                    Address:
                </label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="ssn">
                    SSN:
                </label>
                <input type="text" name="ssn" class="form-control">
            </div>
            <div class="form-row py-2">
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 mr-md-2">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
    <script type="text/javascript">
        (function() {
            let url = window.location.href;
            let params = url.slice(url.lastIndexOf('?'),url.length);
            let searchParams = new URLSearchParams(params);
            searchParams.forEach(function(value, key) {
                $("input[name='"+key+"']").val(value);
            });
        })();
    </script>

</body>
</html>