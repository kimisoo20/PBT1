<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action ="Register_engine.php" name="Form" method="get">
     	<h2>Marathon Registration</h2>
     
         <label>Name</label>
          <input type="text" name="Name" placeholder="Full Name" required="required"><br>
        
         <label>Phone Number</label>
          <input type="text"  name="PhoneNo"  placeholder="Phone Number" required="required"><br>
            
         <label>Ic Number</label>            
          <input type="text"   name="IcNo"  placeholder="Ic Number" required="required"><br>      
                

          <label>Email</label>
          <input type="text" name="Email" placeholder="Email" required="required"><br>
               
          <label>Program Name </label>
          <input type="text"   name="Progname"   placeholder="Program Name" required="required"><br>
               
     	<button type="submit" onsubmit="myButton()">REGISTER</button>
        
     </form>
     <script>

</script>
</body>
</html>