<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 </head>

 <style> /*style for website*/
 h1{
  text-align: center;
  font-size: 2em !important;
 }
#table1 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

#table1 td, #table1 th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  background-color: #000000 ;
}

#table1 tr:nth-child(even){background-color: #f2f2f2;}

#table1 tr:hover {background-color: #ddd;}

#table1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #F80101 ;
  color: white;
   text-align: center;
}

hr.rounded{
  border-top: 8px solid #FD2828;
  border-radius: 5px;
}
p{

}
/* style for text info*/
.sidebar{
   width:60%;
   height:200%;
    padding: 15px;
   background-color: white;
   background-position:center;
   background-repeat: no-repeat;
     background-size:cover;
     margin-left: auto;
     margin-right: auto;
   font-family:Arial;
   font-size:15px;
   }
   

.sidebar2{
   width:23%;
   height:30%;
    
   background-color: white;
   background-position:center;
   background-repeat: no-repeat;
     background-size:cover;
     margin-left: auto;
     margin-right: auto;
   font-family:Arial;
   font-size:15px;
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


 </style>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 <body>
  <?php include 'Page22.php'  ?>

<img src="img/prog2/banner1.jpg" alt="Trulli" width="100%" height="600"><!--add banner-->
  
  <h1> TRR SPIN RUN 2022 </h1>

  <!-- Register Button -->
<center>
<button class="button btnHover" onclick="window.location.href = 'RegisterMarathon.php';">REGISTER NOW !!!</button>
</center>

<hr class="rounded"><!-- add line -->


<div class="sidebar">
<font color="Black">
  <p><b>Step Forward And Run Again</b><br>
❖ Step Forward And Run Again” is the underlying message of TRR SPIN RUN TAIPING 2022.<br>

❖ An unprecedented and unpredictable 2 year affecting most if not everyone in every corner of the world. Let us have faith that 2022 will be a brighter year. As always, nights will be dark, but days will be light. Stay positive and healthy.<br>

❖ How long has it been since I sweated and sweated because of the run, how long has it been since I felt the wind because of the pace and how long has it been for challenging the road ahead? …… and create opportunity for yourself to rebuilt your strength!<br>

❖ Life is constantly becoming interesting, it must be on the road, take action, run, make life more exciting, and create strength for yourself! Because running is not only exercise, but also a spirit of breaking through yourself!</p>

<p><b>Why Taiping ?</b><br>
❖ Taiping has been recognised as among the top three sustainable cities in the world<br>

❖ Taiping known for its well-preserved colonial architecture<br>

❖ Taiping Lake Gardens, a public park with Angsana trees and a lotus pond, was established in 1880 on the site of an old tin mine.<br>

❖ Taiping Zoo breeds endangered species such as the Malayan tiger.<br>

❖ Taping museum displays indigenous crafts, tribal artefact's and animal skeletons in a 19th century building.<br>

</p>

<p><b>Objectives</b><br>
❖ Promote Taiping into a running and runners’ state<br>

❖ Commemorating a positive, healthy, fun lifestyle and drive Taiping local’s in taking part in a beneficial event.<br>

❖ Promote unity and understanding of different cultures through sports in Taiping as well as Malaysia<br>

❖ To boost the Taiping tourism industry to truly showcase the essence of Taiping, Perak.<br>

❖ Thriving and spearheading a professionally orchestrated event with the local running community</p></font></div>

<center>
<div class="w3-panel w3-black"> <!-- add black panel with text-->
  <h3><b>Race information</b></h3>
</div> </center>

<div class="sidebar2"><!-- call class-->
<font color="Black">
  <p><b>Event</b> : TRR Spin Run Taiping 2022<br>
    <b>Date</b> : 23 October 2022<br>
    <b>Venue</b> : Padang Esplanade Taiping,Perak<br></p>
  </font></div>

<center><div class="w3-panel w3-black"><!-- add black panel with text -->
  <h3><b>Categories & Fee</b></h3>
</div> 
  <p>Early bird until 8th May 2022</p></center>


<center>
  <font color="white"><!-- create table-->
<table id="table1">
  <tr>
    <th>Categories</th>
    <th>Start Time</th>
    <th>Cut-Off</th>
     <th>Early Bird</th>
    <th>Normal</th>
  </tr>
  <tr>
    <td>30km</td>
    <td>4.40 am</td>
    <td>5.0 hours</td>
     <td>RM95</td>
    <td>RM105</td>
  </tr>
  <tr>
    <td>15km</td>
    <td>6.30 am</td>
    <td>2.5 hours</td>
     <td>RM75</td>
    <td>RM85</td>
  </tr>
  <tr>
     <td>5km FunFun/Walkkm</td>
    <td>6.45 am</td>
    <td>1.5 hours</td>
     <td>RM55</td>
    <td>RM65</td>
  </tr>
 
</table> 
<br>
<table id="table1"><!-- create table-->
  
  <tr>
    <td>A</td>
    <td>MEN OPEN</td>
    <td>16 years & above</td>
  </tr>
   <tr>
    <td>B</td>
    <td>MEN VETERAN</td>
    <td>45 years & above</td>
  </tr>
  <tr>
    <td>C</td>
    <td>WOMEN OPEN</td>
    <td>16 years & above</td>
  </tr>
   <tr>
    <td>D</td>
    <td>WOMEN VETERAN</td>
    <td>45 years & above</td>
  </tr>
   <tr>
    <td>E</td>
    <td>MEN OPEN</td>
    <td>16 years & above</td>
  </tr>
  <tr>
    <td>F</td>
    <td>MEN VETERAN</td>
    <td>45 years & above</td>
  </tr>
    <tr>
    <td>G</td>
    <td>WOMEN OPEN</td>
    <td>16 years & above</td>
  </tr>
    <tr>
    <td>H</td>
    <td>WOMEN VETERAN</td>
    <td>45 years & above</td>
  </tr>
 
</table> 
<br>

<center><div class="w3-panel w3-black">
  <h3><b>Winner's Prize</b></h3>
</div> </center>
<table id="table1"><!-- create table-->
  <tr>
    <th>30km</th>
    <th>1st</th>
    <th>2nd</th>
     <th>3rd</th>
    <th>4th</th>
    <th>5th</th>
     <th>6th-10th</th>
  </tr>
  <tr>
    <td>A-Men Open</td>
    <td>500</td>
    <td>400</td>
     <td>300</td>
    <td>150</td>
    <td>150</td>
    <td>Trophy</td>
  </tr>
  <tr>
    <td>B-Men Veteran</td>
    <td>500</td>
    <td>400</td>
     <td>300</td>
    <td>150</td>
   <td>150</td>
    <td>Trophy</td>
  </tr>
  <tr>
     <td>C-Women Open</td>
    <td>500</td>
    <td>400</td>
     <td>300</td>
    <td>150</td>
     <td>150</td>
    <td>Trophy</td>
  </tr>
   <tr>
     <td>D-Women Veteran</td>
    <td>500</td>
    <td>400</td>
     <td>300</td>
    <td>150</td>
   <td>150</td>
    <td>Trophy</td>
  </tr>
 
 
</table> 
<br>
<table id="table1"><!-- create table-->
  <tr>
    <th>15km</th>
    <th>1st</th>
    <th>2nd</th>
     <th>3rd</th>
    <th>4th</th>
    <th>5th</th>
     <th>6th-10th</th>
  </tr>
  <tr>
    <td>E-Men Open</td>
    <td>200</td>
    <td>150</td>
     <td>100</td>
    <td>50</td>
   <td>50</td>
    <td>Trophy</td>
  </tr>
  <tr>
    <td>F-Men Veteran</td>
    <td>200</td>
    <td>150</td>
     <td>100</td>
    <td>50</td>
   <td>50</td>
    <td>Trophy</td>
  </tr>
  <tr>
     <td>G-Women Open</td>
    <td>200</td>
    <td>150</td>
     <td>100</td>
    <td>50</td>
    <td>50</td>
    <td>Trophy</td>
  </tr>
   <tr>
     <td>H-Women Veteran</td>
    <td>200</td>
    <td>150</td>
     <td>100</td>
    <td>50</td>
   <td>50</td>
    <td>Trophy</td>
  </tr>
 
 
</table> 
</font>
<br>
</center>
<br>
<center><div class="w3-panel w3-black"><!-- add panel -->
  <h3><b>T-Shirt & Size Chart</b></h3>
</div> </center>

<center><!-- add images -->
<img src="img/prog2/baju1.jpg" alt="Trulli" width="50%" height="50%"><br><br>

<img src="img/prog2/baju2.jpg" alt="Trulli" width="50%" height="50%"><br><br>

<img src="img/prog2/baju3.jpg" alt="Trulli" width="50%" height="50%"><br><br>
</center>

<center><div class="w3-panel w3-black">
  <h3><b>Finisher Medals</b></h3>
</div> </center>

<center>
<img src="img/prog2/medal.jpg" alt="Trulli" width="50%" height="50%"><br><br>

<img src="img/prog2/medal2.jpg" alt="Trulli" width="50%" height="50%"><br>

</center>
</body>
</html>




 </body>
 </html>