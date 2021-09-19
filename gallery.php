<!DOCTYPE html>
<html>
<head>
  <title>Laundry Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body style="background-color: #9e9e9e" onload="myFunction()">
  <div id="loading"></div>
<header style="position: fixed;z-index: +1;width: 100%;">
    <nav class="navbar navbar-inverse" style="margin: 0%">
  <div class="container-fluid">
    <div class="navbar-header">
      <img style=" width: 62%;height: 78px;" src="img/logo-laundry.png">

    </div>
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="about.php">About-Us</a></li>
      <li class="nav-item"><a href="price.php">Price-Us</a></li>
      <li class="nav-item"><a href="gallery.php">Gallery</a></li>
      <li class="nav-item"><a href="store.php">Store Locator</a></li>
      <li class="nav-item"><a href="service.php">Service</a></li>
       <li class="nav-item"><a href="francise.php">Francise</a></li>
       <li class="nav-item"><a href="laundrynest.php">laundry-nest</a></li>
      <li class="nav-item"><a href="contact.php">Contact-Us</a></li>
      <li class="nav-item btn btn-primary"><a href="order.php">Place-Yout-Order</a></li>
    </ul>
  </div>
</div>
  </nav>
</header>


    <!-- <header>
    <ul class=" nav navbar-nav slider container-fluid" style="background-color: #9e9e9e">
   <li><a  href="#slide1" style="font-size: 20px;font-weight: bold">Washing</a></li>
   <li><a  href="#slide2"style="font-size: 20px;font-weight: bold">Cleaning</a></li>
    <li><a  href="#slide3" style="font-size: 20px;font-weight: bold">Drycleaning</a></li>
    <li><a  href="#slide4" style="font-size: 20px;font-weight: bold">Ironing</a>
   </li>
 </ul>
</header> -->



 <div><br><br><br><br><br>
  <center><h1 style="color:#1887b4;font-size:40px; background-color:black"> Gallery </h1></center>
</div>
<!----------------------------------- GALLERY IMAGES----------------->
<section class="container-fluid">
  <!--- Image 1 Column-->
<center><h1 id="slide1" style="color:#1887b4;font-size:40px;">Washing</h1></center>
  <div class="col-md-12">
  <div class="col-sm-2"></div>
<div class="col-md-2">
<img class="shake3" src="img/f1.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3"  src="img/f2.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3" src="img/f3.jpg" style="height: 350px;width: 340px">
</div>
 <div class="col-sm-2"></div>
</div>
 <!--- Image 2 Column-->

<center><h1 id="slide2" style="color:#1887b4;font-size:40px;">Cleaning</h1></center>
  <div class="col-md-12">
  <div class="col-sm-2"></div>
<div class="col-md-2">
<img class="shake3" src="img/f3.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3" src="img/f4.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3" src="img/f5.jpg" style="height: 350px;width: 340px">
</div>
 <div class="col-sm-2"></div>
</div>
 <!--- Image 3 Column-->

<center><h1 id="slide3" style="color:#1887b4;font-size:40px;">DryCleaning</h1></center>
  <div class="col-md-12">
  <div class="col-sm-2"></div>
<div class="col-md-2">
<img class="shake3" src="img/f7.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3"  src="img/f8.jpg" style="height: 350px;width: 340px">
</div>
<div class="col-sm-1"></div>
<div class="col-md-2">
<img class="shake3"  src="img/f9.jpg" style="height: 350px;width: 340px">
</div>
 <div class="col-sm-2"></div>
</div>

</section>

<!-----------------------------------FOOTER------------------------->
<div class="container-fluid col-sm-12" style="background-color: white" >
    <section style="text-align:center; margin:10px auto;font-size: 21px"><p>Copyright &copy; 2021 cleanNdry Laundry. All Rights Reserved.</p></section>
    <center><div style="margin-top: -36px;">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div></center>
</div>
<script>
    // $(document).ready(function(){
      //  $('div#loading').removeAttr('id');
    // });
    var preloader = document.getElementById("loading");
    // window.addEventListener('load', function(){
    //  preloader.style.display = 'none';
    //  })

    function myFunction(){
      preloader.style.display = 'none';
    };
  </script>
</body>
</html>