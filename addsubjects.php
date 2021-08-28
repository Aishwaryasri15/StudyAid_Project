<?php
require 'connection.php';
session_start();
     $r=$_SESSION['user'];
	 $s=$_SESSION['pass'];
	session_write_close();
if(isset($_POST['submit']))
{
    
$s1 = strtoupper($_POST['s1']);
$v1 =$_POST["v1"];
$o1 =$_POST['o1'];
$c1 = $_POST['c1'];
$s2 = strtoupper($_POST['s2']);
$v2 =$_POST["v2"];
$o2 =$_POST['o2'];
$c2 = $_POST['c2'];
$s3 = strtoupper($_POST['s3']);
$v3 =$_POST["v3"];
$o3 =$_POST['o3'];
$c3 = $_POST['c3'];
if($s1 == "MATHS"){ $s1 = "MATHEMATICS"; } 
if($s2 == "MATHS"){ $s2 = "MATHEMATICS"; } 
if($s3 == "MATHS"){ $s3 = "MATHEMATICS"; } 

if($s1 != "")
{
    $query1 = "INSERT INTO tutorsubjects VALUES('','$r','$s1','$v1','$o1','$c1')";
    $data1=mysqli_query($q,$query1);
    if($s2 != "")
    {
        $query2 = "INSERT INTO tutorsubjects VALUES('','$r','$s2','$v2','$o2','$c2')";
    $data2=mysqli_query($q,$query2);
    }
    if($s3 != "")
    {
        $query3 = "INSERT INTO tutorsubjects VALUES('','$r','$s3','$v3','$o3','$c3')";
    $data3=mysqli_query($q,$query3);
    }
    header("Location: tutorsprofile.php");
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

</head>

<body>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" style="font-size:10px " method="post" enctype="multipart/form-data" >
				<span class="contact100-form-title">
					Add Subject
				</span>
                <span class="label-input100" >
					<h4 style="padding-bottom:18px;"><b>*</b> A minimum of 1 Subject and Maximum of 3 Subjects can be added at a time.</h4>
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Subject</span><br>
					<select name="s1" class="input100" id="subjects">
    <option value="">SELECT</option>
      <option value="ACCOUNTANCY">ACCOUNTANCY</option>
    <option value="ARTS AND CRAFTS">ARTS AND CRAFTS</option>
    <option value="BENGALI">BENGALI</option>
    <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
    <option value="BIOLOGY">BIOLOGY</option>
    <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
    <option value="CHEMISTRY">CHEMISTRY</option>
    <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
    <option value="DRAWING AND PAINTING">DRAWING AND PAINTING</option>
    <option value="ECONOMICS">ECONOMICS</option>
    <option value="ENGLISH">ENGLISH</option>
    <option value="GEOGRAPHY">GEOGRAPHY</option>
    <option value="HINDI">HINDI</option>
    <option value="HISTORY">HISTORY</option>
    <option value="HUMANITICS">HUMANITICS</option>
    <option value="INFORMATICS PRACTICES">INFORMATICS PRACTICES</option>
    <option value="MATHEMATICS">MATHEMATICS</option>
    <option value="MUSIC">MUSIC</option>
    <option value="PHILOSOPHY">PHILOSOPHY</option>
    <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
    <option value="PHYSICS">PHYSICS</option>
    <option value="PSYCHOLOGY">PSYCHOLOGY</option>
    <option value="SANSKRIT">SANSKRIT</option>
    <option value="SCIENCE">SCIENCE</option>
    <option value="SOCIAL">SOCIAL</option>
    <option value="SOCIOLOGY">SOCIOLOGY</option>
    <option value="SPOKEN ENGLISH">SPOKEN ENGLISH</option>
    <option value="STENOGRAPHY">STENOGRAPHY</option>
        <option value="YOGA">YOGA</option>
                        </select>
                        <span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Video Link</span>
					<input class="input100" type="text" name="v1" placeholder="Enter The Video Url if you have any">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Classes you teach this Subject</span>
					<input class="input100" type="text" name="c1" placeholder="The classes you teach"  required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Online Classes</span>
					<div>
						<select class="selection-2" name="o1">
							
							<option class="selection-2" name="o1" value="yes">Yes</option>
							<option class="selection-2" name="o1" value="no">No</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Subject</span><br>
					<select name="s2" class="input100" id="subjects2">
    <option value="">SELECT</option>
      <option value="ACCOUNTANCY">ACCOUNTANCY</option>
    <option value="ARTS AND CRAFTS">ARTS AND CRAFTS</option>
    <option value="BENGALI">BENGALI</option>
    <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
    <option value="BIOLOGY">BIOLOGY</option>
    <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
    <option value="CHEMISTRY">CHEMISTRY</option>
    <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
    <option value="DRAWING AND PAINTING">DRAWING AND PAINTING</option>
    <option value="ECONOMICS">ECONOMICS</option>
    <option value="ENGLISH">ENGLISH</option>
    <option value="GEOGRAPHY">GEOGRAPHY</option>
    <option value="HINDI">HINDI</option>
    <option value="HISTORY">HISTORY</option>
    <option value="HUMANITICS">HUMANITICS</option>
    <option value="INFORMATICS PRACTICES">INFORMATICS PRACTICES</option>
    <option value="MATHEMATICS">MATHEMATICS</option>
    <option value="MUSIC">MUSIC</option>
    <option value="PHILOSOPHY">PHILOSOPHY</option>
    <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
    <option value="PHYSICS">PHYSICS</option>
    <option value="PSYCHOLOGY">PSYCHOLOGY</option>
    <option value="SANSKRIT">SANSKRIT</option>
    <option value="SCIENCE">SCIENCE</option>
    <option value="SOCIAL">SOCIAL</option>
    <option value="SOCIOLOGY">SOCIOLOGY</option>
    <option value="SPOKEN ENGLISH">SPOKEN ENGLISH</option>
    <option value="STENOGRAPHY">STENOGRAPHY</option>
        <option value="YOGA">YOGA</option>
                        </select>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Video Link</span>
					<input class="input100" type="text" name="v2" placeholder="Enter The Video Url if you have any">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Classes You teach this Subject</span>
					<input class="input100" type="text" name="c2" placeholder="The classes you teach">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Online Classes</span>
					<div>
						<select class="selection-2" name="o2">
							
							<option class="selection-2" name="o2" value="yes">Yes</option>
							<option class="selection-2" name="o2" value="no">No</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Subject</span><br>
					<select name="s3" class="input100" id="subjects3">
    <option value="">SELECT</option>
      <option value="ACCOUNTANCY">ACCOUNTANCY</option>
    <option value="ARTS AND CRAFTS">ARTS AND CRAFTS</option>
    <option value="BENGALI">BENGALI</option>
    <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
    <option value="BIOLOGY">BIOLOGY</option>
    <option value="BUSINESS STUDIES">BUSINESS STUDIES</option>
    <option value="CHEMISTRY">CHEMISTRY</option>
    <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
    <option value="DRAWING AND PAINTING">DRAWING AND PAINTING</option>
    <option value="ECONOMICS">ECONOMICS</option>
    <option value="ENGLISH">ENGLISH</option>
    <option value="GEOGRAPHY">GEOGRAPHY</option>
    <option value="HINDI">HINDI</option>
    <option value="HISTORY">HISTORY</option>
    <option value="HUMANITICS">HUMANITICS</option>
    <option value="INFORMATICS PRACTICES">INFORMATICS PRACTICES</option>
    <option value="MATHEMATICS">MATHEMATICS</option>
    <option value="MUSIC">MUSIC</option>
    <option value="PHILOSOPHY">PHILOSOPHY</option>
    <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
    <option value="PHYSICS">PHYSICS</option>
    <option value="PSYCHOLOGY">PSYCHOLOGY</option>
    <option value="SANSKRIT">SANSKRIT</option>
    <option value="SCIENCE">SCIENCE</option>
    <option value="SOCIAL">SOCIAL</option>
    <option value="SOCIOLOGY">SOCIOLOGY</option>
    <option value="SPOKEN ENGLISH">SPOKEN ENGLISH</option>
    <option value="STENOGRAPHY">STENOGRAPHY</option>
        <option value="YOGA">YOGA</option>
                        </select>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Video Link</span>
					<input class="input100" type="text" name="v3" placeholder="Enter The Video Url if you have any">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Classes you teach this Subject</span>
					<input class="input100" type="text" name="c3" placeholder="The classes you teach">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Online Classes</span>
					<div>
						<select class="selection-2" name="o3">
							
							<option class="selection-2" name="o3" value="yes">Yes</option>
							<option class="selection-2" name="o3" value="no">No</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
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

