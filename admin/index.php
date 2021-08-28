<!DOCTYPE html>
<html lang="en">

<head>
<?php
     static  $r=0;
    session_start();
   
$user=$_SESSION['user'];
    if(isset($user))
    {
    
    
    
    
    ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iDO - A place for all your needs</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
<meta http-equiv="refresh" content="40"; url="<?php echo $_SERVER['PHP_SELF']; ?>">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">iDO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin_neworders.php">Received Orders</a>
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin_completedorders.php">Completed Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin_notes.php">Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"> iDO</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"> A place for all your needs</h2>
        <a href="admin_neworders.php" class="btn btn-primary js-scroll-trigger">Check Orders</a>
         <br> <h4 class="text-white-50 mx-auto mt-2 mb-5" style="padding-top:10px">Today's Orders</h4>
          
           <br> <h4 class="text-white-50 mx-auto mt-2 mb-5" >
          <?php
         
          require "connect.php";
          
          $t=date('Y-m-d');
           $query ="SELECT * FROM BOOKING_TBL WHERE DATE='$t'";
$data5=mysqli_query($con,$query);
      while($r5=mysqli_fetch_assoc($data5))
{
          $name = $r5['name'];
          $r=$r+1;
      }
          
          echo $r;
          
          ?>
          </h4>
      </div>
        <div id="chartContainer" style="height:40%; width:43%;padding-left:30px;"></div>
    </div>
	
  </header>

  <!-- About Section -->
<!--
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
          <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>
-->

  <?php
  
   
  
 
 $a=array();
 
 for($i=0;$i<16;$i++)
 {
	$a[$i]= date('d/m',strtotime("-$i days"));
 
 
 }	 
 for($k=0;$k<16;$k++)
 {
	$b[$k]= date('Y/m/d',strtotime("-$k days"));
 
 
 }	 
 require "connect.php";
 $query=array();
 $data=array();
 $data1=array();
  for($j=0;$j<16;$j++)
  {
$data1[$j]=0;
 $query[$j]="SELECT * FROM booking_tbl WHERE date='$b[$j]'";
 $data[$j]=mysqli_query($con,$query[$j]);
while($r5=mysqli_fetch_assoc($data[$j]))
{
        
          $data1[$j]=$data1[$j]+1;
      }

	  }

$dataPoints = array(
	
	array("label"=> $a[15], "y"=>$data1[15]),
	array("label"=> $a[14], "y"=> $data1[14]),
	array("label"=> $a[13], "y"=>$data1[13]),
	array("label"=> $a[12], "y"=> $data1[12]),
	array("label"=> $a[11], "y"=> $data1[11]),
    array("label"=> $a[10], "y"=> $data1[10]),
	array("label"=> $a[9], "y"=> $data1[9]),
	array("label"=> $a[8], "y"=> $data1[8]),
	array("label"=> $a[7], "y"=> $data1[7]),
	array("label"=> $a[6], "y"=> $data1[6]),
	array("label"=> $a[5], "y"=> $data1[5]),
	array("label"=> $a[4], "y"=> $data1[4]),
	array("label"=> $a[3], "y"=> $data1[3]),
    array("label"=>$a[2], "y"=> $data1[2]),
	array("label"=>$a[1], "y"=> $data1[1]),
	array("label"=>$a[0], "y"=> $data1[0]),
);
 
	
?>



<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "theme2",

	
	title:{
		text: "ORDER'S GRAPH"
	},
	axisX:{
		title: "Date",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY:{
		title: "Orders",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	toolTip:{
		enabled: false
	},
	data: [{
		type: "area",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
  

    







  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

    
    <?php
    }
    else
    {
        header('location:admin_login.php');
    }
        
        ?>
</body>

</html>
