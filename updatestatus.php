	<?php
 
$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
 
if(isset($_POST['status'])){
		$uuname=$_POST['hname'];
		echo $uuname;
		session_start();
		$_SESSION["mn"]=$uuname;
}
/* if(isset($_POST['submit'])){
 echo	$s=$_POST['status'];
		echo $uuname; */
	
/* 	$sql="update registration set status='$s' where u_name='$uuname";
	$result = mysqli_query($link, $sql); */
	

?>
<script language="javascript">
    window.location.href = "http://localhost/studio/updatestatus1.php";
</script> 		
	

