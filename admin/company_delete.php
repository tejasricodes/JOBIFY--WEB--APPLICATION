<?php
include ('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"delete from company where company_id='$del'");
if($query)
{
	echo "<script>alert('Record has been deleted succewsfully !!')</script>";
	header('location:create_company.php');

}
else{
	echo "Error deleting the record ,try again";
}
?>