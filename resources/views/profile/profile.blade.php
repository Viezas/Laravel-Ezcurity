@extends('layouts.profile')
@section('content')

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">

  <form action="{{ route('profile') }}" class="border-2 border-black flex justify-center items-center flex-wrap py-6 mb-10 md:px-20">
    <div class="mb-6">
      <p class="text-blue-600 text-3xl text-center">Mes informations</p>
    </div>

    <!-- Name -->
    <div class="w-5/6 mb-5">
      <label for="name">Nom d'utilisateur</label><br>
      <input type="text" name="name" id="name" class="border border-gray-600 w-full px-1" value="username" required>
    </div>

    <!-- Email -->
    <div class="w-5/6 mb-5">
      <label for="email">Email</label><br>
      <input type="text" name="email" id="email" class="border border-gray-600 w-full px-1" value="username@email.com" required>
    </div>

    <!-- Password  -->
    <div class="w-5/6 mb-5">
      <label for="password">Mot de passe</label><br>
      <input type="password" name="password" id="password" class="border border-gray-600 w-full px-1" value="******************" required>
    </div>

    <!-- Tel  -->
    <div class="w-5/6 mb-1">
      <label for="phone">Numéro de téléphone</label><br>
      <input type="tel" name="phone" id="phone" class="border border-gray-600 w-full px-1" value="0101010101" required>
    </div>

    <button type="submit" class="bg-yellow-600 border-2 border-yellow-900 px-5 py-1 my-2 hover:bg-yellow-900">Modifier</button>
  </form>
</div>
@endsection