<?php
include_once 'dbh.inc.php';

$lname = $_POST['lname'];
 $fname= $_POST['fname'];
 $country = $_POST['country'];
 $age = $_POST['age'];
 $countryExt = $_POST['countryExt'];
 $mobile = $_POST['mobile'];
 $Email = $_POST['Email'];
 $bookFrom = $_POST['bookFrom'];
 $bookTo = $_POST['bookTo'];
 $bookFTime = $_POST['bookFTime'];
 $bookTTime = $_POST['bookTTime'];

$sql = "INSERT INTO contactuss (lname, fname, age,country ,countryExt , mobile,Email , bookFrom ,bookTo, bookFTime, bookTTime) VALUES ('$lname', '$fname', ' $age',' $country' ,' $countryExt' ,' $mobile' ,' $Email' ,' $bookFrom' , ' $bookTo',' $bookFTime' ,' $bookTTime' );";

mysqli_query($con, $sql);

$torqueEmail = "ibrahim.saliba18@gmail.com";
$subject = "Someone is tyring to contact you";
$txt ="Name = ". $fname . "\r\n Last Name = ". $lname . "\r\n Age = ". $age . "\r\n Country Ext. = ". $countryExt . "\r\n Mobile Number = ". $mobile . "\r\n Email = ". $Email . "\r\n Email = " . $email . "\r\n From =" . $bookFrom . "\r\n To =" . $bookTo ;
$headers = "From: noreply@yoursite.com" . "\r\n" .


    mail($torqueEmail,$subject,$txt,$headers);



header("Location: ../contactUsPage.php");

?>