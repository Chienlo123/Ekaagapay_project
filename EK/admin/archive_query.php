<?php
	date_default_timezone_set("Etc/GMT+8");
	
	require_once 'config.php';
	
	$query = mysqli_query($con, "SELECT * FROM `tblseniorcitizen`");
	$date = date("Y-m-d");
	while($fetch = mysqli_fetch_array($query)){
		if(strtotime($fetch['ID']) < strtotime($date)){
			mysqli_query($conn, "INSERT INTO `tblarchive` VALUES('', '$fetch[ID]', '$fetch[RegistrationNumber]', '$fetch[Name]', '$fetch[DateOfBirth]', '$fetch[ContactNumber]', '$fetch[CommunicationAddress]', '$fetch[EmergencyAddress]', '$fetch[EmergencyContactnumber]', '$fetch[AddedBy]', '$fetch[RegistrationDate]', '$fetch[gender]', '$fetch[pension]', '$fetch[status]', '$fetch[EmergencyPerson]', '$fetch[qrcode]')") or die(mysqli_error($con));
			mysqli_query($con, "DELETE FROM `tblseniorcitizen` WHERE `ID` = '$fetch[ID]'") or die(mysqli_error($conn));
		}
	}
	
?>