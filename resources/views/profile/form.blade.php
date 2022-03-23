<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="forms">
      <div class="form-content">
    <div class="cover">
        <img src="images/poster4.jpg" alt="">
        <!-- <div class="text">
          <span class="text-1">actNow!</span>
          <span class="text-2">Create your future today</span>
        </div> -->
        </div>
        <div class="signup-form">
          <div class="title">Join Actnow</div>
          <form action="/profile" method="post">

            @csrf
            <div class="input-boxes">
              <div class="form-group">
                <input type="text" placeholder="Full name" name="name" required>
              </div>
              <div class="form-group">
                <input type="tel" placeholder="Phone number" name="phone_no" required>
              </div>
              <div class="form-group">
                <input type="email" placeholder="Email address" name="email" required>
              </div>
              <div class="form-group"> 
                <select name="gender" id="gender" required>
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <hr/>
          </div>


          <div class="form-group">
						<select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required="">
							<option value="" selected="selected">State of origin</option>
							<option value="Abia">Abia</option>
							<option value="Adamawa">Adamawa</option>
							<option value="AkwaIbom">AkwaIbom</option>
							<option value="Anambra">Anambra</option>
							<option value="Bauchi">Bauchi</option>
							<option value="Bayelsa">Bayelsa</option>
							<option value="Benue">Benue</option>
							<option value="Borno">Borno</option>
							<option value="Cross River">Cross River</option>
							<option value="Delta">Delta</option>
							<option value="Ebonyi">Ebonyi</option>
							<option value="Edo">Edo</option>
							<option value="Ekiti">Ekiti</option>
							<option value="Enugu">Enugu</option>
							<option value="FCT">FCT</option>
							<option value="Gombe">Gombe</option>
							<option value="Imo">Imo</option>
							<option value="Jigawa">Jigawa</option>
							<option value="Kaduna">Kaduna</option>
							<option value="Kano">Kano</option>
							<option value="Katsina">Katsina</option>
							<option value="Kebbi">Kebbi</option>
							<option value="Kogi">Kogi</option>
							<option value="Kwara">Kwara</option>
							<option value="Lagos">Lagos</option>
							<option value="Nasarawa">Nasarawa</option>
							<option value="Niger">Niger</option>
							<option value="Ogun">Ogun</option>
							<option value="Ondo">Ondo</option>
							<option value="Osun">Osun</option>
							<option value="Oyo">Oyo</option>
							<option value="Plateau">Plateau</option>
							<option value="Rivers">Rivers</option>
							<option value="Sokoto">Sokoto</option>
							<option value="Taraba">Taraba</option>
							<option value="Yobe">Yobe</option>
							<option value="Zamfara">Zamafara</option>
						</select>
					</div>
          <hr/>

					<div class="form-group">
						<select name="lga" id="lga" class="form-control select-lga" required = "">
						</select>
					</div>
          <hr/><br/>

          <div class="image">
            <span class="details">Upload Profile Pictures</span>
            <div class="upload">
            <input name="image" type="file" id="image">    
            </div>
              <div class="button form-group">
                <input type="submit" value="Join">
              </div>
      </form>
    </div>


    </div>
    </div>
  </div>


  <script src="js/lga.js"></script>
	<script src="js/lga.min.js"></script>
</body>
</html>