<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$un1=$_SESSION["sessionun"];

#echo $un1;
$sql= "UPDATE registration SET package='Diamond' WHERE u_name='$un1'";

if(mysqli_query($link, $sql)){
    $message = "Package Added.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
   ?>
 
 <script language="javascript">
    window.location.href = "http://localhost/studio/cindex.php"
</script>  
 <?php 
  
}	

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>