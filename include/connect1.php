<?php

$servername='localhost';
$username='root';
$password='';
$dbname="laundry";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die('Could not connect my sql sever'.mysql_error());
}
else
    echo "connected db";

?>

<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $selectcity=$_POST['selectcity'];
    $zip=$_POST['zip'];
    $delivery=$_POST['delivery'];
    $plans=$_POST['plans'];
    $message=$_POST['message'];
   


    $query="INSERT INTO order (name, email, phone, address, selectcity, zip, delivery, plans, message) VALUES ('$name','$email','$phone','$address','$selectcity','$zip','$delivery','$plans','$message')";

    if(mysqli_query($conn,$query)){
        echo "new record successfully";
    }
    
}
?>