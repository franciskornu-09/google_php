<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Montserrat?selection.family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<title>Cyfa</title>
</head>
<body class="background">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" style="margin-left: 8%"><img id="image" src="/assets/Psyphertxt_logo-06.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right menu" id="hide_ul">
        <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="/">HOME</a></li>
        <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="about">ABOUT US</a></li>
        <li class="{{ Request::is('products') ? 'active' : ''}}"><a href="products">PRODUCTS</a></li>
        <li class="{{ Request::is('career') ? 'active' : ''}}"><a href="career">CAREER</a></li>
        <li class="{{ Request::is('contact') ? 'active' : ''}}"><a href="contact">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right menu_2" id="hide_ul_2">
        <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="/">HOME</a></li>
        <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="about">ABOUT US</a></li>
        <li class="{{ Request::is('products') ? 'active' : ''}}"><a href="products">PRODUCTS</a></li>
        <li class="{{ Request::is('career') ? 'active' : ''}}"><a href="career">CAREER</a></li>
        <li class="{{ Request::is('contact') ? 'active' : ''}}"><a href="contact">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav menu_2" id="hide_ul_3">
        <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="/">HOME</a></li>
        <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="about">ABOUT US</a></li>
        <li class="{{ Request::is('products') ? 'active' : ''}}"><a href="products">PRODUCTS</a></li>
        <li class="{{ Request::is('career') ? 'active' : ''}}"><a href="career">CAREER</a></li>
        <li class="{{ Request::is('contact') ? 'active' : ''}}"><a href="contact">CONTACT</a></li>
      </ul>
      </div>
      </div>
     </nav>
  <div class="container">
  @yield('content')
</div>
</body>
<div id="footer" class="show_footer">
    <div class="container">
      <div class="col-md-4  footerleft">
     <p class="footer-block"><a class="anchor" href="/">©PSYPHERTXT LIMITED</a></p>
     </div>
     <div class="col-md-7 footerright">
       <p class="footer-block-2"><a class="anchor" href="/"> Privacy Policy</a></p>
     </div>
    </div>
  </div>
  
  <div id="footer" class="show_footer_2">
    <div class="container">
    <!-- <span> -->
   <!--   <p class="footer-block"><a class="anchor" href="/">©PSYPHERTXT LIMITED</a></p>
     <p class="footer-block-2"><a class="anchor" href="/"> Privacy Policy</a></p>
 -->
    <table style="margin-top: -18px;width: 100%">
      <tr>
        <td>
          <a href="/"><p class="footer-block">©PSYPHERTXT LIMITED</p></a> 
        </td>
        <td>
          <a href="/"><p class="footer-block-2">Privacy Policy</p></a>
        </td>
      </tr>
    </table>
<!--      </span> -->
    </div>
  </div>
<!-- <script type="text/javascript">
  var url = location.href;
  alert(url);
</script> -->
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/spacelab/bootstrap.min.css">
<link href="{{ asset('/css/myCss.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<script src="{{ asset('/js/myScript.js') }}"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</html>
