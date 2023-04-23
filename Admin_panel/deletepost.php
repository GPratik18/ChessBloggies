<?php 
require("../db.php");
$str=$_GET['str'];
$num=$_GET['num'];
$stmt="";
var_dump($str);
var_dump($num);
$num1=(int)$num;
if($str=='t'){
 $DTstmt="DELETE FROM topics WHERE id='$num1'";
 $runstmt=mysqli_query($db,$DTstmt);
}
else if($str=='b'){
    $DPstmt="DELETE FROM posts WHERE id='$num1'";
    $runstmt=mysqli_query($db,$DPstmt);
}
// $runstmt=mysqli_query($db,$stmt);
// print_r($runstmt);
header("location: Dashboard.php#topic-title");
?>