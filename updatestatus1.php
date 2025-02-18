<?php
session_start();
$n=$_SESSION["mn"];
#echo "hello".$n;
error_reporting(0);

$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

{
 	$s=$_POST['status'];

	
 	$sql="update registration set status='$s' where u_name='$n'";
	if($result = mysqli_query($link, $sql)){
			$message = "Status Updated";
  echo "<script type='text/javascript'>alert('$message');</script>";
	
		?>	
	<script language="javascript">
    window.location.href = "http://localhost/studio/vieworders.php";
</script> 		
	
	<?php
	}
}

?>



