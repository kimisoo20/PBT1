<?php
//include connection
include 'conn/conn.php'; 

$newid = $_REQUEST['id_no'];
?>
<html>
<style>



  html, body { /* style for html and body */
  width: 100%;
  height:100%;
}

body { /* style for body */
    background: linear-gradient(-45deg, #3fac7b, #1bcfab, #f5a5b7, #85d6de);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

h3 {/* style for header */
 color: black; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }


h2 { /* style for header */
  color: black; font-family: 'Source Sans Pro', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }

@keyframes gradient {  /* style for gradient background */
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }




}

.button {  /* style for button register */
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}


.button:hover {  /* style for button register */
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
  .zui-table {  /* style for table */
    border: solid 4px #61adad;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}

.zui-table tbody td {  /* style for table body and td */
    border: solid 3px #61adad;
    color: #333;
    padding: 14px;
    text-shadow: 1px 1px 1px #fff;
    background-color: #DDEFEF ;
}
  </style>

  <?php  //start looping
    
    $query="Select * from member_info where idno='$newid'"; //will select variable from the member info
    $result = mysqli_query($conn,$query);
  
    while($row = mysqli_fetch_assoc($result))
    {
      $idno = $row["idno"];
      $name = $row["Name"];
      $PhoneNo = $row["PhoneNo"];
      $IcNo = $row["IcNo"];
      $Email = $row["Email"];
      $Progname = $row["Progname"];
    
  ?>
<br></br>
  <center>
      <h2> WELCOME TO SERVER SIDE FOR</h2>
       <h3>VIEW MARATHON REGISTRATION LIST</h3></center>

       <br></br>
        <br></br>

    <center> 
    <body>

   <!-- call variable into the table column -->
   <!-- create table and form to place the called variable -->
   <form action="vieww.php" name="Form" method="GET">
    <table class="zui-table">
     <tr><td align="center">ID No</td><td><?php echo $idno;?></td></tr>

       <tr><td align="center">Name</td><td><?php echo $name;?></td></tr>

     <tr><td align="center">Phone Number</td><td><?php echo $PhoneNo;?></td></tr>

     <tr><td align="center">IC No</td><td><?php echo $IcNo;?></td></tr>

     <tr><td align="center">Email</td><td><?php echo $Email;?></td></tr>

     <tr><td align="center" >Program Name</td><td><?php echo $Progname;?></td></tr>

     
    
  </table>
  <br><center> <input type="submit" class="button" value="BACK"></center> 
  <!-- back button -->
</form>
      
      <?php

}

?>
       
    </center>

    </body>

   
</html>