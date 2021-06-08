@extends('layouts.default')
@section('content')

<div>
  @if (session('denied'))
  <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600">
      <ul>
        <li>{{ session('denied') }}</li>
      </ul>
  </div>
  @endif
  <!-- News slideshow -->
  <livewire:news-slider />

  <!-- Homepage services presentation -->
  @include('homepage.services')

  <!-- Ezcurity promises-->
  @include('homepage.promises')
</div>

@endsection