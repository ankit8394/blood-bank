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
      <link rel="stylesheet" href="main.css">
      
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
    	<div class="da"><h2>DASHBOARD</h2><hr></div>
    	<div class="row" id="rw">
    		<div class="col-md-1"></div>
    		<div class="col-md-3" id="cl1">
    			<div class="card">
    				<?php
    					include('data-con.php');
    					$query=mysqli_query($con,"select * from donate");
    					$count=mysqli_num_rows($query);

    				?>
    				<div id="bda"><h3><?php echo $count; ?></h3>
    					<p><b>Blood Donors Available</b></p>
    					<button id="de"><a href="donorlist.php?cid=1">Full Details</a></button>
    				</div>
    				
    			</div>
    			
    		</div>
    		<div class="col-md-1"></div>

    		<div class="col-md-3" id="cl2">
    			<div class="card">
    				<?php
    					include('data-con.php');
    					$quer=mysqli_query($con,"select * from question");
    					$count=mysqli_num_rows($quer);

    				?>
    				<div id="bda"><h3><?php echo $count; ?></h3>
    					<p><b>User Queries</b></p>
    					<button id="de"><a href="quer.php?cid=1">Full Details</a></button>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-1"></div>

    		<div class="col-md-3" id="cl3">
    			<div class="card">
    				<?php
    					include('data-con.php');
    					$queryy=mysqli_query($con,"select * from question where markasread='1' ");
    					$count=mysqli_num_rows($queryy);

    				?>
    				<div id="bda"><h3><?php echo $count; ?></h3>
    					<p><b>Pending Queries</b></p>
    					<button id="de"><a href="quer.php?cid=1">Full Details</a></button>
    				</div>
    			</div>
    		</div>

    	</div>
    </div>

    <?php
 	
 	include('footer.php');
 	?>
 </body>
 </html>