@extends('layouts.default')
@section('content')

<div>
  <!-- News slideshow -->
  @include('homepage.newsSlideshow')

  <!-- Homepage services presentation -->
  @include('homepage.services')

  <!-- Ezcurity promises-->
  @include('homepage.promises')
</div>

@endsection