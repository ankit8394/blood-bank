<div class="container" style="position:relative;">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/b1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/b2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/b3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
<div class="container">
	<div class="wel">
	<h1>Welcome to BloodBank & Donor Management System</h1>
    </div>
    <div class="ro" >
    	<div class="card" >
    		<div style="background:#16a2b8;padding: 6px;color: #fff;" align="center">
    			<h5>The Need For Blood</h5>
    		</div>
    		<div style="padding: 10px;" class="pa">
    			<p>
    				The need for blood is vital in healthcare for surgeries, trauma care, cancer treatments, chronic illnesses, and managing severe anemia. Blood components like red blood cells, plasma, platelets, and cryoprecipitate each serve specific medical purposes. Emergencies, natural disasters, and pandemics further amplify the demand for blood. Regular, voluntary donations are essential to maintain a stable supply, and public awareness, blood drives, and technological advances are crucial to addressing blood shortages and ensuring safe and adequate blood availability for patients in need.
    			</p>
    		</div>
    	</div>
    	<div class="card">
    		<div style="background:#16a2b8; padding: 6px;color: #fff;" align="center">
    			<h5>Blood Tips</h5>
    		</div>
    		<div style="padding: 10px;" class="pa">
    			<p>
    				For blood donors, it's essential to stay hydrated, eat a healthy meal rich in iron, get enough rest, and avoid alcohol before donating. Wear comfortable clothing for easy vein access and rest post-donation while avoiding strenuous activities. Regular donations help maintain the blood supply. To maintain healthy blood, consume iron and vitamin C-rich foods, stay active, avoid smoking, limit alcohol, and get regular check-ups to monitor blood health. Hydration is also crucial for maintaining good blood volume and circulation.
    			</p>
    		</div>
    	</div>
    	<div class="card">
    		<div style="background:#16a2b8;padding: 6px;color: #fff;" align="center">
    			<h5>Who could you help</h5>
    		</div>
    		<div style="padding: 10px;" class="pa">
    			<p>By donating blood, you can help a wide range of people, including those undergoing surgeries, trauma victims from accidents or natural disasters, cancer patients receiving chemotherapy, individuals with chronic conditions like sickle cell disease or thalassemia, and those suffering from severe anemia. Your donation can also support patients with clotting disorders, liver disease, and severe infections. Each donation has the potential to save multiple lives, providing critical support to those in urgent need.
    			</p>
    		</div>
    	</div>
    </div>
    <div class="row" style="margin-top: 40px;">
    	<div class="col-md-12">
    		<h2>Blood Donor Names</h2>
    	</div>
    </div>

    <div class="row" id="roq" style="margin-top: 60px;">
     <?php
     include('data-con.php');
     $query=mysqli_query($con,"select * from donate order by id desc LIMIT 6");
     while($row=mysqli_fetch_array($query)){
      ?>
       <div class="col-md-1"></div>

      <div class="col-md-3" style="padding-bottom: 20px;">
        <div class="card" >
          <img src="images/d1.png" class="img-fluid">
          <div style="padding:20px 10px 10px 10px;text-transform: capitalize;">
            <h4><?php echo $row['fullname']; ?></h4>
            <b>Blood Group</b>:&nbsp <b><?php echo $row['bloodgroup']; ?></b><br>
            <b>Mobile No</b>:&nbsp<?php echo $row['mobile']; ?><br>
            <b>Gender</b>:&nbsp<?php echo $row['gender']; ?>
          </div>
        </div>

      </div>
      <?php
     }
     ?>
      
      
      

      
      

     
    </div>
    <div class="bg">
      <h2>Blood Groups</h2>

    </div>
    

<div style="display: flex; padding: 20px 20px 0px 20px;">
  <div class="blood1">
    <p>
      Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>

                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <p>Your blood group is determined by the genes you inherit from your parents.<br>
                  A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </p>
  </div>
  <div class="blood2">
    <img src="images/d2.jpeg" class="img-fluid">
  </div>
</div>


<div class="bg">
      <h2>Universal Donor & Recipients</h2>

    </div>


<div class="row" style="display: flex; padding: 20px 20px 0px 20px;">
  <div class="col-md-8" >
    <ol >
      <li><b>Universal Donor:</b></li><br>
      
      <ul type="disc">

        <li><b>Blood Type:</b> O negative (O-).</li>
        <li><b>Antigens:</b> Lacks A, B, and Rh antigens on the red blood cells.</li>
        <li><b>Compatibility:</b> Can donate blood to all other blood types (A, B, AB, O) in emergency situations.</li>
        <li><b>Use in Emergencies:</b> Often used in trauma care and emergency transfusions when there is no time to determine the recipient's blood type.</li>
      </ul><br>

      <li><b>Universal Recipient:</b></li><br>
      <ul type="disc">

        <li><b>Blood Type:</b> AB positive (AB+).</li>
        <li><b>Antigens:</b>  Has A, B, and Rh antigens on the red blood cells.</li>
        <li><b>Compatibility:</b> Can receive blood from all other blood types (A, B, AB, O), both positive and negative.</li>
        <li><b>Rarity:</b>AB+ is a relatively rare blood type, comprising only about 3-4% of the population.</li>
      </ul>

    </ol>
    
  </div>
  <div class="col-md-4" id="bad1" align="center">
    <a href="bd.php">
    <button class="btn btn-primary btn-lg" id="bad">Become A Donor</button></a>
  </div>
</div>




</div>

