<?php 
$to="support@rn53themes.net";
$subject="Website Enquiry";
$data=$_POST['jname']."<br>";
$data.=$_POST['jmail']."<br>";
$data.=$_POST['jphone']."<br>";
$data.=$_POST['jsex']."<br>";
$data.=$_POST['jcity']."<br>";
$data.=$_POST['jaddr']."<br>";
$data.=$_POST['jdesc']."<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rj_ochmann@wi-sport.com>' . "\r\n";
$headers .= 'Cc: rgojr2001@yahoo.com' . "\r\n";

mail($to,$subject,$data,$headers);
?>