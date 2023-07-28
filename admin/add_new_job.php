<?php
session_start();
include('connection/db.php');


 $login=$_SESSION['email'];
$Job_title=$_POST['job_title'];
 $country=$_POST['country'];
 $Description=$_POST['Description'];
  $state=$_POST['state'];
 $city=$_POST['city'];
 $category=$_POST['category'];
 $Keyword=$_POST['Keyword'];
$query=mysqli_query($conn,"INSERT INTO all_jobs(customer_email,job_tilte,des,country,state,city,category,keyword)values('$login','$Job_title','$Description','$country','$state','$city','$category','$Keyword')");


var_dump($query);

if($query)
{
	echo ("Successfully Inserted");
}
else


{
	echo ("error");
}

?>