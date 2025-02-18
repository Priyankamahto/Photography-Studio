<?php 

$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST['submit'])):
	$name=  $_POST['pname'];
	$duration=$_POST['duration'];
	$location=$_POST['location'];
	$softcopy=$_POST['softcopy'];
	$prephotos=$_POST['prephotos'];
	$quality=$_POST['quality'];
	$video=$_POST['video'];
	$price=$_POST['price'];
			
	$sql="INSERT INTO `tenpm`.`add_package` (`p_name`, `duration`, `location`, `softcopy`, `pre_photos`, `quality`, `video`, `price`) VALUES ('$name', '$duration', '$location', '$softcopy', '$prephotos', '$quality', '$video', '$price');";		
	mysqli_query($link,$sql);	
	
		$message = "Package added";
  echo "<script type='text/javascript'>alert('$message');</script>";
	
		?>	
	<script language="javascript">
    window.location.href = "http://localhost/studio/aindex.html";
</script> 		
	
	<?php
	
	
endif;







?>

<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 
 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 <link rel="stylesheet" href="ssss.css">

 
 <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

	
	<style>
	

	
	</style>
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">


</head>
<style>
* {
  margin: 0;
  padding: 0;
}

body {
  background: white;
  color: #435160;
  font-family: "Open Sans", sans-serif;
}

h2 {
  color: #6D7781;
  font-family: "Sofia", cursive;
  font-size: 15px;
  font-weight: bold;
  font-size: 3.6em;
  text-align: center;
  margin-bottom: 20px;
}

a {
  color: #435160;
  text-decoration: none;
}

.login {
  width: 350px;
  position: absolute;
  top: 10%;
  left: 50%;
  margin-left: -175px;
}

input[type="text"], input[type="password"] {
  width: 350px;
  padding: 20px 0px;
  background: transparent;
  border: 0;
  border-bottom: 1px solid #435160;
  outline: none;
  color: #6D7781;
  font-size: 16px;
}
input[type=checkbox] {
  display: none;
}

label {
  display: block;
  position: absolute;
  margin-right: 10px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: transparent;
  content: "";
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  border: 3px solid #435160;
}

#agree:checked ~ label[for=agree] {
  background: #435160;
}

input[type="submit"] {
  background: #1FCE6D;
  border: 0;
  width: 350px;
  height: 40px;
  border-radius: 3px;
  color: #fff;
  font-size: 12px;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
input[type="submit"]:hover {
  background: #16aa56;
  animation-name: shake;
}

.forgot {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
}
.forgot:hover {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
  color: #6D7781;
}

.agree {
  padding: 30px 0px;
  font-size: 12px;
  text-indent: 25px;
  line-height: 15px;
}

::-webkit-input-placeholder {
  color: #435160;
  font-size: 12px;
}

.animated {
  animation-fill-mode: both;
  animation-duration: 1s;
}

@keyframes shake {
  0%, 100% {
    transform: translateX(0);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translateX(-10px);
  }
  20%, 40%, 60%, 80% {
    transform: translateX(10px);
  }
}


</style>

</head>
<body>
<!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="aindex.html"><b>10Pm Productions</b></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="aindex.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
									
									<li class="nav-item active">
                                        <a class="nav-link" href="golden1.php">Packages <span class="sr-only">(current)</span></a>
                                    </li>
                                   
								   <li class="nav-item active">
                                        <a class="nav-link" href="adminpackages.php"> Add Package <span class="sr-only">(current)</span></a>
                                    </li>
									
									<li class="nav-item active">
                                        <a class="nav-link" href="removepackages.php">Remove Package <span class="sr-only">(current)</span></a>
                                    </li>
								   
                                    <li class="nav-item">
                                        <a class="nav-link" href="vieworders.php">View Orders</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                                    </li> -->
                              <!--        <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                               -->     <!--  <li class="nav-item">
                                        <a class="nav-link" href="contact.html">contact</a>
                                    </li> -->
									 <li class="nav-item">
                                        <a class="nav-link" href="index.html">Logout</a>
                                    </li> 
                                </ul>
                                <!-- Search Form -->
                               <!--  <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                --> <!-- Search btn -->
                               <!--  <div id="searchbtn">
                                    <img src="img/core-img/search.png" alt="">
                                </div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



<form method="post">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<div class='login'>
  <h2>Add Packages</h2>
  <input name='pname' placeholder='Package Name' type='text'>
  <input name='duration' placeholder='Duration' type='text'>
  <input  name='location' placeholder='Location' type='text'>
  <input name='softcopy' placeholder='No of Softcopy' type='text'>
  <input name='prephotos' placeholder='No of pre-wedding photos' type='text'>
  <input name='quality' placeholder='Quality' type='text'>
  <input name='video' placeholder='Video' type='text'>
  <input name='price' placeholder='Price' type='text'>
  
  <!--<div class='agree'>
    <input id='agree' name='agree' type='checkbox'>
    <label for='agree'></label>Accept rules and conditions
  </div> -->
  <input class='animated' type='submit' name="submit" value='Add Package'>
  
</div>
</form>
  
</body>
</html>

<?php



?>