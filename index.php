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

	<header style="position: fixed;z-index: 13;width: 100%;">
		<nav class="navbar navbar-inverse" style="margin: 0%">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--<a class="navbar-brand" href="#">Laundry Service</a>-->
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
<div class="container-fluid1 ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="z-index:2">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/back1.jpg" alt="Los Angeles" style="width:100%;height: 400px">

      </div>

      <div class="item">
        <img src="img/back2.jpg" alt="Chicago" style="width:100%;height: 400px">

      </div>
    
      <div class="item">
        <img src="img/back3.jpg" alt="New York" style="width:100%;height: 400px">

      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
 
 </div>
  </div>
<section>
<div class="container-fluid">
						<center><h2 style="color: #19a7e1" >WHY CHOOSE US?</h2></center>
						<center> <pre style="font-size:20px;color: black">We are here to serve you better at your home, so you can go back to doing what you love.<br>Be it steam ironing, starching, stain removal, minor alterations, laundry and dry-cleaning.<br> your precious garment is taken care by professionals and cleaned with best possible care</pre></center>
<div class="row justify-content-center;">
<div>
     <div class="col-lg-3">
        <center><img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/eco1.png">

        <h4 style="color: #19a7e1">ECOFRIENDLY</h4>
        <p>Cleaning clothes can be dirty business. We use eco-friendly "free and clear" for all our wash-and-fold only, non-perc solvents for all dry cleaning.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p></center>
    </div>
 	<div class="col-lg-3">
         <center> <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/aff1.png">

        <h4 style="color: #19a7e1">AFFORDABLE PRICE</h4>
        <p>The amount we charge is equivalent to the cost you bear to get the laundry done at your home and beautiful every time..</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p></center>
    </div>
     <div class="col-lg-3">
           <center> <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/clean1.png">

        <h4 style="color: #19a7e1">EXPERT CLEANER</h4>
        <p>Our expert cleaners and master pressers ensure that your clothes come back looking fresh and beautiful every time.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p></center>
    </div>
     <div class="col-lg-3">
         <center>   <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/fast.png">

        <h4 style="color: #19a7e1">EXPRESS DELIVERY</h4>
        <p>We bring your clothes back fresh within 48 hours clothes come back looking fresh and beautiful every time.</p>
        <p><a class="btn btn-secondary" href="#">View details »</a></p></center>
    </div>
  </div>
				
</div>
</div>
<!------------------------   Client-Says --------------------->
<hr>
<center><h1 style="font-weight: bold;color: #19a7e1;" id="Client">Client-Says</h1></center>
<div class="container-fluid">
  <div class="row">
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="background-color: skyblue !important">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="z-index:2">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
         <center> <img class="img-circle img-fluid" src="img/m3.jpg" alt="Cinque Terre" width="200" height="150"></center>
        <center><h2>Robert Eric</h2></center>
         <div class="col-md-3"></div>
         <p class="col-md-6">“Great work with great team. Great skill with quality result. Very easy to to communicate and to cooperate from initial phase to the end of the contract. I am happy to have CSS team as my developer team and I will hire Andy James and CSS Soft team again for my next project</p>
          <div class="col-md-3"></div>
      </div>
      <div class="item active">
         <center> <img class="img-circle img-fluid" src="img/m5.jpg" alt="Cinque Terre" width="200" height="150"></center>
        <center><h2>Robert Eric</h2></center>
         <div class="col-md-3"></div>
         <p class="col-md-6">“Great work with great team. Great skill with quality result. Very easy to to communicate and to cooperate from initial phase to the end of the contract. I am happy to have CSS team as my developer team and I will hire Andy James and CSS Soft team again for my next project</p>
          <div class="col-md-3"></div>
      </div>
      <div class="item">
         <center> <img class="img-circle img-fluid" src="img/m6.jpg" alt="Cinque Terre" width="200" height="150"></center>
        <center><h2>Robert Eric</h2></center>
        <div class="col-md-3"></div>
         <p class="col-md-6">“Great work with great team. Great skill with quality result. Very easy to to communicate and to cooperate from initial phase to the end of the contract. I am happy to have CSS team as my developer team and I will hire Andy James and CSS Soft team again for my next project</p>
          <div class="col-md-3"></div>
      </div>
    </div>

    

    <!-- Left and right controls -->
   <!--  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span> -->
    </a>
  </div>
  </div>
</div>

<!--   Google play logo----!-->
<div class="container-fluid" >
  <div class="row">
<div style="background-image: url('img/play1.jpg'); height: 450px;margin-top: -2%;"><br><br>
<div style=" margin-left: 50px;">
<h1 class="lead" style="font-size:33px;color:black">Now We Are On Mobile Too</h1>
<p class="lead" >At CleanNdry we strive to make life easy for you, on the click of a button you can <br> now avail hassle free pickup & delivery of your garments</p>
<p style="">DOWNLOAD THE APP NOW</p>

<button style="width: 177px;height: 58px;">GOOGLE PLAYS</button>
</div>
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