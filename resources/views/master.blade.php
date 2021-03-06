<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Montserrat?selection.family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<title>Cyfa</title>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/assets/Psyphertxt_logo_sm.png" width="70" height="40" style="margin-top: -10%"></a>
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="about">About Us</a></li>
      <li><a href="products">Products</a></li>
      <li><a href="career">Career</a></li>
      <li><a href="contact">Contact Us</a></li>      
    </ul>
    </div>
  </div>
</nav>

</head>
<body>
<div class="container" style="width: 100%;">
  <div class="row">
		@yield('content')		
  </div>
  <br>
    <center>
    <hr noshade>
  </center>
	<center>
  <div style="background-color: white">
  <div class="col-sm-2 col-sm-offset-2">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Company</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div> 
  <div class="col-sm-2 col-sm-offset-1">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Products</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>  
  <div class="col-sm-2 col-sm-offset-1">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Legal</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div> 
  </div>
</div>
</center> 
</div>
</body> 
<footer>
  <div class="container sFooter">
    <div class="row" style="margin-top: 10px">
      <div class="col-md-2 footerleft ">
        <div>© PsypherTxt Limited@2017</div>
      </div>
      
      <div class="col-md-2 footerright" style="float: right;">
        <a href="/">Privacy Policy</a> <!-- Change link to correct link -->
      </div>
    </div>
  </div>
</footer>
  <!-- Scripts and Css-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/spacelab/bootstrap.min.css">
<link href="{{ asset('/css/myCss.css') }}" rel="stylesheet">
</html>
