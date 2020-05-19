<!doctype html>
<html lang="en">
<head>
    <?php
        include (dirname(__FILE__).'/components/head.php');
    ?>
<title>Add Treatment</title>
</head>

<body>
    <?php
        $active='treatments';
        include (dirname(__FILE__).'/components/navbar.php');
    ?>
    <div class="container mt-4">
        <h1>ADD A NEW TREATMENT</h1>
        <form action="api/add-treatment.php" method="POST">
            <div class="form-group">
                <label for="name">
                    Name:
                </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="duration">
                    Duration (MINUTES):
                </label>
                <input id="duration" type="number" name="duration" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">
                    Price:
                </label>
                <input id="price" type="number" min="0" step="0.01" name="price" class="form-control">
            </div>
            <div class="form-row py-2">
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 mr-md-2">
                    <button type="submit" class="btn btn-success btn-block">ADD</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        include (dirname(__FILE__).'/components/footer.php');
    ?>
    <script type="text/javascript">
        $('#price').on('keypress', function(e) {
            let charCode = !e.charCode ? e.which : e.charCode;
            if(charCode == 69 || charCode == 101){
                e.preventDefault();
            }
        });
        $('#duration').on('keypress', function(e) {
            let charCode = !e.charCode ? e.which : e.charCode;
            if(charCode == 69 || charCode == 101){
                e.preventDefault();
            }
        });
        $('#price').on('keyup', function() {
                let valid = /^\d{0,10}(\.\d{0,2})?$/.test( this.value.replace('.', '') ),
                    val = this.value.replace('.', '');
                if( !valid ) {
                    // invalid input, erase character
                    this.value = val.substring(0, val.length-1);
                } else if( val.length > 2 ) {
                    // valid input, set decimal point if string is longer than 3 characters
                    this.value = val.substring(0,val.length-2)+"."+val.substring(val.length-2);
                }
            
        });
    </script>
</body>
</html>