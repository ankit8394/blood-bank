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
     <link rel="stylesheet" href="need.css">
      <link rel="stylesheet" href="footer.css">
      
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
               <h1>Need Blood <h1>
                    <hr>
          </div>
          <form method="post">
          <div class="row" >
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
                    <p>Reason,why do you need blood? <sup>*</sup></p>
                    <textarea rows="3" cols="40" placeholder="Why need Blood?" required name=re></textarea>
               </div>
               <div class="col-md-4"></div>
          </div>
          <div class="row" id="sb">
               <div class="col-md-12">
                    <button type="submit" id="sq" name="sbt" class="btn btn-primary" >Submit</button>
               </div>
          </div>
          </form>

           <?php
               include('data-con.php');

               if(isset($_POST['sbt'])){
                $bg=$_POST['bg'];
                $query=mysqli_query($con,"select * from donate where bloodgroup='$bg'");
                $count=mysqli_num_rows($query);
                
                if($count==0){
                ?><h2 style="margin-top: 30px;">No Donor Found</h2>
                <?php
                }else{
                ?>
                <div class="row">
               <?php
                    while($row=mysqli_fetch_array($query)){
               ?>
                         <div class="col-md-3" style="margin-top: 40px;">
        <div class="card" >
          <img src="images/d1.png" class="img-fluid">
          <div style="padding:20px 10px 10px 10px;">
            <h4 style="text-transform: capitalize"><?php echo $row['fullname']; ?></h4>
            <b>Blood Group</b>:&nbsp <b><?php echo $row['bloodgroup']; ?></b><br>
            <b>Mobile No</b>:&nbsp<?php echo $row['mobile']; ?><br>
            <b>Gender</b>:&nbsp<?php echo $row['gender']; ?>
          </div>
        </div>

      </div>

               <?php
                    }
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











































