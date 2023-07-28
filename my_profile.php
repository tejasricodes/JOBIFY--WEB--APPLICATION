<?php
include('include/db.php');
include('include/my_profile.php');



$query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}' ");
while($row=mysqli_fetch_array($query))
{

  $img=$row['img'];
  $name=$row['name'];
  $dob=$row['dob'];
  $number=$row['number'];
  $email=$row['email'];

}





?>

   <div style="margin-left: 15%;width:50%;border: 1px solid gray">

    <form action="profile_add.php" id="profile_form" method="post" name="profile_form" enctype="multipart/form-data" >
      <div class="row">

        <div class="col-md-6">
         <img src="images/login.png" class="img-rounded" alt="Cinque Terre" width="50%" height="50%">
        </div>

        <div class="col-md-6">
        <input type="file" class="form-control" name="img" id="img">
        </div>


      </div>
      <br>
<div style="margin-left: 5%">
       <div class="row">

        <div class="col-md-6">
         <td>Enter your name</td>
        </div>

        <div class="col-md-6">
        <td><input type="text" class="form-control" value="<?php  if(!empty($name)) echo $name ;?>"name="name" placeholder="Enter your name..." id="name"></td>
        </div>

       

      </div>


       <div class="row">

        <div class="col-md-6">
         <td>Enter your Date of Birth</td>
        </div>

        <div class="col-md-6">
        <td><input type="date" class="form-control" name="dob" value="<?php  if(!empty($dob))echo $dob ;?>" placeholder="Enter your DOB..." id="dob"></td>
        </div>

        

      </div>


       <div class="row">

        <div class="col-md-6">
         <td>Enter your Mobile Number</td>
        </div>

        <div class="col-md-6">
        <td><input type="number" class="form-control" name="number" value="<?php if(!empty($number)) echo $number ;?>" placeholder="Enter your Mobile Number..." id="number"></td>
        </div>

       

      </div>


      <div class="row">

        <div class="col-md-6">
         <td>Enter your Email ID</td>
        </div>

        <div class="col-md-6">
        <td><input type="email" class="form-control" name="email" value="<?php  if(!empty($email)) echo $email ;?>" placeholder="Enter your Mobile Number..." id="email"></td>
        </div>

     

      </div>

      <div class="form-group">
      <input type="submit" name="submit" name="submit" value="Update"class="btn btn-success" placeholder="Submit">

      </div>

</div>
    </form>
   </div>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to know more</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
include('include/footer.php')
?>
<!--<script >
  $(document).ready(function(){
 var data=$("#profile_form").serialize();
  $.ajax({
       type:"POST",
       url:"profile_add.php",
       data:data,
       success:function(data){
        alert(data);
       }

  });
  });
</script>-->