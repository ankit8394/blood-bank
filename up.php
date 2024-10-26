
<?php
ob_start();

include("login-data.php");


?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      <link rel="stylesheet" href="header1.css">
      <link rel="stylesheet" href="sidebar.css">
      <link rel="stylesheet" href="up.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>

      @media only screen and (max-width: 330px){
          #ll{
               margin-top: 317px;
          }
          .sidebar{
               height: 160vh;
          }
          #sq{
               letter-spacing: 0px;
          }
     }
</style>
      
      </head>
        <script>
     $(document).ready(function(){

          $(".bar").click(function(){
          	   $(".bar").fadeOut();
          	  
          	   $(".sidebar").fadeIn();
               
               $(".close").fadeIn();
               $(".container").css("padding-left","200px");
               $(".container").css("transition",".75s");


               
            
          });

           $(".close").click(function(){
               $(".close").fadeOut();
               $(".sidebar").fadeOut();
              
               $(".bar").fadeIn();
               $(".container").css("padding-left","0px");
               $(".container").css("transition",".75s");
          });
    
     });
     </script>
     
 <body >
 	<?php
 	include('header1.php');

 	include('sidebar.php');
    include('data-con.php');
    $qued=mysqli_query($con,"select * from admindetails");
    while($rq=mysqli_fetch_Array($qued)){
    ?>
    <div class="container" >
    	<div class="da"><h2>UPDATE CONTACT INFO</h2><hr></div>
        <form method="post">
          <div class="row" >
               <div class="col-md-4">
                    <p>Full Name <sup>*</sup></p>
                    <input type="text" class="form-control" name="fname" value="<?php echo $rq['fname']; ?>" required>


               </div>
               <div class="col-md-4">
                    <p>Mobile Number <sup>*</sup></p>
                    <input type="text" class="form-control" name="mno" value="<?php echo $rq['mno']; ?>" required>
               </div>
               <div class="col-md-4">
                    <p>E-mail ID <sup>*</sup></p>
                    <input type="email" class="form-control" name="mail"value="<?php echo $rq['email']; ?>" required>
               </div>
          </div>
           <div class="row" >
              
              
              
                <div class="col-md-4">
                    <p>Address <sup>*</sup></p>
                    <textarea rows="3" cols="40"  name="ad"><?php echo $rq['address']; ?></textarea>
               </div>
          </div>
          <div class="row" id="sb">
               <div class="col-md-12" align="center">
                    <button type="submit" id="sq" name="sbt" class="btn btn-primary" >UPDATE</button>
               </div>
          </div>
          </form>
          <?php
          }
               include('data-con.php');

               if(isset($_POST['sbt'])){
                $fname=$_POST['fname'];
                $mno=$_POST['mno'];
                $mail=$_POST['mail'];
                $ad=$_POST['ad'];
                

               mysqli_query($con,"update admindetails set fname='$fname',mno='$mno',email='$mail',address='$ad' ");

                header('location:main.php');
               

               }

          ?>
    	
    </div>

    <?php
 	
 	include('footer.php');
 	?>
 </body>
 </html>