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
     <link rel="stylesheet" href="about.css">
      
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
     <h1>ABOUT US</h1>
     <hr>
     <div class="row" id="in">
          <div class="col-md-6">
               <p>
                    In a blood bank management system, the intricate and vital process of blood donation, storage, and distribution is streamlined and meticulously managed to ensure the availability and safety of blood for patients in need. This system involves a comprehensive approach to managing donor information, blood collection, testing, storage, and distribution. By integrating advanced technology and meticulous record-keeping, blood banks can efficiently track each unit of blood from donation to transfusion, ensuring compliance with stringent health and safety regulations. The system facilitates the coordination between various departments, including donor recruitment, laboratory testing, inventory management, and hospital distribution. This not only enhances the efficiency of operations but also improves the accuracy and reliability of the data, enabling quick responses to emergency situations and reducing the risk of shortages. Moreover, a robust blood bank management system supports donor communication and engagement, ensuring a steady and reliable donor base. By leveraging data analytics, the system can also predict demand patterns, optimize inventory levels, and minimize wastage, ultimately contributing to better patient outcomes and overall healthcare efficiency.
               </p>
          </div>
          <div class="col-md-6">
               <img src="images/b4.jpg" class="img-fluid">
          </div>
     </div>
     </div>
     <?php
 	include('footer.php');
 	?>
 </body>
 </html>