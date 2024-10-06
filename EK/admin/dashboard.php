<?php session_start();
// Database Connection
include('includes/config.php');
//Validating Session
if(strlen($_SESSION['aid'])==0)
  { 
header('location:login.php');
}
else{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>E-Kaagapay || Dashboard</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- endinject -->
  
  
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('includes/header.php');?>
    <!-- partial -->
&nbsp;
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" align="right">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dashboard</p>
            </div>
          </li>
        </ul>
       
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
  
      <!-- partial:partials/_sidebar.html -->
     <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <?php $query2=mysqli_query($con,"select ID from tblseniorcitizen where gender='female'");
                              $totsccount1=mysqli_num_rows($query2);
?>
                       <a href="female.php"><h5 class="mb-0" style="color: blue;">Female</h5></a>
                      <h1 class="mb-0"><?php echo $totsccount1;?></h1>
                    </div>
                <i class='fas fa-female' style='font-size:36px'></i>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                       <?php $query2=mysqli_query($con,"select ID from tblseniorcitizen where gender='male'");
$totsccount2=mysqli_num_rows($query2);
    

?>
                     <a href="male.php"><h5 class="mb-0" style="color: blue;">Male</h5></a>
                      <h1 class="mb-0"><?php echo $totsccount2;?></h1>
                    </div>
                    <i class='fas fa-male' style='font-size:36px'></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                       <?php $query2=mysqli_query($con,"select ID from tblseniorcitizen where status ='active' ");
$totsccount3=mysqli_num_rows($query2);
?>
                      <a href="active.php"><h5 class="mb-0" style="color: blue;">With Pension</h5></a>
                      <h1 class="mb-0"><?php echo $totsccount3;?></h1>
                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                  </div>
                  </i>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <?php $query4=mysqli_query($con,"select ID from tblseniorcitizen where status ='inactive' ");
$totreadenq=mysqli_num_rows($query4);
?>
                      <a href="inactive.php"><h5 class="mb-0" style="color: blue;">Without Pension</h5></a>
                      <h1 class="mb-0"><?php echo $totreadenq;?></h1>
                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                  </div>
                   </i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('includes/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php } ?>
