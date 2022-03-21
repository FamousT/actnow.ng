
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="form.css">
    <title>Actnow</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    
<style>
@font-face {
  font-family: "Muli-Regular";
  src: url("../fonts/muli/Muli-Regular.ttf"); }
@font-face {
  font-family: "Muli-SemiBold";
  src: url("../fonts/muli/Muli-SemiBold.ttf"); }
@font-face {
  font-family: "Muli-Bold";
  src: url("../fonts/muli/Muli-Bold.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Muli-Regular";
  color: #666;
  font-size: 13px;
  margin: 0; }

input, textarea, select, button {
  font-family: "Muli-Regular";
  color: #333;
  font-size: 13px; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }


ul {
  padding-left: 0;
  margin-bottom: 0; }

a:hover {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center; }

.inner {
  min-width: 850px;
  margin: auto;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  padding-top: 68px;
  padding-bottom: 48px;
  background: url("../images/registration-form-2.jpg");
  opacity: 9;
 }

  .inner h3 {
    text-transform: uppercase;
    font-size: 22px;
    font-family: "Muli-Bold";
    text-align: center;
    margin-bottom: 32px;
    color: #333;
    letter-spacing: 2px; }


.form-group {
  display: flex; }
  .form-group .form-wrapper {
    width: 100%; }
    .form-group .form-wrapper:first-child {
      margin-right: 20px; }

.form-wrapper {
  margin-bottom: 17px; }
  .form-wrapper label {
    margin-bottom: 9px;
    display: block; }

.form-control {
  border: 1px solid #ccc;
  display: block;
  width: 100%;
  height: 40px;
  padding: 0 20px;
  border-radius: 20px;
  font-family: "Muli-Bold";
  background: none;

}
  .form-control:focus {
    border: 1.5px solid #3575D3  ; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  padding-left: 20px; }
  select option[value=""][disabled] {
    display: none; }

button {
  border: none;
  width: 152px;
  height: 40px;
  margin: auto;
  margin-top: 29px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #3575D3 ;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  border-radius: 20px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  button:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #262626  ;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:hover:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }

.checkbox {
  position: relative; }
  .checkbox label {
    padding-left: 22px;
    cursor: pointer; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 12px;
  width: 13px;
  border-radius: 2px;
  background-color: #ebebeb;
  border: 1px solid #ccc;
  font-family: Material-Design-Iconic-Font;
  color: #000;
  font-size: 10px;
  font-weight: bolder; }
  .checkmark:after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    content: '\f26b'; }

@media (max-width: 991px) {
  .inner {
    min-width: 768px; } }
@media (max-width: 767px) {
  .inner {
    min-width: auto;
    background: none;
    padding-top: 0;
    padding-bottom: 0; }

  form {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; } }

/*# sourceMappingURL=style.css.map */

</style>

</head>
  
  <body>
      <div class="titlebar">


      <div class="row">
        <div class="col-md-8">
          <img src="images/actposter.jpg" style="width: 100%;">
        </div>


        <div class="col-md-4" style="padding-left:25px;">

        <div class="heading"><br/><br/>
          <img src="images/actnow22.png" width="100px;">
          <h3 style="font-weight: 700; padding-top:30px;">Identify with the youth</h3><br/><br/>
        </div>



        <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
						<div class="form-wrapper">
							<label for="">Full Name</label>
              <input type="text" name="name" class="form-control" placeholder="" required="">
						</div>
        </div>

        <div class="form-group">
          <div class="form-wrapper">

						<label class="">Gender</label>
            <div class="">
						<select name="gender" id="gender" class="form-control" required = "">
            <option value="" selected="selected">- Select -</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
						</select>
            </div>
          </div>
					</div>
        
        <div class="form-group">
						<div class="form-wrapper">
							<label for="">Phone Number</label>
              <input type="text" name="phone_no" class="form-control" placeholder="" required="">
						</div>
        </div>

        <div class="form-group">
						<div class="form-wrapper">
							<label for="">Email</label>
              <input type="text" name="email" class="form-control" placeholder="" required="">
						</div>
        </div>

        <div class="form-group">
        <div class="form-wrapper">

						<label class="control-label">State of Origin</label>
            <div class="">
						<select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required="">
							<option value="" selected="selected">- Select -</option>
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
        </div>
					</div>

					<div class="form-group">
          <div class="form-wrapper">

						<label class="">LGA of Origin</label>
            <div class="">
						<select name="lga" id="lga" class="form-control select-lga" required = "">
						</select>
            </div>
          </div>
					</div>

          <div class="image">
            <span class="details"><b>Upload Profile Pictures</b></span><br/><br/>
            <div class="upload">
            <input name="image" type="file" id="image" required= "">  
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary" style="border-radius: 20px;">Register</button>

        </form>

        </div>

          </div>


      </div>




      


  </body>


  <script src="js/lga.js"></script>
	<script src="js/lga.min.js"></script>

</html>








<script src="js/lga.js"></script>
	<script src="js/lga.min.js"></script>
