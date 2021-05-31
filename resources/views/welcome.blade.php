@extends('layouts.default')
@section('content')

<div>
  <!-- News slideshow -->
  @include('_partials.homepage.newsSlideshow')

  <!-- Homepage services presentation -->
  @include('_partials.homepage.services')

  <!-- Ezcurity promises-->
  @include('_partials.homepage.promises')
</div>

@endsection