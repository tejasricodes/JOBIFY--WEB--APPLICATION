<?php 
include('include/header.php');
include('include/sidebar.php');

?>
  

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
             <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item"><a href="#">Add Category</a></li>
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Category </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add Customers</a>-->
            </div>
          </div>
         <div style="width: 50%; margin-left: 20% ; background-color: gray">
          <div id="msg">
          </div>

          <form action="" method="post" name="Company_form" id="Company_form"> 

            <div class="form-group">
             <label for="Category Name">Category Name</label>
             <input type="text" class="form-control" name="category" id="category" placeholder="Enter the Company name ">


            </div>
             <div class="form-group">
             <label for="Description">Description</label>
            <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
            
            
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
    var category=$("#category").val();
   if(Description=='')
   {
    alert('Please Provide the company Description,it is mandatory');
    return false;
   }
   if(category=='')
   {
    alert('Please Provide the Category name,it is mandatory');
    return false;
   }
    var admin_type=$("#admin_type").val();

    var data=$("#Company_form").serialize();
    $.ajax({
      type:"POST",
      url:"category_add.php",
      data:data,
       success:function(data){
       alert(data);
      }
    });

   });
  });last_name
</script>
    
  </body>
</html>