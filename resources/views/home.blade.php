@extends('app')

@section('content')
 <div class="row">
 <div class="hidden-sm hidden-xs">
  <div class="col-md-6 main">
 	
 	<b>Our focus</b> is the development, publishing,
	lifestyle and game products on mobile, web
	and physical media, targeted at all ages
	and groups worldwide. 
	<br><br>
	<b>Our company</b> exist to create products
	that address real needs. 

	<br>
	<br>
	<div>
  <a href="about"><button type="button" class="btn trans-button"> ABOUT US</button></a>
  </div>
  </div>
  <center>
  <div class="col-md-5">
     <span class="download-GhanaTok">
 		Download GhanaTok
 	</span><br><br>
 	<div>
 	  <span>
 		<a href="/"><img src="/assets/app-store-badge.png" style="width: 147.1px; height: 40px;margin-right: 10%" class="App_Store_Badge"></a>			
 	  </span>
 		<a href="/"><img src="/assets/google-play-badge.png" style="width: 147.1px; height: 40px" class="google-play_badge"></a> 		
 	</div>
 	<center>
 	 <img src="/assets/app-image.png" style="height: auto;width: 578px;height: 569px;margin-top: 5%;margin-right: 10%">	
</center>
  </div>
  </div>
 <div class="hidden-lg hidden-md hidden-xs">
  <div class="col-md-6 main">
 	
 	<b>Our focus</b> is the development, publishing,
	lifestyle and game products on mobile, web
	and physical media, targeted at all ages
	and groups worldwide. 
	<br><br>
	<b>Our company</b> exist to create products
	that address real needs. 

	<br>
	<br>
	<div>
  <a href="about"><button type="button" class="btn trans-button"> ABOUT US</button></a>
  </div>
  </div>
  <center>
  <div class="col-md-7">
     <span class="download-GhanaTok">
 		Download GhanaTok
 	</span><br>
 	<div>
 	  <span>
 		<a href="/"><img src="/assets/app-store-badge.png" style="width: 147.1px; height: 40px" class="App_Store_Badge"></a>			
 	  </span>
 		<a href="/"><img src="/assets/google-play-badge.png" style="width: 147.1px; height: 40px" class="google-play_badge"></a> 		
 	</div>
 	<center>
 	 <img src="/assets/app-image.png" style="height: auto;width: 578px;height: 522px;margin-top: 5%;margin-right: 10%">	
</center>
  </div>
  </div>
<!--   <div class="col-md-12 ">
     <span class="download-GhanaTok">
 		Download GhanaTok
 	</span><br>
 	<div>
 	  <span>
 		<a href="/"><img src="/assets/app-store-badge.png" style="width: 120px; height: 50px" class="App_Store_Badge"></a>			
 	  </span>
 		<a href="/"><img src="/assets/google-play-badge.png" style="width: 120px; height: 50px" class="google-play_badge"></a> 		
 	</div>
 	<center>
 	 <img src="/assets/app-image.png" style="height: auto;width: 578px;height: 522px;margin-top: 5%;margin-right: 10%">	
</center>
  </div> -->
  <div class="col-md-12" id="hide">
  <h2 class="col-md-12 main_3"><b>Psyphertxt Ltd.</b></h2>
  <div class="col-md-6 main_2">
 	<b>Our focus</b> is the development, publishing,
	lifestyle and game products on mobile, web
	and physical media, targeted at all ages
	and groups worldwide. 
	<br><br>
	<b>Our company</b> exist to create products
	that address real needs. 

	<br>
	<br>
    <br>
     <div class="mobile-GhanaTok col-md-12">
 		Download GhanaTok
 	</div><br>
 	<div style="margin-top:0">
 	<!-- <table cellspacing="100" style="width: 100%">
 		<tr>
 			<td style="width: 410px">
 				<a href="/"><img src="/assets/app-store-badge.png" style="width: 400px; height: 30px"></a>
 			</td>
 			<td style="width: 410px">
         	  	<a href="/"><img src="/assets/google-play-badge.png" style="width: 400px; height: 30px;"></a> 				
 			</td>
 		</tr>		
 	</table> -->
 	  <span>
 	  	<center>
 	  		<a href="/"><img src="/assets/app-store-badge.png" style="width: 85px; height: 40px;margin-top: 0;margin-right:40px"></a>			
 	 
 	  	<a href="/"><img src="/assets/google-play-badge.png" style="width: 80px; height: 40px;margin-top: 0"></a>
 	  	</center>
 	  </span>

 	<div style="color: white;margin-top: 100px;margin-bottom: -100px;padding-bottom: 40px">
 	  <div><h2 class="main_3"><b>Our Products</b></h2></div><hr>
    @foreach($place as $post)
      <div>
        <div class="card">
          <div class="card-block">
            <h3 class="card-title"><img src="{{$post['location']}}" style="width: 15%;height: 15%;margin-top: 1%"> &nbsp;<span class="heading4">{{$post['name']}}</span></h3>
            <p class="card-text" style="font-size: 15px">{{$post['description']}}</p>
            
            <table>
              <tr>
                <td>
                  <a href="/"><img class="social_media" src="/assets/facebook.png"></a>
                </td>
                <td>
                  <a href="/"><img class="social_media" src="/assets/twitter.png"></a>
                </td>
                <td>
                  <a href="/"><img class="social_media" src="/assets/instagram.png"></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    @endforeach
  </div>	 		
 	</div>
  </div>
  </div>
 </div>
@endsection