<html>
<head>
  <title> </title>
  <style>
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 35%;
  font-size: 18px;
}
  .bigcard{
    box-shadow: 100% rgba(0, 0, 0, 0.2);
    margin-top:0%;
    margin-left: 20%;
    text-align: center;
    font-family: arial;
    background: #DFE2DB;
    width:60%;
    height:90%;
  }
  .card{
    box-shadow: 100% rgba(0, 0, 0, 0.2);
    margin: auto;
    text-align: center;
    font-family: arial;
    background: white;
    width:35%;
    height:85%;
  }
  ul {
      list-style-type: none;
      margin: 0%;
      padding: 0;
      overflow: hidden;
      background-color: blue;
  }

  li {
      float: left;
  }

  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 20px 36px;
      text-decoration: none;
  }

  li a:hover {
      background-color: red;
  }
  #hi{
  border: solid;
  display: inline-block
  color: white;
  background-color:grey;
  text-align: center;
  cursor: pointer;
  width: 15%
  font-size: 18px;   
}
  </style>
</head>
<body style="background-image:url('image2.png');">
  <ul>
    <li><a class="active" href="http://www.iitdh.ac.in/">IIT Dharwad</a></li>
    <li><a href="http://moodle.iitdh.ac.in/login/index.php">Moodle</a></li>
    <li><a href="http://portal.iitdh.ac.in">Portal</a></li>
    <li><a href="http://www.google.com">Search</a></li>
    <li><a href="https://www.cse.iitb.ac.in/~rkj/">Course_Page</a></li>
    <li><a href="problem.php">Home</a></li>
    <li><a href="contact.html">Contact Us</a> </li>
    <li><a href="Practice.html">Practice</a> </li>
    <li><a href="Portal.php">Log Out</a></li>
  </ul>
<div class="bigcard">
<h1>Problem Statement</h1>
<div class="card">
<h1 >Problem Of The Day</h1>
<h3> Prime Number </h3>
Given a number n check 
whether it is a prime
or not. A prime number 
is a number which is divisible
by just 1 and itself.
<h3> Constraints</h3>
1<=n<100000,
0< T <=2.0 sec
<h3>Language</h3>
C++,Python
<h3>Test Case</h3>
<form action="download.php">
<button id="hi">Download</button>
</form>
</div>
<form action="upload.php">
<button>Upload</button>
</form>
</div>
</body>
</html>
