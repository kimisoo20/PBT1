<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ECEFF2;
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

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<!-- NavBar -->
<div class="topnav" id="myTopnav">
  <a href="MainPage.php" >Home</a>
  <a href="ContactUs.php" class="active">Contact Us</a>
  <a href="FAQ.php">FAQ</a>
  <a href="RegisterMarathon.php">Register</a>

  
</div>




<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Do you have any question regarding the Marathon</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/map2.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="ContactUs.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="negeri">Negeri</label>
        <select id="negeri" name="negeri">
          <option value="Selangor">Selangor</option>
          <option value="Perak">Perak</option>
          <option value="Kelantan">Johor</option>
          <option value="Kelantan">Kedah</option>
          <option value="Kelantan">Perlis</option>
          <option value="Kelantan">Melaka</option>
          <option value="Kelantan">Pahang</option>
          <option value="Kelantan">Putrajaya</option>
          <option value="Kelantan">Negeri Sembilan</option>
          <option value="Kelantan">Sarawak</option>
          <option value="Kelantan">Sabah</option>
          <option value="Kelantan">Pulau Pinang</option>
          <option value="Kelantan">Terengganu</option>
          <option value="Kelantan">Putrajaya</option>

        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" onclick="myFunction()" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>

<script>
function myFunction() {
  alert("Your Question has been Submitted");
}
</script>


</html>
