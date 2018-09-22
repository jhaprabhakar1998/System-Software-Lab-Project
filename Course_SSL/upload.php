<html>
<head>

<title> Upload</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
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

#idd{
    color:green;
    margin-left:43%;
    margin-top:10%;
    text-decoration: none;
}
html { 
    background:url('download.png') no-repeat center center;
    min-height:100%;
    background-size:cover;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="http://www.iitdh.ac.in/">IIT Dharwad</a></li>
  <li><a href="http://moodle.iitdh.ac.in/login/index.php">Moodle</a></li>
  <li><a href="http://portal.iitdh.ac.in">Portal</a></li>
  <li><a href="http://www.google.com">Search</a></li>
  <li><a href="https://www.cse.iitb.ac.in/~rkj/">Course_Page</a></li>
  <li><a href="problem.php">Home</a></li>
  <li><a href="contact.html"> Contact Us</a> </li>
  <li><a href="Portal.php">Log Out</a></li>
</ul>
</ul>
<h1 id="idd"> Welcome To Upload Section </h1>
<form action="simpleupload.php" method="post" enctype="multipart/form-data" id="upload_id">
	    <h3 style="color:blue;margin-left:48%;">Select file to upload:</h3><br>
		    <input type="file" name="fileToUpload" id="fileToUpload" style="margin-left:50%;margin-top:3%;"><br>
			    <input type="submit" value="Upload" name="submit" style="margin-left:51%;margin-top:3%;">
</form>
</body>
</html>
