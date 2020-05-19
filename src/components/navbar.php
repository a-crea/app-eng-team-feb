<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Dentist Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" id="appointments-link">
                <a class="nav-link <?php if($active=='appointments'){echo 'active';}?>" href="index.php">Appointments</a>
            </li>
            <li class="nav-item" id="patients-link">
                <a class="nav-link <?php if($active=='patients'){echo 'active';}?>" href="patients.php">Patients</a>
            </li>
            <li class="nav-item" id="treatments-link">
                <a class="nav-link <?php if($active=='treatments'){echo 'active';}?>" href="treatments.php">Treatments</a>
            </li>
            <li class="nav-item" id="treatments-link">
                <a class="nav-link <?php if($active=='invoices'){echo 'active';}?>" href="invoices.php">Invoices</a>
            </li>
        </ul>
    </div>
</nav>