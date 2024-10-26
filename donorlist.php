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
      <link rel="stylesheet" href="donorlist.css">
      
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
    include('data-con.php');
    $id=$_GET['cid'];
    $skip=($id-1)*5;
    $i=1;

    ?>
    <div class="container" >
    	<div class="da"><h2>DONOR LIST</h2><hr></div>
     <div class="row">
          <div class="col-md-12">

               <table class="table table-bordered">
                    <thead>
                         <th>S.No</th>
                         <th>Name</th>
                         <th>Mobile No.</th>
                         <th>Email ID</th>
                         <th>Age</th>
                         <th>Gender</th>
                         <th>Blood Group</th>
                         <th>Address</th>
                         <th>Action</th>
                    </thead>
                    <tbody>
                         
                         <?php
                              $query=mysqli_query($con,"select * from donate ORDER BY id DESC LIMIT 5 OFFSET $skip  ");
                              while($row=mysqli_fetch_array($query)){
                              ?>


                              <tr>
                                   <td><?php echo $skip+1;  $skip++; ?></td>
                                   <td><?php echo $row['fullname'];  ?></td>
                                   <td><?php echo $row['mobile'];  ?></td>
                                   <td><?php echo $row['email'];  ?></td>
                                   <td><?php echo $row['age'];  ?></td>
                                   <td><?php echo $row['gender'];  ?></td>
                                   <td><?php echo $row['bloodgroup'];;  ?></td>
                                   <td><?php echo $row['address'];  ?></td>
                                   <td><a href="deledo.php?cid=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
                              </tr>
                              <?php
                              }


                         ?>






                    </tbody>
               </table>
          </div>
     </div>
     <div class="row" id="page">
          <div class="col-md-12" align="center"  >
               <?php
                if($id!=1){
                    ?>
                         <u><a href="donorlist.php?cid=<?php echo $id-1; ?>" style="color:black;" ><?php echo "prev";?></a></u>

                   <?php
                    }
                    ?>
               <?php
                    $quer=mysqli_query($con,"select * from donate");
                    $count=mysqli_num_rows($quer);
                    $page=0;
                    while($page<($count/5)){
                    ?>
                    <u><a href="donorlist.php?cid=<?php echo $page+1; ?>" style="color:black;" ><?php if($id!=($page+1)){echo $page+1;}else{
                         $x=$page+1;

                         echo "<font color='red'>$x</font>"; }?></a></u>
                    <?php
                         $page=$page+1;
                    }
                    if($id<($count/5) ){
                    ?>
                         <u><a href="donorlist.php?cid=<?php echo $id+1; ?>" style="color:black;" ><?php echo "next";?></a></u>


                   <?php

                    }


               ?>
          </div>
     </div>
        
    	
    </div>

    <?php
 	
 	include('footer.php');
 	?>
 </body>
 </html>