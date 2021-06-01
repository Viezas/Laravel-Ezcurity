@extends('layouts.default')
@section('content')

<div class="px-5 flex items-start justify-center flex-wrap mb-10">
  <div class="border-2 border-gray-600 w-full pb-10 mb-10 md:w-2/5 md:mr-10">
    <!-- Section Title -->
    <div class="my-10">
      <p class="text-center text-3xl font-bold text-blue-600"><span class="border-b-2 border-gray-400">Contact</span></p>
    </div>

    <!-- Contact info container -->
    <div class="px-2">
      <ul class="text-center">
        <li class="mb-3"><span class="border-b-2 border-blue-600">Adresse : 19 Rue Yves Toudic, 75010 Paris</span></li>
        <li class="mb-3"><span class="border-b-2 border-blue-600">Mail : contact@ecole-webstart.com</span></li>
        <li class="mb-3"><span class="border-b-2 border-blue-600">Téléphone : 01 42 41 97 76</span></li>
      </ul>

      <div>
        <img src="/img/screenshot.png" alt="googlemap location">
      </div>
    </div>
  </div>

  @include('contact.contactForm')
</div>

@endsection