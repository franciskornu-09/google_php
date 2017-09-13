@extends('app')

@section('content')
  <div style="color: white">
    @foreach($location as $post)
      {{$post->lat}}
      {{$post->lng}}
      {{$post->name}}
      {{$post->address}}

    @endforeach
  </div>
@endsection