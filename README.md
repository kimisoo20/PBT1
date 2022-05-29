 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  background-color: CadetBlue;
}
h1{
  margin-bottom: 100px;
}
]


/*Image Banner*/
.container {
  position: relative;
  
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.container:hover .image {
  opacity: 0.3;
}
.container:hover .middle {
  opacity: 1;
}
.text {
  background-color: tan;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>
<body>

<!-- NavBar -->
<?php include 'Page22.php'  ?>

<center>
<h1 style="text-align:center;"> WELCOME TO GREAT MALAYSIA MARATHON </h1>

<!-- Banner Image -->

<div class="container">
  <div class="column">
    <a href="program2.php">
    <img src="img/TshirtDesign/Banner.jpg" alt="Forest" class="image" width="100%" height="100%">
  </a>
    <div class="middle">
    <div class="text">Click Banner </div>
  </div>
  </div>
</div>


<div class="container">
<div class="row">
  <div class="column">
    <a href="Program1.php">
    <img src="img/TshirtDesign/Banner2.jpeg" alt="Snow" class="image" width="100%" height="100%">
  </a>
    <div class="middle">
    <div class="text">Click Banner </div>
  </div>
  </div>
</div>

</center>
</body>
</html>
