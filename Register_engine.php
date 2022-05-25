<?php
//CONNECTION TO DB
include 'conn/conn.php';

echo $Name=$_REQUEST['Name'];
echo '<br>';
echo $PhoneNo=$_REQUEST['PhoneNo'];
echo '<br>';
echo $IcNo=$_REQUEST['IcNo'];
echo '<br>';
echo $Email=$_REQUEST['Email'];
echo '<br>';
echo $Progname=$_REQUEST['Progname'];
echo '<br>';


//SIMPAN DALAM DB
$sql = " INSERT INTO member_info
(`Name`,`PhoneNo`,`IcNo`,`Email`,`Progname`)
VALUES ('$Name' ,'$PhoneNo','$IcNo','$Email','$Progname')";

if ($conn->query($sql) === TRUE){
   // echo "Tahniah berjaya simpan ke pangkalan data";
?>
<script>alert('Thank You for participate for our marathon program...')
window.location='Mainpage.php'</script>

<?php
	//header('Location:view.php');
}else{
	echo "Error: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>