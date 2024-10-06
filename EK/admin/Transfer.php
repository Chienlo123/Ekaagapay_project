<?php
  require_once'config.php';
  
  if(ISSET($_REQUEST['ID'])){
    $mem_id=$_REQUEST['ID'];
    
    $query=mysqli_query($con, "SELECT * FROM `tblseniorcitizen` WHERE `ID`='$mem_id'") or die(mysqli_error());
    $fetch=mysqli_fetch_array($query);
    $mem_id=$fetch['ID'];
    $regnum=mt_rand(100000000, 999999999);
    $namesc=$fetch['Name'];
    $dob=$fetch['DateofBirth'];
    $contnum=$fetch['ContactNumber'];
    $commadd=$fetch['CommunicationAddress'];
    $emeradd=$fetch['EmergencyAddress'];
    $emercontnum=$fetch['EmergencyContactnumber'];
    $addedby='admin';
    $gender=$fetch['gender'];
    $regdate=$fetch['RegitrationDate'];
    $amount=$fetch['pension'];
    $status=$fetch['status'];
    $emerperson=$fetch['EmergencyPerson'];
    $qr=$fetch['qrcode'];
    
    
    
    mysqli_query($con,"INSERT INTO `tblarchive` VALUES('$mem_id', '$regnum', '$namesc','$dob', '$contnum', '$commadd', '$emeradd', '$emercontnum', '$addedby','$regdate', '$gender' , '$amount', '$status', '$emerperson', '$qr')") or die(mysqli_error());
    mysqli_query($con,"DELETE FROM `tblseniorcitizen` WHERE `ID`='$mem_id'") or die(mysqli_error());
    
    echo"<script>alert('Data successfully Archive')</script>";
    echo"<script>window.location='archive.php'</script>";
  }
?>