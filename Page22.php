<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.btnStyle {
    border-radius: 4px;
    border: medium solid #000000;
    background-color:rgb(92, 250, 246);
    font-family: "Arial", Impact, Charcoal, sans-serif;
    font-weight: bold;
    font-size:20px;
    color: #ffffff;
    padding: 5px 30px;
    margin:8px 70px;
}

#loginbtn{
    position: fixed;
    right: 5px;
    text-shadow: 2px 2px 4px black;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="MainPage.php" class="active">Home</a>
  <a href="ContactUs.php">Contact Us</a>
  <a href="FAQ.php">FAQ</a>
  <a href="RegisterMarathon.php">Register</a>

 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>