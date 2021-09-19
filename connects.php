<?php
session_start();
    $id=mktime();
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $selectcity=$_POST["selectcity"];
    $zip=$_POST["zip"];
    $delivery=$_POST["delivery"];
    $plans=$_POST["plans"];
    $message=$_POST["message"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"laundry");

$query="insert into orderr values('$id','$name','$email','$phone','$address','$selectcity','$zip','$delivery','$plans','$message')";
    $q1=mysqli_query($con,$query);
 
?>