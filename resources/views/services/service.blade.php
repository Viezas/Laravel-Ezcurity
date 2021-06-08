@extends('layouts.default')
@section('content')

<div class="mb-10 lg:px-20 xl:px-52">

  @foreach($services as $service)
  <div class="border-2 border-gray-600 mt-4 mb-10 flex items-center justify-center flex-wrap">
    <div class="flex items-center justify-center md:w-1/3">
      <img src="/img/products/camera.jpg" alt="sensor" class="max-h-32">
    </div>
    <div class="bg-blue-600 text-white px-2 md:w-2/3 md:px-6 lg:px-10 xl:px-14">
      <p class="text-2xl text-center">{{ $service->name }}</p>
      <p class="text-xl text-center mb-2">Prix : {{ $service->price }}€/mois</p>
      <p> {{ $service->description }} </p>
      <div class="flex items-center justify-center my-4">
        <a href="{{ route('subscribeForm', ['id' => $service->id ]) }}" class="border-2 border-gray-600 bg-white text-black px-10 py-1">S'abonner</a>
      </div>
    </div>
  </div>
  @endforeach

</div>

@endsection