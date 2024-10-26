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

     <link rel="stylesheet" href="header.css">
     <link rel="stylesheet" href="log.css">
      
      <script>
     $(document).ready(function(){

          $("#hbar").click(function(){
               $(".c3").toggle();
          });
    
     });
     </script>


 </head>
 <body>
 	<?php
 	include('header.php');
 	?>
 	<div class="container-fluid" id="aqwe">
 		<div class="hero">
 			<h4>BLOOD BANK DONATION ADMIN LOGIN PORTAL</h4>
 			<form method="post">
 				<div class="row" id="r1">
 					<div class="col-md-12">
 				Username<sup>*</sup><br><br>

 				<input type="text" class="in" placeholder="Enter Username" name="f1" required><br>
 			</div>
 		</div>

 				<div class="row" id="r2">
 					<div class="col-md-12">
 				Password<sup>*</sup><br><br>

 				<input type="password" class="in" placeholder="Enter Password" name="p1" required>
 				<br>
 			</div>
 		</div>

 				<div class="row" id="r3">
 					<div class="col-md-12" align="center">
 						<button name="sbt" class="btn btn-primary">Log In</button>
 					</div>
 				</div>

 				
 			</form>
 			<?php
 			include('data-con.php');
 			if(isset($_POST['sbt'])){
 				$una=$_POST['f1'];
 				$pass=$_POST['p1'];
 				$query=mysqli_query($con,"select * from login where username='$una' and password='$pass'");
 				$count=mysqli_num_rows($query);
 				if($count==1){
 					$row=mysqli_fetch_assoc($query);
 					$idd=$row['id'];
 					setcookie("uid",$idd);
 					header('location:main.php');


 				}else{
 					echo "no record found!";
 				}
 			}

 			?>


 		</div>

 	</div>

 	<?php
 	include('footer.php');
 	?>
 </body>
 </html>