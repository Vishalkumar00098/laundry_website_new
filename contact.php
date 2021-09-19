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
<body >
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
<section><br><br><br><br><br>
  <div>
  <center><h2 style="color:#1887b4;font-size:30px;font-weight: bold"> Contact Us </h2></center>
</div><br><br>
<div class="container-fluid"> 
      <div class="row pbot-main">
      
        <div class="col-sm-12 col-md-6">

            <form action="include/connect.php" onsubmit="return validation()" method="post" class="bg-light">

                <div class="form-group">
                    <label for="user" class="font-weight-bold"> Username: </label>
                    <input type="text" name="user" class="form-control" id="user" >
                    <span id="username" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> Mobile Number: </label>
                    <input type="number" name="mobileNumber" class="form-control" id="mobileNumber" >
                    <span id="mobileno" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> Email: </label>
                    <input type="email" name="emails" class="form-control" id="emails" >
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>
                  <div class="form-group">
                    <label class="font-weight-bold"> Message </label>
                    <textarea rows="4" cols="5" class="form-control" name="message" id="message" placeholder="Enter the message"></textarea>
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>
                <br>
                <input type="submit" name="submit" value="submit" class="btn btn-info" style="width: 25%;" >


            </form><br><br>
          
          
        </div>
        
        <div class="col-sm-12 col-md-6">
        
          <div class="maps-wraper">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219482.18593042518!2d76.62378683604217!3d30.73500659035743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1597342653977!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
          </div>
      
      <div class="row contact-address">
            <div class="col-sm-12 col-md-6">
              <div class="contact-address-item">
                <div class="contact-address-heading">OPENING HOURS</div>
                <p>
                Monday-Saturday :9:30AM - 06:00 PM<br>
                Email : cleanndry@gmail.com
                
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
</section>
  <!----------- Footer ------------>
  <div style="background-color: black;height: 98px" class="container-fluid col-sm-12" >
    <section style="text-align:center; margin:10px auto;font-size: 21px;color: white "><p>Copyright &copy; 2021 cleanNdry Laundry. All Rights Reserved.</p></section>
   <center> <div style="margin-top: -36px;">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-instagram"></a>
  </div></center>
</div>
<script type="text/javascript">
        function validation() {

            var user = document.getElementById('user').value;
            var mobileNumber = document.getElementById('mobileNumber').value;
            var emails = document.getElementById('emails').value;





            if (user == "") {
                document.getElementById('username').innerHTML = " ** Please fill the username field";
                return false;
            }
            if ((user.length <= 2) || (user.length > 20)) {
                document.getElementById('username').innerHTML = " ** Username length tmust be between 2 and 20";
                return false;
            }
            if (!isNaN(user)) {
                document.getElementById('username').innerHTML = " ** only characters are allowed";
                return false;
            }


            if (mobileNumber == "") {
                document.getElementById('mobileno').innerHTML = " ** Please fill the mobile NUmber field";
                return false;
            }
            if (isNaN(mobileNumber)) {
                document.getElementById('mobileno').innerHTML = " ** user must write digits only not characters";
                return false;
            }
            if (mobileNumber.length != 10) {
                document.getElementById('mobileno').innerHTML = " ** Mobile Number must be 10 digits only";
                return false;
            }



            if (emails == "") {
                document.getElementById('emailids').innerHTML = " ** Please fill the email idx` field";
                return false;
            }
            if (emails.indexOf('@') <= 0) {
                document.getElementById('emailids').innerHTML = " ** @ Invalid Position";
                return false;
            }

            if ((emails.charAt(emails.length - 4) != '.') && (emails.charAt(emails.length - 3) != '.')) {
                document.getElementById('emailids').innerHTML = " ** . Invalid Position";
                return false;
            }
        }
</script>
        

</body>
</html>