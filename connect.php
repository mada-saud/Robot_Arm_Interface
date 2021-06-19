<?php
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];

$localhost = "localhost:3307";
$username = "root";
$pass = "";
$dbname = "robot_arm";
$conn = new mysqli($localhost,$username,$pass,$dbname);

if($conn->connect_error){
    die (" Connection  is field:".$conn->connect_error);
}
if(isset($_POST['save'])){
$sql = "INSERT INTO Motors (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) values ($m1,$m2,$m3,$m4,$m5,$m6)";
if($conn->query($sql)==TRUE){
    echo " Insert successfully";
}
else
{ 
    echo"Error: " .$sql ."<br>".$conn->error;

}}
else{
if(isset($_POST['run'])){
    $result = "INSERT INTO run (run_on) values (1)";}
    if($conn->query($result)==TRUE){
        echo " Insert on run successfully";
    }
    else
    { 
        echo"Error: " .$result ."<br>".$conn->error;
    
    }}

$conn->close();
?>