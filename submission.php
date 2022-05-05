<?php

//$host='localhost';
//$user='root';
//$pass='';
//$db='yuvaLens';
//
//$con=mysqli_connect($host,$user,$pass,$db);
//if(!$con){
//	echo 'Connection Error';
//}
//
//if (isset($_POST['submit']))
//{
//    $name=$_POST['name'];
//    $email=$_POST['Email'];
//    $phone=$_POST['tel'];
//    $sub=$_POST['sub'];
//    $msg=$_POST['msg'];
//    
//    $insertquery= mysqli_query($con, "INSERT INTO `submission`(`name`,`email`,`phone`,`subject`,`message`)VALUES
//                                            ('$name','$email','$phone','$sub','$msg')") or die(mysqli_error($con));
//        
//                                            if($insertquery){
//
//                                            echo "<script>alert('Details updated ');</script>";
//                                            }
//                                            else {echo "<script>alert('Error ');</script>";}
//}



$error = '';
$name = '';
$email = '';
$phone ='';
$subject = '';
$message = '';


function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
    

 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }
 
 /*
 if($error == '')
 {
  require 'class/class.phpmailer.php';
  $mail = new PHPMailer;
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts
  $mail->Port = '80';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'sonam';     //Sets SMTP username
  $mail->Password = 'sonam123';     //Sets SMTP password
  $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = $_POST["email"];     //Sets the From email address for the message
  $mail->FromName = $_POST["name"];    //Sets the From name of the message
  $mail->AddAddress('allianza2020@gmail.com', 'Sonam Yadav');//Adds a "To" address
  $mail->AddCC($_POST["email"], $_POST["name"]); //Adds a "Cc" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML    
  $mail->Subject = $_POST["subject"];    //Sets the Subject of the message
  $mail->Body = $_POST["message"];    //An HTML or plain text message body
  
  
  */
 

    
    $phone=$_POST['tel'];
   
   
    
          $to = "team@castinglens.com";
       
         $message=$message.'<br><br> Name :'.$name.'<br> Email :'.$email.'<br> Phone :'.$phone;
     

         
         $header = "From:".$email." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html; charset=utf-8";
         
         $retval = mail ($to,$subject,$message,$header);

  
  if($retval == true)        //Send an Email. Return true on success or false on error
  {
   $error = '<label class="text-success">Thank you for contacting us</label>';
  }
  else
  {
   $error = '<label class="text-danger">There is an Error</label>';
  }
  $name = '';
  $email = '';
  $phone = '';
  $subject = '';
  $message = '';
 }


?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Casting Lens - Contact Page</title>
<link rel="icon" href="lensLogo.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--    <link href="./scripts.css" rel="stylesheet">-->
    
           
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>CASTING <em>LENS</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="female.php">Female Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="male.php">Male Model</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="submission.php">Contact Us</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>let&#146s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    </head>
    <body>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
			
		<?php echo $error; ?>   
              <form name="form1" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" value="<?php echo $name; ?>" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" value="<?php echo $email; ?>" required="">
                    </fieldset>
                  </div>
				  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="tel" type="text" class="form-control"  placeholder="Phone Number" value="<?php echo $phone; ?>"  required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" value="<?php echo $subject; ?>"  required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="10" class="form-control" id="message" placeholder="Your Message" required=""><?php echo $message; ?></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                        <input type="submit" style=" background-color: #f33f3f;color: #fff;font-size: 14px;text-transform: capitalize;font-weight: 300;padding: 10px 20px;border-radius: 5px;display: inline-block;transition: all 0.3s;border: none;outline: none; cursor: pointer; " class="filled-button" value="Send Message" name="submit">
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <div class="col-md-4">
            <div class="left-content">
                <h4 style="color: #f33f3f">NOTE *</h4>
                <p style="color: #f33f3f">Please send your Images with profile on 
                    <a href="mailto:team@castinglens.com" target="_blank" rel="noopener noreferrer">team@castinglens.com</a></p>
            </div>
        </div>
            </div>

        </div>
       
                
             <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33242.64837705489!2d72.797733201846!3d19.133547204190908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b60f4811515b%3A0x4756dfde731c2c8f!2sVersova%2C%20Andheri%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1587052019926!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
         
        </div>
      </div>
    </div>

   
<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 CASTING LENS 
            
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
