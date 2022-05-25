<?php
//include connection
include 'conn/conn.php'; 

$newid = $_REQUEST['id_no'];
?>
<html>

  <?php  //start looping
    
    $query="Select * from member_info where idno='$newid'";
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
    
   
      <center>
      <h2> WELCOME TO SERVER SIDE FOR</h2>
       <h3>UPDATE MARATHON REGISTRATION LIST</h3></center>
      

    <center> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
         <form action="updateengine.php" name="page update" method="GET"> 
      <h2>Marathon Registration(UPDATE)</h2>

          <label>ID NO</label>
          <input type="text" name="idno" placeholder="ID Number" value="<?php echo $idno;?>" readonly="readonly"><br>


         <label>Name</label>
          <input type = "text" name="Name" placeholder="Name" value="<?php echo $name;?>"><br>

         <label>Phone Number</label>
          <input type="text"  name="PhoneNo"  placeholder="Phone Number" required="required" value="<?php echo $PhoneNo;?>"><br>
            
         <label>Ic Number</label>            
          <input type="text"   name="IcNo"  placeholder="Ic Number" required="required" value ="<?php echo $IcNo;?>"><br>                      

          <label>Email</label>
          <input type="text" name="Email" placeholder="Email" required="required" value="<?php echo $Email;?>"><br>
               
          <label>Program Name </label>
          <input type="text"   name="Progname"   placeholder="Program Name" required="required" value="<?php echo $Progname;?>"><br>
                      

     <?php
}

?>
       
    </center>

     
   <br><center> <input type="submit" value="UPDATE"></center>
    </form>



    </body>
</html>