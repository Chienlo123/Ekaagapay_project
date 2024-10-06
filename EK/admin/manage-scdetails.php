<?php session_start();
error_reporting(0);
include_once('includes/config.php');

if(strlen($_SESSION['aid'])==0)
  { 
header('location:login.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
   <title>E-Kaagapay || Member</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <script type= "text/javascript" src="manage-scdetails.js"></script>
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('includes/header.php');?>
    <!-- partial -->
    
   &nbsp;
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Manage Senior Citizen Details</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Manage Senior Citizen Details</p>
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
            <div class="col-md-12">
              <div class="card">
                <h4 class="card-title" style="padding-left: 20px; padding-top: 20px;">Manage Senior Citizen Details</h4>
                  <p class="card-description" style="padding-left: 20px;"> 
                    Manage Senior Citizen Details in E-Kaagapay!
                  </p>
                <div class="table-responsive pt-3">
                  
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">#</th>
                        <th>QR Code</th>
                        <th>Registration Number</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Gender</th> 
                        <th>Pension</th>
                        <th>Date of Birth</th>
                        <th>Added By</th>
                        <th>Registration Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                         $query=mysqli_query($con,"SELECT * FROM tblseniorcitizen");
                          $cnt=1;
                          while($row=mysqli_fetch_array($query))
                         {
                        ?>
                      <tr>

                        <td><?php echo htmlentities($cnt);?></td>
                        <td><a href="<?php echo ($row['qrcode']);?>" download>
                        <img src="<?php echo ($row['qrcode']);?>" alt="QR Code" style="width: 50px; height:50px;"/></a></td>
                        <td><?php echo htmlentities($row['RegistrationNumber']);?> </td>
                        <td><?php echo htmlentities($row['Name']);?> </td>
                        <td><?php echo htmlentities($row['ContactNumber']);?> </td>
                        <td><?php echo htmlentities($row['gender']);?> </td>
                        <td><?php echo htmlentities($row['pension']);?> </td>
                        <td><?php echo htmlentities($row['DateofBirth']);?> </td>
                        <td><?php echo htmlentities($row['AddedBy']);?> </td>
                        <td><?php echo htmlentities($row['RegitrationDate']);?></td>
                      
                        
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="edit-scdetails.php?id=<?php echo $row['ID']?>" class="btn btn-success btn-sm btn-icon-text mr-3">Edit <i class="typcn typcn-edit btn-icon-append"></i> </a> 
                                            
                                            
                                             <a href="Transfer.php?ID=<?php echo $row['ID']?>&del=delete" onClick="return confirm('Are you sure you want to Archive?')" class="btn btn-danger btn-sm btn-icon-text">Archive <i class="typcn typcn-delete-outline btn-icon-append"></i></a>


                          </div>
                        </td>
                      </tr><?php $cnt=$cnt+1; 
                      
                      
                      if(isset($_GET['del'])){
                        $scid=$_GET['id'];
                        mysqli_query($con,"SELECT qrcode FROM tblseniorcitizen WHERE ID ='$scid'");
                        $deleteqr=$row['qrcode'];
                        mysqli_query($con,"DELETE FROM tblseniorcitizen WHERE ID ='$scid'");
                        unlink($deleteqr);
                        echo "<script>alert('Data Deleted');</script>";
                        echo "<script>window.location.href='manage-scdetails.php'</script>";


                        
                                  }
                                  
                                }
                                  ?>
                    
                    </tbody>
                  </table>


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