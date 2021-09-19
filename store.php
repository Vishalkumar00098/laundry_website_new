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
</head>
<body style="margin: 0px" onload="myFunction()">
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
<!-------------------------------------------Main Image------------------------->
<main>
<div class="container-fluid">
  <div class="row">
<div class="sticky" style="background-image:url('img/back1.jpg');width: 100%;height: 400px;opacity: 0.8 ">
  <div class="text"><br><br><br><br>
  <p style="opacity: 0.9">Store Locator</p>
  
  </div>
  <div style="font-weight: bold;font-size: 18px;  color: white; margin-left: 6%;">
     <p>Find Our Stores</p>
    </div>
</div>
</div>
</div>
</main>

<!---------------------Store Location-------------------->
<section>
<div class="container">

  <div class="col-lg-12">
    <div class="col-md-3">
      <div style="margin-top: 22%">
     <input type="hidden" name="search" value="all" id="search">         
      <input type="text" class="form-control" name="x" placeholder="Search City...">
    </div>
  </div>

    <div class="col-sm-1"></div>
    <div class="col-md-3">
     <div style="margin-top: 22%">
     <input type="hidden" name="search" value="all" id="search">         
      <input type="text" class="form-control" name="x" placeholder="...">
    </div>
    </div>
     <div class="col-sm-1"></div>
    <div class="col-md-4">
      <button class="btn btn-primary" style="margin-top: 17%;width: 100%;">Submit</button>
    </div>



</div>
</div>
</section>
<hr>
<!-- <div style=" margin-top:20px;">
<input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
</div> -->

<!-----------------------------------------------------------Map card------------------------------------------>
<section>
<center><h1 style="font-weight: bold;color: skyblue" id="about" >About-Us</h1></center>
<div class="container-fluid">  
  <div class="col-sm-1"></div> 
  <div class="col-lg-2">
  <div class="row">
 <div class="card" style="">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109782.86712293245!2d76.62734007586944!3d30.6983052074133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee906da6f81f%3A0x512998f16ce508d8!2sSahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1615999763892!5m2!1sen!2sin"   style="border:0;width: 100%" allowfullscreen="" loading="lazy"></iframe>
  <div class="card-body" style="border-style: groove;">
    <center><h5 class="card-title">MOHALI</h5></center>
    <p class="card-text">34, B, Pilla Reddy Layout 1st Cross, 10th  Bangalore - 560 043 Mobile: 7483030097 <br>Email: hsrsec2@dhobiwala.com </p>
    <center><a href="#" class="btn btn-primary">Read More>></a></center>
  </div>
</div>
</div>
</div>
<div class="col-sm-2"></div>  
  <div class="col-lg-2">
  <div class="row">
 <div class="card" style="">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912921079!2d76.6934885768626!3d30.735062644281005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1615999877753!5m2!1sen!2sin"  style="border:0;width: 100%" allowfullscreen="" loading="lazy"></iframe>
  <div class="card-body" style="border-style: groove;" >
   <center> <h5 class="card-title">CHANDIGARH</h5></center>
    <p class="card-text">Shop # 1, 518, 24TH MAIN HSR LAYOUT SECTOR 2 Mobile: 7483030094 <br> Email: hsrsec2@dhobiwala.com</p>
    <center><a href="#" class="btn btn-primary">Read More>></a></center>
     </div>
</div>
</div>
</div>  
<div class="col-sm-2"  ></div> 
  <div class="col-lg-2">
  <div class="row">
 <div class="card" style="">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223994.25250303914!2d76.95126390445984!3d28.692332876145986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d047309fff32f%3A0xfc5606ed1b5d46c3!2sDelhi!5e0!3m2!1sen!2sin!4v1615999933037!5m2!1sen!2sin" style="border:0;width: 100%" allowfullscreen="" loading="lazy"></iframe>
  <div class="card-body"style="border-style: groove;">
    <center><h5 class="card-title">NOIDA</h5></center>
    <p class="card-text">No 3405 , 14th Main HAL 2nd Stage, Near BSNL Office Indiranagar Mobile: 9019906585 <br> Email: indiranagar@dhobiwala.com.</p>
    <center><a href="#" class="btn btn-primary">Read More>></a></center>
  </div>
</div>
</div>
</div>  
<div class="col-sm-1"></div>  
</div>
</section><br><br>
<!----------- Footer ------------>
 <div class="container-fluid1">
    <footer class="footer-bs" style="background-color: gray">
        <div class="row">
          <div class="col-md-3 footer-brand animated fadeInLeft">
              <h2 style="color:#19a7e1;font-weight: bold ">About-Us</h2>
                <p>Pick My Laundry provides affordable and convenient way of getting your wash, laundry and dryclean done with prime quality. Our instant pickup at a slot chosen by you with a turnaround time of 48 hours provides you laundry and dry cleaning with best quality. The processing of washing, laundry and dry cleaning is done in best-class setups with Italian equipment and German chemicals. We also do laundry with antiseptic wash, fabric softener and hygienic detergents. You can also visit our Live Processing Centre after scheduling a visit with us. We are currently operational in South Delhi, Gurgaon, Noida, Indirapuram, Nagpur, Sonipat.</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <h4 style="color:#19a7e1;font-weight: bold  ">Menu —</h4>
              <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Dry Clean</a></li>
                        <li><a href="#">Laundry</a></li>
                        <li><a href="#">Wash & Fold</a></li>
                        <li><a href="#">Free Pick and Drop</a></li>
                        <li><a href="#">Shoe Servicing</a></li>
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About-Us</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Contact-Us</a></li>
                        <li><a href="#">Place-Your-Order</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4 style="color:#19a7e1;font-weight: bold  ">Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Linkedin</a></li>
                </ul>
            </div>
          <div class="col-md-3 footer-ns animated fadeInRight">
              <h4 style="color:#19a7e1;font-weight: bold  ">Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
  </div>
 <div class="container-fluid col-sm-12" >
    <section style="text-align:center; margin:10px auto;font-size: 21px"><p>Copyright &copy; 2021 cleanNdry Laundry. All Rights Reserved.</p></section>
   <center> <div style="margin-top: -36px;">
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