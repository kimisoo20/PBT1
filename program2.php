	<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	background-color: BlanchedAlmond;
}

/*NavBar*/
.active {
  background-color: tan;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: left;
  
}
li:last-child {
  border-right: none;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}

/*Text*/
.Tabout{
	background-color: NavajoWhite;
	width: 50%;
	margin-left: 480px;
}
.Tinfo{
	font-family: "Lucida Console", "Courier New", monospace;
	background-color: NavajoWhite;
	font-size: 28px;
	width: 50%;
	margin-left: 480px;
}

/*Big Title*/
.Title{
	font-family: 'Courier New', monospace;
	font-size: 25px;
}

/*Small Title*/
.STitle{
  font-family: 'Courier New', monospace;
  background-color: LightSalmon;
}
#divCenter {
  margin-left: auto; 
  margin-right: auto;
  width: 60%;
}

/*Button Register*/
.button {
  background-color: Gold; /* Gold */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  margin-left: auto; 
  margin-right: auto;
  width: 20%;
}
.btnHover:hover{
  background: LightYellow;
}

/*Long line*/
hr{
	border: 2px solid DarkGoldenrod;
}
.hrS{
	margin-top: 100px;
}

/*Table*/
table.center {
  margin-left: auto; 
  margin-right: auto;
  text-align: center;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: DarkGoldenrod;
  color: white;
}
</style>
</head>
<body>

<!-- NavBar -->
<ul>
  <li><a class="active" href="MainPage.php">Home</a></li>
  <li><a href="ContactUs.php">Contact Us</a></li>
  <li><a href="#news">FAQ</a></li>
  <li ><a href="RegisterMarathon.php">Register</a></li>
</ul>

<!-- Image Banner -->
<img src="img/TshirtDesign/Banner.jpg" alt="Banner" width="100%" height="100%">

<!-- Title -->
<center>
<div class="Title">
<h1>Virtual Run & Ride For Mental Health 2022</h1>
<hr width="600">
</div>
</center>

<!-- Register Button -->
<center>
<button class="button btnHover" onclick="window.location.href = 'RegisterMarathon.php';">REGISTER NOW !!!</button>
</center>

<!-- long line -->
<div class="hrS">
<hr>
</div>

<!-- Text -->
<div class="Tabout">
Join us for a virtual charity RUN or RIDE! Participate anytime and anywhere to support the Malaysian Mental Health Association (MMHA).

<div>&nbsp;</div>

The Malaysian Mental Health Association (MMHA) is a non-profit Non-Government Organisation registered under the Societies Act 1966 MMHA is managed by an elected committee of interested persons and professionals in the community, including caregivers of persons living with mental disorders.

<div>&nbsp;</div>

MMHA aims to promote mental well-being in the community whilst supporting people with mental health disorders and their caregivers through assistance in service provision, education, training, research and advocacy.

<div>&nbsp;</div>

They believe in a nation that values mental wellbeing, where people with mental health conditions are supported and live fulfilling lives, free from stigma and discrimination.

<div>&nbsp;</div>

<div>Objectives of MMHA:</div>

<div>&nbsp;</div>

-To promote mental health in the community.<br /> -To help raise the standard of treatment, prevention and research in the field of mental health.<br /> -To provide rehabilitative services for the mentally ill.<br /> -To safeguard the interests and welfare of psychiatric patients.<br /> -To support caregivers and family members of mentally ill persons.

<div>&nbsp;</div>

No matter your level of fitness, your participation will make a huge difference to the charity. Stay fit and help change lives!

<div>&nbsp;</div>

This Charity Virtual Run is organised by VSURE TECH SDN BHD

<div>&nbsp;</div>

Venue:<br /> Anywhere <br /> * Please obey the current Movement Control Order in your area and social distancing rules.<br /> #VSureRunRide #MMHA #VsureLife

<div>&nbsp;</div>

*Register for 'early bird registration' to get your T-shirt and race-kit before the event date (register before 31 March 2022)<br /> *First 200 participants will get an extra mystery gift

<div>&nbsp;</div>

How to submit your results? It's simple!<br /> Screenshot your tracking device/app showing the distance completed.<br /> Send your results along with your name &amp; registration ID to myvrmarathon@vsure.life

<div>&nbsp;</div>

<div>Let's do fitness for charity!</div>
</div>

<!-- Small Title -->
<center>
<div class="STitle" id="divCenter">
<h1 >Event Info </h1>
</div>
</center>

<!-- Info Marathon -->
<div class="Tinfo">
<p>Venue: Any where in your safe place<br />Time : Any Time<br />Event date : 27 May - 29 May 2022<br />Register closing date : 22 May 2022</p>
</div>

<!-- Small Title -->
<center>
<div class="STitle" id="divCenter">
<h1 >Category and Fee</h1>
</div>
</center>

<!-- Table -->
<table class="center" id="customers" text-align="center" >
  <tr >
    <th>Category</th>
    <th >Registration Fee</th>
    <th>Entitlement</th>
  </tr>
  <tr>
    <td>5 KM Run</td>
    <td>RM 50</td>
    <td>E-certificate + T-shirt</td>
  </tr>
  <tr>
   <td>10 KM Run</td>
    <td>RM 60</td>
    <td>E-certificate + T-shirt + drawstring bag</td>
  </tr>
  <tr>
    <td>30 KM Ride</td>
    <td>RM 50</td>
    <td>E-certificate + T-shirt</td>
  </tr>
  <tr>
    <td>50 KM Ride</td>
    <td>RM 60</td>
    <td>E-certificate + T-shirt + drawstring bag</td>
  </tr>
  <tr>
    <td>Shirt only</td>
    <td>RM 45</td>
    <td>Blue or White colour</td>
  </tr>
</table>

<!-- Small Title -->
<center>
<div class="STitle" id="divCenter">
<h1 >Runner Entitlement</h1>
</div>
</center>

<!-- Image  -->
<center>
<img src="img/TshirtDesign/RunnerEntitlement.jpg" alt="Banner" width="50%" height="100%">
<img src="img/TshirtDesign/RunnerEntitlement2.jpg" alt="Banner" width="50%" height="100%">
</center>

<!-- Small Title -->
<center>
<div class="STitle" id="divCenter">
<h1 >T-Shirt Design </h1>
</div>
</center>

<!-- Image -->
<center>
<img src="img/TshirtDesign/TshirtDesign.jpg" alt="Banner" width="50%" height="100%">
</center>

</body>
</html>

