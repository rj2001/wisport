<?php 
$to="rgojr2001@yahoo.com";
$subject="Website Enquiry";
$data=$_POST['ername']."<br>";
$data.=$_POST['erdate']."<br>";
$data.=$_POST['ersex']."<br>";
$data.=$_POST['erage']."<br>";
$data.=$_POST['ercity']."<br>";
$data.=$_POST['eraddr']."<br>";
$data.=$_POST['erdesc']."<br>";
$data.=$_POST['ercn']."<br>";
$data.=$_POST['ermail']."<br>";
$data.=$_POST['erphone']."<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rj_ochmann@wi-sport.com>' . "\r\n";
$headers .= 'Cc: wa8ndl@gmail.com' . "\r\n";

mail($to,$subject,$data,$headers);
?>