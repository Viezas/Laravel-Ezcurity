@extends('layouts.profile')
@section('content')

@if (session('denied'))
  <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600">
    <ul>
      <li>{{ session('denied') }}</li>
    </ul>
  </div>
@endif

@if (session('success'))
  <div class="bg-green-300 text-3xl text-center w-full py-5 mb-10 text-green-600">
    <ul>
      <li>{{ session('success') }}</li>
    </ul>
  </div>
@endif

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">

  <form action="{{ route('profile.update') }}" method="POST" class="border-2 border-black flex justify-center items-center flex-wrap py-6 mb-10 md:px-20">
    @csrf
    <div class="mb-6">
      <p class="text-blue-600 text-3xl text-center">Mes informations</p>
    </div>

    <!-- Name -->
    <div class="w-5/6 mb-5">
      <label for="name">Nom d'utilisateur</label><br>
      <input type="text" name="name" id="name" class="border border-gray-600 w-full px-1" value="{{ old('name') ? old('name') : Auth::user()->username }}" required>
      @error('name')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- Email -->
    <div class="w-5/6 mb-5">
      <label for="email">Email</label><br>
      <input type="text" name="email" id="email" class="border border-gray-600 w-full px-1" value="{{ old('email') ? old('email') :  Auth::user()->email }}" required>
      @error('email')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- Password  -->
    <div class="w-5/6 mb-5">
      <label for="password">Mot de passe</label><br>
      <input type="password" name="password" id="password" class="border border-gray-600 w-full px-1" placeholder="Pour des raisons de sécurité, le mot de passe n'est pas afficher">
    </div>

    <!-- Tel  -->
    <div class="w-5/6 mb-5">
      <label for="phone">Numéro de téléphone</label><br>
      <input type="tel" name="phone" id="phone" class="border border-gray-600 w-full px-1" value="{{ old('phone') ? old('phone') : Auth::user()->phone }}" required>
      @error('phone')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="bg-yellow-600 border-2 border-yellow-900 px-5 py-1 my-2 hover:bg-yellow-900">Modifier</button>
  </form>
</div>
@endsection