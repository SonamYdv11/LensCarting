<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Casting Lens - Female Models </title>
<link rel="icon" href="lensLogo.png" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <style >
        .zoom {
  
  transition: transform .2s; /* Animation */
  width: 150px;
  height: 350px;

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
    </style>
    
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
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="female.php">Female Model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="male.php">Male Model</a>
              </li>
              <li class="nav-item">
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
    
    
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Female</h4>
              <h2>Models</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="products">
      <div class="container">
       
               <div class="row grid">
    
<?php
$imagesDirectory = "image/female/";



if(count(glob("$imagesDirectory/*")) === 0){
    header('Location:\comingSoon.php');
}
 else {
    

if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
                    echo "<div class='col-lg-4 col-md-4 all des'>
                      <div class='product-item'>";
			echo "<a href='single.php?img=$image&gen=female'><img src='image/female/".$image."' class='zoom'></a> ";
                        $exp = explode(".",$image);
                        $imgname=$exp[0];
                        echo "<div class='down-content'>
                          <a href='single.php?img=$image&gen=female'><h4>".$imgname."</h4></a> 
                        </div></div>
                    </div>";
                        
                       
		}
    }
	
    closedir($opendirectory);
 
 } 
 }
 

?>
               </div>
      </div>
</div>
    
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 CASTING LENS</p>
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
