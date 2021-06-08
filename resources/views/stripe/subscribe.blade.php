@extends('layouts.default')
@section('content')

<div class="flex items-center justify-center mb-10">

  <div class="px-10 border-2 border-gray-600 md:w-3/6">
    <!-- Section Title -->
    <div class="my-10 text-center">
      <p class="text-3xl mb-5"><span class="border-b-2 border-gray-400">Souscription</span></p>
      <p>{{ $service[0]->name}}</p>
      <p>Montant: {{ $service[0]->price}}/mois*</p>
      <small>*prix TTC</small>
    </div>

    <form method="POST">
      @csrf
      <div class="mb-4">
        <label for="email">Email<span class="text-red-600">*</span> : </label>
        <input type="email" name="email" id="email" class="border border-gray-600 w-full px-1" value="{{ old('email') }}" autofocus>
        @error('email')
          <div class=" text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="phone">Numéro de téléphone<span class="text-red-600">*</span> : </label>
        <input type="tel" name="phone" id="phone" class="border border-gray-600 w-full px-1" value="{{ old('phone') }}" >
        @error('phone')
          <div class=" text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-4">
        <label for="discount">Code promo : </label>
        <input type="text" name="discount" id="discount" class="border border-gray-600 w-full px-1">
        <small class="text-red-600">*champs obligatoire</small>
      </div>

      <div class="mb-4 flex items-center justify-center">
        <button type="submit" class="border-2 border-blue-900 bg-blue-600 text-white px-10 py-1 hover:bg-blue-800">S'abonner</button>
      </div>

    </form>
  </div>

  </div>

</div>

@endsection