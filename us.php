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
     <link rel="stylesheet" href="us.css">
      
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
               <h1>Contact Us <h1>
                    <hr>
          </div>
          <div class="row">
               <div class="col-md-6">
                    <h4>Send Us Message</h4><br>
                    <form method="post">
                    <p>Full Name <sup>*</sup></p>
                    <input type="text" class="form-control" name="fname" placeholder="Enter Your Full Name" required><br>
                    <p>Phone Number <sup>*</sup></p>
                    <input type="text" class="form-control" name="mno" placeholder="Enter Your Phone Number" required><br>
                    <p>E-mail <sup>*</sup></p>
                    <input type="email" class="form-control" name="mail" placeholder="Enter Your Email" required><br>
                     <p>Message <sup>*</sup></p>
                    <textarea rows="6" cols="84" name="que" placeholder="Enter Your Question" required></textarea>
                    <div class="row" id="sb1" style="padding:20px">
               <div class="col-md-12">
                    <button type="submit" id="sq" name="sbt" class="btn btn-primary" >Submit</button>
               </div>
          </div></form>
               </div>


               <div class="col-md-6" style="padding-left: 20px;">
                    <h4><b>Contact Details</b></h4><br>
                    <?php
                     include('data-con.php');
                    $query=mysqli_query($con,"select * from admindetails ");
                    $row=mysqli_fetch_assoc($query);
                    ?>
                    <h6>Address :</h6>
                    <p><?php echo $row['address'];?></p>
                    <h6>Contact Number</h6>
                    <p><?php echo $row['mno'];?></p>
                    <h6>E-mail</h6>
                    <p><?php echo $row['email'];?></p>
               </div>
          </div>
               
           <?php
              

               if(isset($_POST['sbt'])){
                $fname=$_POST['fname'];
                $mno=$_POST['mno'];
                $mail=$_POST['mail'];
                
                $que=$_POST['que'];

               mysqli_query($con,"insert into question(fname,mobile,email,ques,markasread) values('$fname','$mno','$mail','$que','1')");

                header('location:index.php');
               

               }

          ?>
    
     
     </div>

     <?php
          include('footer.php');
     ?>
 </body>
 </html>