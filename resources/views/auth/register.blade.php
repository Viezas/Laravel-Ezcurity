@extends('layouts.default')
@section('content')

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">

  <div class="mb-6 mt-5">
    <p class="text-blue-600 text-3xl text-center">Inscription</p>
  </div>

  <form action="" class="border-2 border-black flex justify-center items-center flex-wrap py-6 mb-10 md:px-20">

    <!-- Name -->
    <div class="w-5/6 mb-5">
      <label for="name">Nom d'utilisateur<span class="text-red-600">*</span></label><br>
      <input type="text" name="name" id="name" class="border border-gray-600 w-full px-1" autofocus required>
    </div>

    <!-- Email -->
    <div class="w-5/6 mb-5">
      <label for="email">Email<span class="text-red-600">*</span></label><br>
      <input type="text" name="email" id="email" class="border border-gray-600 w-full px-1" autofocus required>
    </div>

    <!-- Password  -->
    <div class="w-5/6 mb-5">
      <label for="password">Mot de passe<span class="text-red-600">*</span></label><br>
      <input type="password" name="password" id="password" class="border border-gray-600 w-full px-1" autofocus required>
    </div>

    <!-- Tel  -->
    <div class="w-5/6 mb-1">
      <label for="phone">Numéro de téléphone<span class="text-red-600">*</span></label><br>
      <input type="tel" name="phone" id="phone" class="border border-gray-600 w-full px-1" autofocus required>
    </div>

    <small class="text-red-600 w-5/6 mb-5">*champs obligatoire</small>

    <button type="submit" class="text-white bg-blue-600 border-2 border-blue-900 px-5 py-1 mb-2 hover:bg-blue-900">Inscription</button>
    <small class="w-5/6 text-center">Vous possédez déjà compte ? <a href="{{ route('login') }}" class="text-blue-500 underline">Connectez-vous.</a></small>
  </form>
</div>


@endsection