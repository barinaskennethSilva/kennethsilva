<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Portfolio";*/

$conn = mysqli_connect("localhost","root","","Portfolio");

if ($conn === false) {
  die("error:cannot connect in database". mysqli_connect_error());
}

$Name = $_REQUEST["Name"];
$EmailAddress = $_REQUEST["EmailAddress"];
$Subject = $_REQUEST['Subject'];
$NotifChat = $_REQUEST['NotifChat'];

/*$sql = "INSERT INTO Admin VALUES ('$Name','$Email',$Subject,'$message')";*/
$sql = "INSERT INTO Admin VALUES ('$Name','$EmailAddress','$Subject','$NotifChat')"; 
if(mysqli_query($conn, $sql)){ 
  echo '<script>alert("Your message already send!")</script>'; 
}else{
echo"ERROR: Hush! Sorry $sql. " 

                . mysqli_error($conn); 
}
mysqli_close($conn); 
?>