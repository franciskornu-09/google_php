@extends('master')

@section('content')
  <div class="masterSpace">
  <center>
  <img src="/assets/Psyphertxt_logo-06.png" height="250" style="width: 50%;z-index: -1">
	<h2><i style="color: white">About Us</i></h2>	

		<hr noshade>
	</center>
	</div>
	<center>
	<ul class="nav nav-tabs" style="width: 50%; margin-top: 1%">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#profile" data-toggle="tab">Profile</a></li>
</ul>
<div id="myTabContent" class="tab-content" style="width: 50%;margin-bottom: 10%">
  <div class="tab-pane fade active in" id="home">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
  </div>
  <div class="tab-pane fade" id="profile">
 <div class="card col-sm-3 col-sm-offset-2" style="width: 20rem;">
  <img class="card-img-top" width="100" height="100" src="https://appstickers-cdn.appadvice.com/1191205189/820377209/fc05652a94f75a5305a8ba818ccc88e7-9.png">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
 <div class="card col-sm-3 col-sm-offset-2" style="width: 20rem;">
  <img class="card-img-top" width="100" height="100" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/6/000/1cb/368/3b824c4.jpg">
  <div class="card-block">
    <h4 class="card-title">Evans</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div><div class="card col-sm-3 col-sm-offset-2" style="width: 20rem;">
  <img class="card-img-top" width="100" height="100" src="https://appstickers-cdn.appadvice.com/1191205189/820377209/fc05652a94f75a5305a8ba818ccc88e7-9.png">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
  </div>
</div>
</center>
@endsection