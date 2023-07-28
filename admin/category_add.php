<?php
include('connection/db.php');


echo"<br>";

echo $Category=$_POST['category'];
echo $Description=$_POST['Description'];
$query=mysqli_query($conn,"INSERT INTO job_category(category,des)values('$Category','$Description')");


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