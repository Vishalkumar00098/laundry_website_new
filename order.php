<!DOCTYPE html>
<html>
<head>
  <title>Laundry Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/style2.css">
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



<section style="background-image: url('img/back1.jpg');width: 100%">
<div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>172 Mohali, 359 1st
. 5th Street NYC. </div>
        <div><i class="fas fa-envelope"></i>cleanndry@email.com</div>
        <div><i class="fas fa-phone"></i>+91 9805496746</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 9:30 AM to 6:00 PM</div>
      </div>
      <div class="contact-form"><br><br><br><br>
        <h2>Place Your Order</h2>
        

        <form action="include/connects.php" method="POST" class="contact" >
          <input type="text" name="name" id="name" class="text-box" placeholder="Your Name" required="">
          <input type="email" name="email" id="email" class="text-box" placeholder="Your Email" required="">
          <input type="text" name="phone" id="phone" class="text-box" placeholder="Enter Phone Number" required="">
          <input type="text" name="address" id="address" class="text-box" placeholder="Enter Address" required="">
          
          <select name="selectcity" class="text-box"  >
                <option >Select city</option>
                <option value="chandigarh" >Chandigarh</option>
                <option  value="mohali">Mohali</option>
          </select>
        

          <input type="text" name="zip" id="zip" class="text-box" placeholder="Enter Pincode" required="">
         
          <select name="delivery" class="text-box"  >
                <option >Type of delivery</option>
                <option value="regular" >Regular</option>
                <option value="express" >Express</option>
          </select>
          
          <select name="plans" class="text-box" >
                  <option placeholder="plans">Plans</option>
                  <option value="basic">Basic</option>
                  <option value="gold">Gold</option>
                  <option value="diamond">Diamond</option>
                  <option value="pro">Pro</option>
          </select>

          <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea><br>
          <input type="submit" name="submit" class="send-btn" value="submit">
        </form>
      </div>
    </div>
            
       
</section>





<footer style="background-color: white" >
 <div class="container-fluid col-sm-12" >
    <section style="text-align:center; margin:10px auto;font-size: 21px"><p>Copyright &copy; 2021 cleanNdry Laundry. All Rights Reserved.</p></section>
    <center><div style="margin-top: -36px;">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div></center>
</div>
</footer>
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