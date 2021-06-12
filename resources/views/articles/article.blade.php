@extends('layouts.default')
@section('content')

<div class="px-10 mb-10">
  <div class="border-2 border-gray-600 px-4 py-2">
    <p class="text-xl text-center">{{ $article[0]->title }}</p><br>
    <p>{{ $article[0]->body }}</p>
  </div>
</div>

@endsection