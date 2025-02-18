<?php

session_start();
$link = mysqli_connect("localhost", "root", "", "phpmyadmin");
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
                            <a class="navbar-brand" href="aindex.html"><b>10Pm Productions</b></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index1.html">Home <span class="sr-only">(current)</span></a>
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
									 <li class="nav-item">
                                        <a class="nav-link" href="index.html">Logout</a>
                                    </li> 
                                </ul>
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
#$un1=$_SESSION["sessionun"];
#echo $un1; 

$sql="SELECT u_name,package,status FROM registration WHERE status='pending' || status='ongoing' ";

$result = mysqli_query($link, $sql);

echo "</br>";
echo "</br>";
echo "<center>";
 while($row = mysqli_fetch_assoc($result))
{

echo "NAME : ".$row['u_name']."&nbsp&nbsp&nbsp&nbsp";
echo "PACKAGE : ".$row['package']."&nbsp&nbsp&nbsp&nbsp";

echo "STATUS : ".$row['status']."&nbsp&nbsp&nbsp&nbsp";
?>
<form method="POST" action="updatestatus.php">
<input type="hidden" value="<?php echo $row['u_name'] ?>" name="hname"/>
<input type="radio" name="status" value="Pending">Pending
<input type="radio" name="status" value="Ongoing">Ongoing
<input type="radio" name="status" value="Completed">Completed
<input type="submit" value="Update Status" name="status" />
<a name="acancle" href="cancleorder()" >Cancle This Order </a>

</form>

<?php
echo "</br>";
} 	

echo "</center>";




?>