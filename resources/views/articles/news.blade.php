@extends('layouts.default')
@section('content')

<div class="px-5 py-2">

  <!-- Section title + results number -->
  <div class="mb-6 mt-5 text-center">
    <p class="text-blue-600 text-3xl">Actualités</p>
    <small>(Resultats : 24)</small>
  </div>

  <!-- Articles container -->
  <div class="flex justify-center items-center flex-wrap">

    <div class="border-2 border-black mb-8 w-full md:mr-10 md:w-2/5 xl:w-1/3">
      <a href="{{ route('article', ['id' => 1]) }}">
        <div>
          <div class="border-b-2 border-black w-full flex items-center justify-center">
            <img src="/img/news/sensor1.jpg" alt="sensor" class="max-h-52">
          </div>

          <div class="p-2">
            <p class="text-lg mb-2 text-center">Titre</p>  
            <p class="text-center">                                       
              Body
            </p>
            <a href="/" class="text-sm text-blue-600 hover:underline">En savoir plus</a>
          </div>
        </div>
      </a>
    </div>

    <div class="border-2 border-black mb-8 w-full md:w-2/5 xl:w-1/3">
      <a href="{{ route('article', ['id' => 1]) }}">
        <div>
          <div class="border-b-2 border-black w-full flex items-center justify-center">
            <img src="/img/news/sensor2.jpg" alt="sensor" class="max-h-52">
          </div>

          <div class="p-2">
            <p class="text-lg mb-2 text-center">Titre</p>  
            <p class="text-center">                                       
              Body
            </p>
            <a href="{{ route('article', ['id' => 1]) }}" class="text-sm text-blue-600 hover:underline">En savoir plus</a>
          </div>
        </div>
      </a>
    </div>

    <div class="border-2 border-black mb-8 w-full md:mr-10 md:w-2/5 xl:w-1/3">
      <a href="/">
        <div>
          <div class="border-b-2 border-black w-full flex items-center justify-center">
            <img src="/img/news/Feu.jpg" alt="sensor" class="max-h-52">
          </div>

          <div class="p-2">
            <p class="text-lg mb-2 text-center">Titre</p>  
            <p class="text-center">                                       
              Body
            </p>
            <a href="/" class="text-sm text-blue-600 hover:underline">En savoir plus</a>
          </div>
        </div>
      </a>
    </div>
  </div>

</div>

@endsection