@extends('app')

@section('content')
<div class="heading" style="width: 100%;font-size: auto">
   Contact Us
</div>
<div class="hidden-sm hidden-xs">
<div class="col-sm-6">
<div class="heading3"> General Enquiries</div>
<form class="form-horizontal" action="{{action('MailController@basic_email')}}" method="post" style="width:auto;margin-top: 1%;margin-left: -2%">
  <fieldset>
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" id="inputEmail" name="inputEmail" placeholder="Email:">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" id="name" name="username" placeholder="Name:">
      </div>
    </div>
 
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" placeholder="Message:" id="message" name="message">
      </div>
    </div>
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
      <div class="col-lg-10">
        <button type="reset" class="btn trans-button" style="color: #e6e6e6">Cancel</button>&nbsp;
        <button type="submit" class="btn trans-button" style="color: white"><b>SUBMIT</b></button>
      </div>
    </div>
    </fieldset>
</form>
</div>
<div class="col-md-5" style="padding-bottom: 90px">
  <div class="heading3" style="margin-left: 0"> Address</div>
  <div class="address">
    42A Orphan Crescent, Labone
    <br><br>
    Psyphertxt Ltd, P. O. Box CT 3030 Cantonments Accra, Greater Accra Region, 00233 Ghana 
    <br><br>
    Telephone: (+233) 50 133 8697, 50 133 8687, 50 162 0992
    <br><br>

    General: info@psyphertxt.com 
    Support: support@psyphertxt.com 
   
  </div>
</div>
</div>

<div class="hidden-lg hidden-md">
<div class="col-md-12">
 <div class="heading3" style="margin-left: 0"> General Enquiries</div>
  <form class="form-horizontal" action="{{action('MailController@basic_email')}}" method="post" style="width:auto;margin-top: 1%;margin-left: -2%">
   <fieldset>
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" id="inputEmail" name="inputEmail" placeholder="Email:">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" id="name" name="username" placeholder="Name:">
      </div>
    </div>
 
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control box" placeholder="Message:" id="message" name="message">
      </div>
    </div>
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
      <div class="col-lg-10">
        <button type="reset" class="btn trans-button" style="color: #e6e6e6">Cancel</button>&nbsp;
        <button type="submit" class="btn trans-button" style="color: white"><b>SUBMIT</b></button>
      </div>
    </div>
    </fieldset>
</form>
</div>
<div class="col-md-12">
  <div class="heading3" style="margin-left: 0"> Address</div>
  <div class="address_2">
    63 Hotel Road 
    (First right turn after JoyFM and SG-SSB) 
    Kokomlemle - Accra, Ghana. 
    <br><br>
    P.O. Box CT 2156 Cantonments Accra, Ghana. 
    <br><br>
    Telephone: (+233) 30 225 6859, 30 222 2081, 20 253 2273
    Toll Free: 0800 222 081 
    <br><br>

    General: info@hubtel.com 
    Sales: sales@hubtel.com 
    Help: support@hubtel.com
  </div>
  <br>
</div>
</div>
</div>

<!-- <div class="col-sm-6" >
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
</div> -->

@endsection