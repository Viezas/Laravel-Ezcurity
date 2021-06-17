@extends('layouts.default')
@section('content')

<div class="px-5 py-2">

@if (session('denied'))
  <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600">
      <ul>
        <li>{{ session('denied') }}</li>
      </ul>
  </div>
  @endif

  @if(!$news->isEmpty())
  <!-- Section title + results number -->
  <div class="mb-6 mt-5 text-center">
    <p class="text-blue-600 text-3xl">Actualités</p>
    <small>(Resultats : {{ count($news) }})</small>
  </div>

  <!-- Articles container -->
  <div class="flex justify-center items-center flex-wrap">

  @foreach($news as $actuality)
    <div class="border-2 border-black mb-8 w-full md:mr-10 md:w-2/5 xl:w-1/3">
      <a href="{{ route('article', ['id' => $actuality->id]) }}">
        <div>
          <div class="border-b-2 border-black w-full flex items-center justify-center">
            <img src="{{$actuality->img_url}}" alt="illustration image" class="max-h-52">
          </div>

          <div class="p-2 text-center">
            <p class="text-lg mb-2">{{ $actuality->title }}</p>  
            <p>                                       
            {{ strlen($actuality->body) > 50 ? substr($actuality->body,0,50)."..." : $actuality->body }}
            </p>
            <a href="{{ route('article', ['id' => $actuality->id]) }}" class="text-sm text-blue-600 hover:underline">En savoir plus</a>
          </div>
        </div>
      </a>
    </div>
  @endforeach
  @else
    <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600">
      <ul>
        <li>Pas de résultat pour votre recherche</li>
      </ul>
    </div>
  @endif
  </div>
</div>

@endsection