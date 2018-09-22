<html>
<head></head>
<body>

<?php
$user=$_POST["user"];
$pass=$_POST["pass"];
$file=fopen("password.txt","r");
$check=false;
while(!feof($file)){
$str1="";
$str="";
$str=fgets($file);
$str1 .=$user;
$str1 .=$pass;
$str1 .="\n";
if($str==$str1){
$check=true;
include 'problem.php';
break;
}
}

if($check==false){
echo "Invalid username or Password";
include 'Portal.php';
}
?>

</body>
</html>
