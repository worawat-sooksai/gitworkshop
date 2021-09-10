<?php echo "this is a connecting database file";
$host = 'localhost';
$user = 'user';
$pass = 'pass';
$dbname = 'mydb';
$conn = mysqli_connect($host,$user,$pass,$dbname);
if($conn){
 echo "";
}else echo "error";