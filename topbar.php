<style>
    /* Add your custom styles here if needed */
    body {
        margin: 0; /* Remove default margin */
    }

    .navbar-custom {
        background-color: black; /* Set background color to black */
        color: white; /* Set text color to white */
    }

   
</style>

<nav class="navbar navbar-light fixed-top bg-custom" style="padding: 0; min-height: 3.5rem">
  <div class="container-fluid mt-2 mb-2 container-custom">
    <div class="col-lg-12">
      <div class="col-md-1 float-left" style="display: flex;">
        
      </div>
      
      <div class="col-md-4 float-left text-white">
        <large><b>Payroll Management System</b></large>
      </div>
      <div class="col-md-2 float-right text-white">
        <a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
      </div>
    </div>
  </div>
</nav>



