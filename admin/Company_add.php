<?php
include('connection/db.php');


echo"<br>";

echo $Company=$_POST['Company'];
echo $Description=$_POST['Description'];
echo $admin=$_POST['admin'];

$query=mysqli_query($conn,"INSERT INTO company(company,des,admin)values('$Company','$Description','$admin')");


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