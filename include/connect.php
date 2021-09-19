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
    $user=$_POST['user'];
    $mobileNumber=$_POST['mobileNumber'];
    $emails=$_POST['emails'];
    $message=$_POST['message'];

    $query="INSERT INTO contactus (user, mobileNumber, emails, message) VALUES ('$user','$mobileNumber','$emails','$message')";

    if(mysqli_query($conn,$query)){
        echo "<script>alert('message is submitted')</script>";
    echo "<script>window.open('../contact.php','_SELF')</script>";

    }
}

?>