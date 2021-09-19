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
<body onload="myFunction()">
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
  <div style="background-color:gray; height:530px;width: 100%;position: relative;">
          <div><br><br><br><br><br><br><br><br><br>
            <center style="color:white;font-size:32px;font-weight: bold">PRICING</center><br>
             <center style="color:white;font-size:32px;font-weight: bold">Pick-Up & Delivery Rs100 per order + GST Extra </center>
        </div><br><br>
        <div class="button2">
          <center><input type="text" placeholder="Search.."></center>
        </div>
        
    </div>

  <!--Price-tags -->
  <section>
      <div class="price-table">
         <div class="container">
            <h1 class="display-4" style="text-align:center; color:#19a7e1;font-weight: bold ">PRICES & PLANS</h1>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
                  <div class="pricing text-center">
                     <div class="pricing-top">
                        <p><sup>Rs</sup><em>55</em>/mo</p>
                        <span>Basic</span>
                     </div>
                     <ul>
                        <li>2 jeans</li>
                        <li>4 T-shirts</li>
                        <li>1 shirt & top</li>
                        <li>3 shorts</li>
                        
                     </ul>
                     <div class="btn1"><a href="order.php" class="btn btn-default">Order Now</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
                  <div class="pricing text-center">
                     <div class="pricing-top">
                        <p><sup>Rs</sup><em>60</em>/mo</p>
                        <span>Gold</span>
                     </div>
                     <ul>
                        <li>3 jeans</li>
                        <li>5 T-shirts</li>
                        <li>2 shirt & top</li>
                        <li>4 shorts</li>
                        
                     </ul>
                     <div class="btn1"><a href="order.php" class="btn btn-default">Order Now</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
                  <div class="pricing text-center">
                     <div class="pricing-top">
                        <p><sup>Rs</sup><em>80</em>/mo</p>
                        <span>Dimond</span>
                     </div>
                     <ul>
                        <li>4 jeans</li>
                        <li>6 T-shirts</li>
                        <li>3 shirt & top</li>
                        <li>5 shorts</li>
                        
                     </ul>
                     <div class="btn1"><a href="order.php" class="btn btn-default">Order Now</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
                  <div class="pricing text-center">
                     <div class="pricing-top">
                        <p><sup>Rs</sup><em>95</em>/mo</p>
                        <span>Pro</span>
                     </div>
                     <ul>
                        <li>5 jeans</li>
                        <li>7 T-shirts</li>
                        <li>4 shirt & top</li>
                        <li>6 shorts</li>
                        
                     </ul>
                     <div class="btn1"><a href="order.php" class="btn btn-default">Order Now</a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"> </div>
      </div>
</section>
      <!--//Price-tags -->


<!---------------------------- Images------------------------>
<section class="container-fluid">
  <hr>
  <div class="row">
 <h1 style="text-align:center; color:#19a7e1;font-weight: bold ">Why-Us?</h1>
 <center><p style="font-size: 16px">We Make Lives Simpler by Giving You More Free Time</p></center>
<div >
  <div class="col-md-1">

  </div>
  <div class="col-md-4">
    <div>
    <img class="img_logo" src="img/eco1.png">
    <h3>Eco-Friendly</h3>
    <span>Our front loading machines consume<br> 3 times water than the conventional washing<br> machines Convenience</span>
  </div>
  <div>
    <img class="img_logo" src="img/phone.jpg">
    <h3>Convenience</h3>
    <span>We schedule pickup and drop as per your<br> convenience.</span>
  </div>
  <div>
  <img class="img_logo" src="img/clean1.png">
    <h3>Quality</h3>
    <span>We use products that revive your clothes<br> and give a new feel to them.</span>
  </div>
  </div>
  
  <div class="col-md-2"><br><br><br>
    <center><object class="cloth" data="img/cloth.png"></object></center>
  </div>
  
  <div class="col-md-2"></div>
  <div class="col-md-2">
    <div>
    <img class="img_logo" src="img/aff1.png">
    <h3>Affordable</h3>
    <span>The amount we charge is equivalent to the cost<br> you bear to get the laundry done at your home.</span>
  </div><br><br>
  <div>
   <img class="img_logo"  src="img/fast.png">
    <h3>Packaging</h3>
    <span>Your clothes are delivered at your doorstep with the perfect ..crease.</span>
  </div>
  <div><br>
  <img class="img_logo" src="img/comm.png">
    <h3>Community</h3>
    <span>We collect your donated clothes and spread your love & care to the needy ones.</span>
  </div>
  </div>
 <div class="col-md-1">
   </div>


</div>
</div>



</section>


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