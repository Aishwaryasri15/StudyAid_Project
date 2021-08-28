<?php
require 'connection.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$pass =$_POST["pass"];
$pass = md5($pass);
$qualification=$_POST["Qualification"];
$institutions=$_POST["Institutions"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$subjects=$_POST["Subjects"];
$gender=$_POST["Gender"];
$link=$_POST["link"];
$address=$_POST["Address"];
$city=$_POST["City"];
$pincode=$_POST["Pincode"];
$bio=$_POST["bio"];
$query2="SELECT * FROM tutorsprofile WHERE email='$email' ";
$data2=mysqli_query($q,$query2);
$a = mysqli_num_rows($data2);

if($a==0)
{
$filename=$_FILES["pic"]["name"];
$tempname=$_FILES["pic"]["tmp_name"];	
$folder="assets/img/tutorpics/".$filename;
move_uploaded_file($tempname,$folder);
rename("$folder","assets/img/tutorpics/$email.jpeg");
$filename = "$email.jpeg";
$query = "INSERT INTO tutorsprofile(id,tutor_name,password,tutor_qualification,Institution,email,tutor_phonenumber,subjects,gender,sitelink,address,city,pincode,bio,propic_link) VALUES('','$name','$pass','$qualification','$institutions','$email','$phoneno','$subjects','$gender','$link','$address','$city','$pincode','$bio','$filename')";
$data1=mysqli_query($q,$query);
if($data1){
session_start();
	$_SESSION['user']=$email;
    $_SESSION['pass']=$pass;
	session_write_close(); 	
    header("Location: tutorsprofile.php");
    exit ;

	}
}
else
{
    echo '<script>alert("The Email is already registered Please Login \nIf you forgot your password please Please press forgot password and change your password")</script>'; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Application Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/tutor_main.css">
<!--===============================================================================================-->
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" style="font-size:10px " method="post" enctype="multipart/form-data" >
				<span class="contact100-form-title">
					Tutor Registration Form
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email {It should be in xyz@gmail.com format}</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="pass" placeholder="Enter your Password " required>
					<span class="focus-input100" ></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Qualification is required">
					<span class="label-input100">Qualification</span>
					<input class="input100" type="text" name="Qualification" placeholder=" Enter your Qualification" required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="required">
					<span class="label-input100">Institutions Name &nbsp; (if you are associated with any Institution)</span>
					<input class="input100" type="text" name="Institutions" placeholder=" Enter your Institutions Name" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Subjects</span>
					<input class="input100" type="text" name="Subjects" placeholder=" Enter the Subjects you Teach" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Phone number">
					<span class="label-input100">Phone number {Should be of 10 digits don't add extensions such as +91 or 0}</span>
					<input class="input100" type="text" name="phoneno" placeholder=" Enter your 10 digit Mobile Number" pattern="^\d{10}$" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Gender</span>
					<div>
						<select class="selection-2" name="Gender">
							
							<option class="selection-2" name="Gender" value="male">Male</option>
							<option class="selection-2" name="Gender" value="female">Female</option>
							<option class="selection-2" name="Gender" value="others">Others</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				
                 
                 <div class="wrap-input100">
					<span class="label-input100">Site Link</span>
					<input class="input100" type="text" name="link" placeholder="Mention any site link if you have any online courses">
					<span class="focus-input100"></span>
				</div>
				  <div class="wrap-input100 validate-input" data-validate="Address is required">
					<span class="label-input100">Address</span>
					<input class="input100" type="text" name="Address" placeholder="Enter your address">
					<span class="focus-input100"></span>
				</div>

				  <div class="wrap-input100 validate-input" data-validate="City is required">
					<span class="label-input100">City</span>
					<input class="input100" type="text" name="City" placeholder="Cities where you are available to teach" required>
					<span class="focus-input100"></span>
				</div>
				  <div class="wrap-input100 validate-input" data-validate="Pincode is required">
					<span class="label-input100">Pincode {Should be of 6 digits}</span>
					<input class="input100" type="text" name="Pincode" placeholder="Enter your pincode" pattern="^\d{6}$" required>
					<span class="focus-input100"></span>
				</div>

            




				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Small Bio you like your students to know about you (max 400 charecters)</span>
					<textarea class="input100" name="bio" placeholder="Type here..." maxlength="400" required></textarea>
					<span class="focus-input100"></span>
				</div>

			  <div class="wrap-input100 validate-input" data-validate="Picture is required">
					<span class="label-input100">Upload Your Picture</span>	
						 <input type="file" name="pic" required>
                         
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit" >
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		<p style="padding-top:15px; font-size:18px">Already have an Account</p><a href="tutorsignin.php"><p style="font-size:18px"> Sign In </p></a>
		</div>
		
		
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/tutor_main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>




</body>
</html>

