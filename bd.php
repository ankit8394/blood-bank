


<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     
     <link rel="stylesheet" href="header.css">
     <link rel="stylesheet" href="bd.css">
      
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
     <div class="container" id="ab">
          <div>
               <h1>Donate Blood <h1>
                    <hr>
          </div>
          <form method="post">
          <div class="row" >
               <div class="col-md-4">
                    <p>Full Name <sup>*</sup></p>
                    <input type="text" class="form-control" name="fname" placeholder="Enter Your Full Name" required>


               </div>
               <div class="col-md-4">
                    <p>Mobile Number <sup>*</sup></p>
                    <input type="text" class="form-control" name="mno" placeholder="Enter Your Mobile No." required>
               </div>
               <div class="col-md-4">
                    <p>E-mail ID <sup>*</sup></p>
                    <input type="email" class="form-control" name="mail" placeholder="Enter Your E-mail" required>
               </div>
          </div>
           <div class="row" >
               <div class="col-md-4">
                    <p>Age <sup>*</sup></p>
                    <input type="number" class="form-control" name="age" placeholder="Enter Your Age" min="18" max="60" required>


               </div>
               <div class="col-md-4">
                    <p>Gender <sup>*</sup></p>
                      <select id="se" name="ge" required>
                         <option value="">Select</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         <option value="Other">Other</option>
                    </select>
               </div>
               <div class="col-md-4">
                    <p>Blood Group <sup>*</sup></p>
                    <select id="see" name="bg" required>
                         <option value="">Select</option>
                         <option value="A+">A+</option>
                         <option value="A-">A-</option>
                         <option value="B+">B+</option>
                         <option value="B-">B-</option>
                         <option value="AB+">AB+</option>
                         <option value="AB-">AB-</option>
                         <option value="O+">O+</option>
                         <option value="O-">O-</option>
                    </select>
               </div>
                <div class="col-md-4">
                    <p>Address <sup>*</sup></p>
                    <textarea rows="3" cols="40" placeholder="Enter Your Address" name="ad"></textarea>
               </div>
          </div>
          <div class="row" id="sb">
               <div class="col-md-12" align="center">
                    <button type="submit" id="sq" name="sbt" class="btn btn-primary" >Submit</button>
               </div>
          </div>
          </form>
          <?php
               include('data-con.php');

               if(isset($_POST['sbt'])){
                $fname=$_POST['fname'];
                $mno=$_POST['mno'];
                $mail=$_POST['mail'];
                $age=$_POST['age'];
                $ge=$_POST['ge'];
                $bg=$_POST['bg'];
                $ad=$_POST['ad'];
                $ma="Mark As Read";

               mysqli_query($con,"insert into donate(fullname,mobile,email,age,gender,bloodgroup,address,markasread) values('$fname','$mno','$mail','$age','$ge','$bg','$ad','$ma')");

                header('location:index.php');
               

               }

          ?>
          </div>


    
     
     
     <?php
 	include('footer.php');
 	?>
 </body>
 </html>











































