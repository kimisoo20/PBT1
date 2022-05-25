<?php

include 'conn/conn.php'; 

//panggil balik value
$idno = $_REQUEST["idno"];
$Name = $_REQUEST["Name"];
$PhoneNo = $_REQUEST["PhoneNo"];
$IcNo = $_REQUEST["IcNo"];
$Email = $_REQUEST["Email"];
$Progname = $_REQUEST["Progname"];


//SQL coding
//simpan dlm database 
$sql = "UPDATE member_info SET Name = '$Name', PhoneNo = '$PhoneNo', IcNo = '$IcNo', Email = '$Email',Progname = '$Progname' WHERE idno='$idno'";


if ($conn->query($sql) === TRUE ) 
   {    
?>
<script>alert('Tahniah data berjaya diubah.')
   window.location = 'vieww.php'</script>
    //echo '<br>';
    
 <?php

}else{
  echo "Error:". $sql . "<br>"  .$conn ->error;
}
$conn->close();