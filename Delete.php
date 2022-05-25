<?php
//include connection
include 'conn/conn.php'; 

$idno = $_REQUEST['idno'];

$sql = "DELETE FROM `member_info` WHERE idno ='$idno'"; //will delete the selected data in member info

if ($conn->query($sql) === TRUE ) 
   {    
?>
<script>alert('Tahniah Data Berjaya Dipadamkan....') //will show alert if the data has been deleted
   window.location = 'vieww.php'</script>
     '<br>';
    
 <?php

}else{
  echo "Error:". $sql . "<br>"  .$conn ->error;
}
$conn->close();


?>
