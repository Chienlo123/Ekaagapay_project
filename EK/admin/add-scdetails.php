<?php session_start();
//error_reporting(0);
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:login.php');
  } else{
if(isset($_POST['submit']))
{
$namesc=$_POST['namesc'];
$dob=$_POST['dob'];
$amount=$_POST['amount'];
$contnum=$_POST['contnum'];
$commadd=$_POST['commadd'];
$emerperson=$_POST['emerperson'];
$emeradd=$_POST['emeradd'];
$emercontnum=$_POST['emercontnum'];
$gender=$_POST['gender'];
$pension=$_POST['pension'];
$addedby='admin';
$regnum=mt_rand(100000000, 999999999);

  // Include the qrlib file
  include 'phpqrcode/qrlib.php';
  $text = $namesc. " " .$gender. " ".$dob;
    
  // $path variable store the location where to 
  // store image and $file creates directory name
  // of the QR code file by using 'uniqid'
  // uniqid creates unique id based on microtime
  $path = 'qrcodes/';
  $file = $namesc. " " .$gender. " ".$dob;
    
  // $ecc stores error correction capability('L')
  $ecc = 'L';
  $pixel_Size = 10;
  $frame_Size = 10;
    
  // Generates QR Code and Stores it in directory given
  QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);


  

$sql=mysqli_query($con,"insert into tblseniorcitizen(qrcode,pension,RegistrationNumber,Name,DateofBirth,ContactNumber,gender,status,CommunicationAddress,EmergencyPerson,EmergencyAddress,EmergencyContactnumber,AddedBy) values('$file','$amount','$regnum','$namesc','$dob','$contnum','$gender','$pension','$commadd','$emerperson','$emeradd','$emercontnum','$addedby')");
echo "<script>alert('Detail of senior citizen has been added successfully');</script>";
echo "<script>window.location.href='add-scdetails.php'</script>";

}
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>E-Kaagapay|| Member</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <?php include_once('includes/header.php');?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
    <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Senior Citizen</h4>
                  <p class="card-description">
                    Add Senior Citizen Detail!
                  </p>
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                       <label for="exampleInputUsername1">Name of Senior Citizen</label>
                      <input id="namesc" name="namesc" type="text" class="form-control" required="true" value="">
                    </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Date of Birth</label>
                     <input id="dob" name="dob" type="date" class="form-control" required="true" max="1970-01-01">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                     <input id="contnum" name="contnum" type="text" pattern="[0-9]+" maxlength="10" class="form-control" required="true" value="">
                    </div>

                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Gender</label><br>
                      <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">&nbsp;Female
                      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
                      value="male">&nbsp;Male
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pension</label><br> 
                      <input type="radio" name="pension"<?php if (isset($pension) && $pension=="Active") echo "checked";?> value="active">&nbsp;With Pension
                      <input type="radio" name="pension"<?php if (isset($pension) && $pension=="Inactive") echo "checked";?> value="Inactive">&nbsp;Without Pension
                      
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pension Amount</label>
                     <input id="contnum" name="amount" type="text"  class="form-control" required="true" value="">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Complete Address</label>
                     <input type="text" class="form-control" id="commadd" name="commadd" rows="5">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Emergency Person</label>
                    
                     <input type="text" class="form-control" id="emerperson" name="emerperson" rows="5">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Emergency Person Contact Number</label>
                     <input id="emercontnum" name="emercontnum" pattern="[0-9]+" maxlength="10" type="text" class="form-control" required="true" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Emergency Address</label>
                     <input type="text" class="form-control" id="emeradd" name="emeradd" rows="5"></textarea>
                     
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
     
          </div>
        </div>
        <!-- content-wrapper ends -->
       <?php include_once('includes/footer.php');?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
