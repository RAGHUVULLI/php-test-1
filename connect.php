<?php
$db="test";
$server="localhost";
$usename="root";
$pwd="";
$conn=mysqli_connect($server,$usename,$pwd,$db);
if($conn)
echo'';
else
echo "Fail";
?>
