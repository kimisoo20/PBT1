<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<style>
  /* Style inputs */
  *, *:before, *:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}
html {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  margin: 0;
  padding: 0;
  font-family: 'Hind', sans-serif;
  background: #fff;
  color: #4d5974;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  min-height: 100vh;
}
/* Style the container/contact section */
.container {
  margin: 0 auto;
  padding: 4rem;
  width: 100rem;
}
h3 {
  font-size: 1.75rem;
  color: #373d51;
  padding: 1.3rem;
  margin: 0;
}
/* Style the accordion style */
.accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border-bottom: 1px solid #e5e5e5;
}
.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  color: #ff5353;
}
.accordion a:hover::after {
  border: 1px solid #ff5353;
}
.accordion a.active {
  color: #ff5353;
  border-bottom: 1px solid #ff5353;
}
.accordion a::after {
  font-family: 'Ionicons';
  content: '\f218';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: #7288a2;
  padding: 5px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  border: 1px solid #7288a2;
  text-align: center;
}
.accordion a.active::after {
  font-family: 'Ionicons';
  content: '\f209';
  color: #ff5353;
  border: 1px solid #ff5353;
}
.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}
.accordion .content p {
  font-size: 1rem;
  font-weight: 300;
}
.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
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

 


 <!-- navigation bar -->
  <div class="topnav" id="myTopnav">
  <a href="MainPage.php">Home</a>
  <a href="ContactUs.php">Contact Us</a>
  <a href="FAQ.php" class="active">FAQ</a>
  <a href="RegisterMarathon.php">Register</a>

 <!-- container style -->
  <!-- text color using whitesmoke -->
  <div class="container">
    <center>
  <h2 style = "color:whitesmoke;">Frequently Asked Questions</h2>
</center>
 
  <!-- using accordion class  -->
  <div class="accordion">
    <div class="accordion-item">
      <a> What if I want custom gear?</a>
      <div class="content">
        <p style = "color:whitesmoke;">Custom gear can be ordered through our contact form. Additional fees may apply.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the official mission statement?</a>
      <div class="content">
        <p style = "color:whitesmoke;">Our official mission statement is to make a memory of participating in a Marathon.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the purpose of Marathon?</a>
      <div class="content">
        <p style = "color:whitesmoke;">The purpose of the marathon is to give you the best Marathon  experience!</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the best email to reach you at?</a>
      <div class="content">
        <p style = "color:whitesmoke">The best email for any inquiries is Shiman2025@gmail.com</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the best time to call?</a>
      <div class="content">
        <p style = "color:whitesmoke;">The best time to call is 24/7! We are always available to answer any questions.</p>
      </div>
    </div>
  </div>
  
</div>
 <!-- script for fuction in accordion for question and answer -->
<script type="text/javascript">
   const items = document.querySelectorAll(".accordion a");
 
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', toggleAccordion));
 </script>
 
</body>
</html>