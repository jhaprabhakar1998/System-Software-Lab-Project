<html>
<head></head>
<body>

<?php
$user=$_POST["user1"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
if (strlen($user)<4){
$val='username is too short.Minimum 4 characters needed.';
echo $val;
include 'Portal.php';
}
else if($pass1!=$pass2){
echo "Password does not match";
include 'Portal.php';
}
else {
$file = 'password.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $user;
// Write the contents back to the file
file_put_contents($file, $current);
$current .=$pass1;
file_put_contents($file, $current);
$current .="\n";
file_put_contents($file,$current);
include 'problem.php';
}
?>

</body>
</html>
