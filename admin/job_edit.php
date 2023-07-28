<?php 

include ('connection/db.php');
include('include/header.php');
include('include/sidebar.php');
$id=$_GET['edit'];

$query=mysqli_query($conn,"select * from all_jobs where job_id='$id'");
while($row=mysqli_fetch_array($query) )
{
  $Title=$row['job_tilte'];
    $Description=$row['des'];
      $country=$row['country'];
  $state=$row['state'];
$city=$row['city'];
 

}

?>

  

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
             <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="Job_create.php">All Jobs list</a></li>
    <li class="breadcrumb-item"><a href="#">Edit Jobs</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Job </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add Customers</a>-->
            </div>
          </div>
         <div style="width: 50%; margin-left: 20% ; background-color: gray">
          <div id="msg">
          </div>

          <form action="" method="post" name="job_form" id="job_form"> 

            <div class="form-group">
             <label for="job title">Job title</label>
             <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $Title ;?>"placeholder="Enter the Job title ">


            </div>
             <div class="form-group">
             <label for="Description">Description</label>
            <textarea name="Description" id="Description" class="form-control"  cols="30" rows="10"><?php echo $Description ;?></textarea>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];?>">
            </div>
            <div class="form-group">
              <label>Country</label>
              <select name="country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
</select>
            </div>
             <div class="form-group">
              <label>State</label>
              <select name="state" class="states form-control" id="stateId">
    <option value="">Select State</option>
</select

            </div>
             <div class="form-group">
              <label>City</label>
<select name="city" class="cities form-control" id="cityId">
    <option value="">Select City</option>
</select>
            </div>
             <div class="form-group">
            
             <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">

            </div>
            </div>
            
          </form>
         </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
      
    </script>

    <!--datatable plugin-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script >
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<script>
  $(document).ready(function(){
   $("#submit").click(function(){
    var Description=$("#Description").val();
    var job_title=$("#job_title").val();
    var countryId=$("#countryId").val();
    var stateId=$("#stateId").val();
    var cityId=$("#cityId").val();
   if(job_title=='')
   {
    alert('Please Provide the Job Title,it is mandatory');
    return false;
   }
   if(Description=='')
   {
    alert('Please Provide the job description,it is mandatory');
    return false;
   }
   if(countryId=='')
   {
    alert('Please Provide the country location,it is mandatory');
    return false;
   }
   if(stateId=='')
   {
    alert('Please Provide the staate,country ,it is mandatory');
    return false;
   }
   if(cityId=='')
   {
    alert('Please Provide the city name,it is mandatory');
    return false;
   }
    var admin_type=$("#admin_type").val();

    var data=$("#job_form").serialize();
   

   });
  });last_name
</script>
    
  </body>
</html>

<?php 
include ('connection/db.php');
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $job_title=$_POST['job_tilte'];
    $Description=$_POST['des'];
      $country=$_POST['country'];
  $state=$_POST['state'];
$city=$_POST['city'];
 
  
  $query1=mysqli_query($conn,"update all_jobs set job_tilte='$job_title',des='$Description',country='$country',state='$state',city='$city' where job_id='$id'");

   if($query1)
   {
  echo "Record has been updated successfully !!'";
  
   }
  else
  {
  echo "Error deleting the record ,try again";
 }
}

?>