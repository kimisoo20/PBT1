<?php
  include 'conn/conn.php';   # panggil database
  $search=$_REQUEST['search']  # create search to saearch
?>

<!DOCTYPE html>
<html>

<!-- The design are same with vieww.php page -->

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

html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

h3 { color: black; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0; }


h2 { color: black; font-family: 'Source Sans Pro', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }

@keyframes gradient {
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



a:hover {
  background-color: lightgreen;
}

.zui-table {
    border: solid 4px #61adad;
    border-collapse: collapse;
    border-spacing: 0;

    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #61adad;
    border: solid 4px #61adad;

    color: black;
    padding: 14px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
    text-align: center;
}
.zui-table tbody td {
    border: solid 2px #61adad;
    color: #333;
    padding: 14px;
    text-shadow: 1px 1px 1px #fff;
    background-color: #DDEFEF ;
}

.button {
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

.button:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}

.button-search {
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

.button-search:hover {
  box-shadow: rgba(255, 255, 255, 0.3) 0 0 2px inset, rgba(0, 0, 0, 0.4) 0 1px 2px;
  text-decoration: none;
  transition-duration: .15s, .15s;
}

.button-search:active {
  box-shadow: rgba(0, 0, 0, 0.15) 0 2px 4px inset, rgba(0, 0, 0, 0.4) 0 1px 1px;
}

.button-search:disabled {
  cursor: not-allowed;
  opacity: .6;
}

.button-search:disabled:active {
  pointer-events: none;
}

.button-search:disabled:hover {
  box-shadow: none;
}

</style>
<body>


<center>
<h2> WELCOME TO</h2>
<h2> ONLINE MARATHON REGISTRATION</h2>

<h2>MEMBER REGISTRATION LIST</h2>
</center>
<center>

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
</center>


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
    $bilangan = 1;
    $query="Select * from member_info WHERE name LIKE '%$search%'";  //To search data in member_info
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

  <tr>
    <td><?php echo $bilangan; ?></td>
    <td><?php echo $Name; ?> </td>
    <td><?php echo $PhoneNo; ?> </td>
    <td><?php echo $IcNo; ?> </td>
    <td><?php echo $Email; ?> </td>
    <td><?php echo $Progname; ?> </td>
    <td><a href="view2.php?id_no=<?php  echo $idno;?> ">View</a></td>
    <td><a href="Update.php?id_no=<?php echo $idno;?>">Update</td>
    <td><a href="Delete.php?idno=<?php echo $idno;?>">Delete</td>
  </tr>


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
<input type="submit" class="button" value="Register">
</center>

</form>


</body>
</html>
