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
  <script type= "text/javascript" src="archive.js"></script>
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
            <h4 class="mb-0">Archive Member</h4>
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
                <h4 class="card-title" style="padding-left: 20px; padding-top: 20px;">Archived Member</h4>
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
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
            require'config.php';
            $query=mysqli_query($con, "SELECT * FROM `tblarchive`") or die(mysqli_error());
            while($fetch=mysqli_fetch_array($query)){
          ?>

                      <tr>

                        <td><?php echo htmlentities($cnt);?></td>
                        <td><a href="<?php echo ($fetch['qrcode']);?>" download>
                        <img src="<?php echo ($fetch['qrcode']);?>" alt="QR Code" style="width: 50px; height:50px;"/></a></td>
                        <td><?php echo htmlentities($fetch['RegistrationNumber']);?> </td>
                        <td><?php echo htmlentities($fetch['Name']);?> </td>
                        <td><?php echo htmlentities($fetch['ContactNumber']);?> </td>
                        <td><?php echo htmlentities($fetch['gender']);?> </td>
                        <td><?php echo htmlentities($fetch['pension']);?> </td>
                        <td><?php echo htmlentities($fetch['DateofBirth']);?> </td>
                        <td><?php echo htmlentities($fetch['AddedBy']);?> </td>
                        <td><?php echo htmlentities($fetch['RegitrationDate']);?></td>

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

                  $scid=$_GET['id'];
                  $sql="SELECT qrcode FROM tblarchive WHERE ID = '$scid'";
                  $result=mysql_queryy($sql);
                  $row=mysql_fetch_array($result);

                  //Call the function to archive the table
                  //Function definition is given below
                  archive_record(tblarchive,$row);

                  //Once you archive, delete the record from original table

                  $sql = "DELETE FROM tblseniorcitizen WHERE ID = '$scid'";
                  mysql_query($sql);


                  function archive_record($tblarchive,$row)
                  {
                   $sql = "INSERT INTO $tblarchive VALUES(";
                   $i=0;
                   while($i<(count($row)-1))
                   {
                   $sql.="'".$row[$i]."',";
                   }
                   $i=$i+1;
  
                    $sql.="'".$row[$i]."'";
                   $sql.=")";

                     mysql_query($sql);
                     return true;
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
