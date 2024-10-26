<?php
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
      <link rel="stylesheet" href="change.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
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
    ?>
    <div class="container" >
    	<div class="da"><h2>CHANGE PASSWORD</h2><hr></div>
    	<form method="post">
                <div class="row" id="r1">
                    <div class="col-md-12">
                OLD PASSWORD<sup>*</sup><br><br>

                <input type="text" placeholder="enter USERNAME" name="f1" required><br>
            </div>
        </div>

                <div class="row" id="r2">
                    <div class="col-md-12">
                NEW Password<sup>*</sup><br><br>

                <input type="text" placeholder="enter PASSWORD" name="p1" required>
                <br>
            </div>
        </div>

                <div class="row" id="r3">
                    <div class="col-md-12" align="center">
                        <button name="sbt" class="btn btn-primary">Change Password</button>
                    </div>
                </div>

                
            </form>
            <?php
            include('data-con.php');
            if(isset($_POST['sbt'])){
                $op=$_POST['f1'];
                $np=$_POST['p1'];
                $query=mysqli_query($con,"select * from login password='$pass'");
                $count=mysqli_num_rows($query);
                if($count==1){
                    mysqli_query($con,"update login set password='$np'");
                    header("location:main.php");


                }else{
                    echo "no record found!";
                }
            }

            ?>
    </div>

    <?php
 	
 	include('footer.php');
 	?>
 </body>
 </html>