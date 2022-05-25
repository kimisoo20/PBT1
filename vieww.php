<?php
  include 'conn/conn.php';   # panggil database
?>

<!DOCTYPE html>
<html>
<style>

/* visited link */
a:visited {
  color: green;
  font-weight: bold ;
}

/* unvisited link */
a:link {
  color: green;
  font-weight: bold ;
}

html, body {  /* style for html and body */
  width: 100%;
  height:100%;
}

body { /* style for body */
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

h3 { /* style for header */
  color: black; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }


h2 { /* style for header */
 color: black; font-family: 'Source Sans Pro', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }

@keyframes gradient { /* style for gradient background */

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



a:hover { /* style for link href */
  background-color: lightgreen;
}

.zui-table { /* style for tabble */
    border: solid 4px #61adad;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}

.search-table { /* style for search table */
    border: solid 0px;
    border-width: 85%;  
        
}

.zui-table thead th {  /* style for table th */
    background-color: #61adad;
    border: solid 4px #61adad;
    color: black;
    padding: 14px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
    text-align: center;
}
.zui-table tbody td {  /* style for table body and td */
    border: solid 2px #61adad;
    color: #333;
    padding: 14px;
    text-shadow: 1px 1px 1px #fff;
    background-color: #DDEFEF ;
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

.button-search {  /* style for button search */
  background-color: #36A9AE;
  background-image: linear-gradient(#37ADB2, #329CA0);
  border: 1px solid #2A8387;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, 0.12) 0 1px 1px;
  color: #FFFFFF;
  cursor: pointer;
  display: block;
  font-family: -apple-system,".SFNSDisplay-Regular","Helvetica Neue",Helvetica,Arial,sans-serif;
  line-height: 100%;
  margin: 0;
  outline: 0;
  padding: 11px 15px 12px;
  text-align: center;
  transition: box-shadow .05s ease-in-out,opacity .05s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
}

.button-search:hover {  /* style for button search */
  box-shadow: rgba(255, 255, 255, 0.3) 0 0 2px inset, rgba(0, 0, 0, 0.4) 0 1px 2px;
  text-decoration: none;
  transition-duration: .15s, .15s;
}

.button-search:active {  /* style for button search */
  box-shadow: rgba(0, 0, 0, 0.15) 0 2px 4px inset, rgba(0, 0, 0, 0.4) 0 1px 1px;
}

.button-search:disabled {  /* style for button search */
  cursor: not-allowed;
  opacity: .6;
}

.button-search:disabled:active {  /* style for button search */
  pointer-events: none;
}

.button-search:disabled:hover {  /* style for button search */
  box-shadow: none;
}

</style>
<body>


<center> 
  <!-- header -->
<h2> WELCOME TO</h2>
<h2> ONLINE MARATHON REGISTRATION</h2>

<h2>MEMBER REGISTRATION LIST</h2>
</center>


<!-- form action and button for search -->
<form action="search.php" method="get">
<table class="search-table" align="center" >
  <tbody>
  <tr>
    <th align="right"> <button class="button-search">Search:</button>
      <br>
     <input type="search" id="search" name="search">
    </th>
  </tr>
</tbody>
</table>
</form>

<br>

<!-- form action and table for registration list -->
<form action="RegisterMarathon.php" name="Form" method="get"> 
  <center>
<table class="zui-table">
  <thead>
    <th>No</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>IC Number</th>
    <th>Email</th>
    <th>Program Name</th>
    <th>VIEW</th>
    <th>UPDATE</th>
    <th>DELETE</th>
  </tr>
</thead>

  

  <?php  //start looping
    $bilangan = 1; //variable for no in table
    $query="Select * from member_info"; //will select variable from the member info
    $result = mysqli_query($conn,$query); 
    $notempty = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result))
    {
      $idno = $row["idno"];
      $Name = $row["Name"];
      $PhoneNo = $row["PhoneNo"];
      $IcNo = $row["IcNo"];
      $Email = $row["Email"];
      $Progname = $row["Progname"];
      
  ?>
<!-- call variable into the table column -->
  <tr>
    <td><?php echo $bilangan; ?></td>
    <td><?php echo $Name; ?> </td>
    <td><?php echo $PhoneNo; ?> </td>
    <td><?php echo $IcNo; ?> </td>
    <td><?php echo $Email; ?> </td>
    <td><?php echo $Progname; ?> </td>
    <td><a href="view2.php?id_no=<?php  echo $idno;?> ">View</a></td> <!-- link to view2 page -->
    <td><a href="Update.php?id_no=<?php echo $idno;?>">Update</td><!-- link to update page -->
    <td><a href="Delete.php?idno=<?php echo $idno;?>">Delete</td><!-- link to delete page -->
  </tr>

<!-- loop for no in table -->
<?php
//end looping
$bilangan++;
}

if($notempty==0){
?>

  <tr>
    <td colspan="8" align="center">No data in database</td>
    </tr>

<?php
}?>


</table>
<br>
<input type="submit" class="button" value="Register"> <!-- register submit button -->
</center>

</form>


</body>
</html>
