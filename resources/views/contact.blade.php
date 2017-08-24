@extends('master')

@section('content')
<div class="masterSpace">
  <center>
	  <img src="/assets/Psyphertxt_logo-06.png" height="250" style="width: 50%;z-index: -1">
		<h2 style="color: white"><i>Contact Us</i></h2>
		<hr noshade>
	</center>
</div>
<div class="col-sm-5">
<form class="form-horizontal" action="{{action('MailController@basic_email')}}" method="post" style="width:auto;">
  <fieldset>
  	<br>
    <center><legend class="myColor">General Enquiries</legend></center>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
      </div>
    </div>

    <div class="form-group">
    	<label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="name" name="username" placeholder="Name">
      </div>
    </div>
 
    <div class="form-group">
      <label for="message" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
      </div>
    </div>
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <br>
    <center><legend class="myColor">Get in touch</legend></center>
  	<div>
  		<p class="mySize"><span class="glyphicon glyphicon-comment myColor"></span>&nbsp;dev@psyphertxt.com</p>
  	</div>
  	<div>
  		<p class="mySize"><span class="glyphicon glyphicon-phone-alt myColor"></span>&nbsp; 0244504815 / 0203912958</p>
  	</div>
  </fieldset>
</form>
</div>
<div class="col-sm-6" >
 <style type="text/css">
    #mymap {
    	margin-top: 1% !important;
        height: 70% !important;
        width: 115% !important;
        overflow:hidden !important;
      }
 </style>
 <div id="mymap"></div>
 <script type="text/javascript">
  var locations = <?php print_r(json_encode($location)) ?>;
   // var markers = {!! json_encode($location) !!}; //this should dump a javascript array object which does not need any extra interperting.
   //  var marks = []; 

    var mymap = new GMaps({
      el: '#mymap',
      lat: 5.569260300000001,
      lng: -0.1727375,
      zoom:14
    });

    GMaps.geolocate({
      success: function(position) {
    mymap.setCenter(position.coords.latitude, position.coords.longitude);
  
      mymap.addMarker({
        lat: locations.lat,
        lng: locations.lng,
        title: locations.name,
        // click: function(e) {
        //   alert(locations.name + ' can be located at '+ locations.address);
        // }
      });
  }
  });
</script>
</div>
@endsection
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp0Qg1G9d_wrIKtW4bLsthYxXK9tIxTrI" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>