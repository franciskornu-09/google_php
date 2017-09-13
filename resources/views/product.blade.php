@extends('app')

@section('content')
  <div class="col-md-12" id="show" style="color: white;margin-top: 0">

  <div class="heading" style="margin-left:0">
    Products  
  </div> 
  <div class="col-md-12 ghanaTok" style="margin-left: 0">
    Download GhanaTok<br>
  </div>
  <div class="col-md-12" style="margin-top: 2%;">
   <span>
    <a href="/"><img src="/assets/app-store-badge.png" style="width: 147.1px; height: 40px;"></a>      
    </span>
    <a href="/"><img src="/assets/google-play-badge.png" style="width: 147.1px; height: 40px;" ></a>    
  </div>
    @foreach($place as $post)
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h3 class="card-title"><img src="{{$post['location']}}" style="width: 15%;height: 15%;margin-left:0;margin-right: 4px"> &nbsp;<span class="heading2">{{$post['name']}}</span></h3>
            <p class="card-text" style="font-size: 17px">{{$post['description']}}</p>
            
            <table cellspacing="100" style="margin-left: 0">
              <tr>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/facebook.png"></a>
                </td>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/twitter.png"></a>
                </td>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/instagram.png"></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="col-md-12" id="show_2" style="color: white;;margin-top: 2%">
  <div class="heading" style="margin-left: 17px">
    Products  
  </div> 
 
  <div class="col-md-12" style="margin-top: 30px;">
   <div class="ghanaTok"> Download GhanaTok</div><br>
    <a href="/"><img src="/assets/app-store-badge.png" style="width: 110px; height: 40px;margin-right: 0;"></a>      
  
    <a href="/"><img src="/assets/google-play-badge.png" style="width: 110px; height: 40px" ></a>    
  </div>
    @foreach($place as $post)
      <div class="col-sm-6" style="padding-bottom: 40px">
        <div class="card">
          <div class="card-block">
            <h3 class="card-title"><img src="{{$post['location']}}" style="width: 15%;height: 15%;margin-left: 0;margin-top: 1%"> &nbsp;<span class="heading2">{{$post['name']}}</span></h3>
            <p class="card-text" style="font-size: 17px">{{$post['description']}}</p>
            
            <table cellspacing="100" style="margin-left: 0">
              <tr>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/facebook.png"></a>
                </td>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/twitter.png"></a>
                </td>
                <td class="col-md-3 col-md-offset-2">
                  <a href="/"><img class="social_media" src="/assets/instagram.png"></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
