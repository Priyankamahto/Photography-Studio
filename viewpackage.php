<?php

session_start();
$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
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
<body>


    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="index.html"><h3><b>TenPm Productions</b></h3></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
									
									
									 <li class="nav-item active">
                                        <a class="nav-link" href="golden1.php">Packages <span class="sr-only">(current)</span></a>
                                    </li>
									
									<!-- <li class="nav-item active">
                                        <a class="nav-link" href="golden1.php">Packages <span class="sr-only">(current)</span></a>
                                    </li> -->
									
                                   <!--  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Packages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index.html">Silver</a>
                                            <a class="dropdown-item" href="about-me.html">Gold</a>
                                            <a class="dropdown-item" href="portfolio.html">Diamond</a>
                                            <a class="dropdown-item" href="blog.html">Platinium</a>
                                        <!--     <a class="dropdown-item" href="contact.html">Contact</a> 
                                            <a class="dropdown-item" href="elements.html">Elements</a>  
                                         --><!-- </div>
                                    </li> --> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-me.html">About</a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="viewpackage.php">View my Package</a>
                                    </li>
                              <!--        <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                               -->      <li class="nav-item">
                                        <a class="nav-link" href="contact.html">contact</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" href="logout.php">Logout</a>
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
	
	</body>
</html>
<?php

echo "</br>";
echo "</br>";
echo "<center>";

$un1=$_SESSION["sessionun"];
#echo $un1;
$sql= "SELECT package,status FROM registration WHERE u_name='$un1'";

$result = mysqli_query($link, $sql);

 while($row = mysqli_fetch_assoc($result))
{
echo "<b>PACKAGE Selected</b> : ".$row['package']."<br/>";

echo "<b>STATUS </b>: ".$row['status'];
} 	

echo "</center>";


?>