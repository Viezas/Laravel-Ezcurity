@extends('layouts.default')
@section('content')

<div class="mb-10 lg:px-20 xl:px-52">

  <div class="border-2 border-gray-600 mt-4 mb-10 flex items-center justify-center flex-wrap">
    <div class="flex items-center justify-center md:w-1/3">
      <img src="/img/products/sensor1.jpg" alt="sensor" class="max-h-32">
    </div>
    <div class="bg-blue-600 text-white px-2 md:w-2/3 md:px-6 lg:px-10 xl:px-14">
      <p class="text-2xl text-center">ZGFM-P07</p>
      <p class="text-xl text-center mb-2">Prix : 40€/mois</p>
      <p>
        Détecteur de fumée haute gamme permettant de prévenir les risques d'incendies.<br>
        Installation gratuite et garantie à vie durant toute la durée de la souscription à ce service.
      </p>
      <div class="flex items-center justify-center my-4">
        <a href="{{ route('subscribe') }}" class="border-2 border-gray-600 bg-white text-black px-10 py-1">S'abonner</a>
      </div>
    </div>
  </div>

  <div class="border-2 border-gray-600 mt-4 mb-10 flex items-center justify-center flex-wrap">
    <div class="flex items-center justify-center md:w-1/3">
      <img src="/img/products/sensor2.jpg" alt="sensor" class="max-h-32">
    </div>
    <div class="bg-blue-600 text-white px-2 md:w-2/3 md:px-6 lg:px-10 xl:px-14">
      <p class="text-2xl text-center">DMVC-745B</p>
      <p class="text-xl text-center mb-2">Prix : 40€/mois</p>
      <p>
        Détecteur de mouvement permettant envoyant une notification lorsqu'elle est activée.<br>
        Installation gratuite et garantie à vie durant toute la durée de la souscription à ce service.
      </p>
      <div class="flex items-center justify-center my-4">
        <a href="{{ route('subscribe') }}" class="border-2 border-gray-600 bg-white text-black px-10 py-1">S'abonner</a>
      </div>
    </div>
  </div>

</div>

@endsection