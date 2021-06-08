@extends('layouts.default')
@section('content')

<div class="py-5 bg-blue-600 mb-10">

  @if (session('denied'))
  <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600">
      <ul>
        <li>{{ session('denied') }}</li>
      </ul>
  </div>
  @endif

  <!-- Section Title -->
  <div class="my-10">
    <p class="text-center text-3xl font-bold text-white"><span class="border-b-2 border-white">Nos Services</span></p>
  </div>

  <!-- Services container -->
  <div class="flex flex-wrap items-center justify-center px-4 md:px-10 lg:px-0">

    <!-- Videosurveillance -->
    <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:mr-10 lg:h-96 lg:px-8 xl:w-1/4">
      <img src="img/icons/cctv-camera.png" alt="Camera icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Vidéosurveillance</p>
        <p class="text-lg">Gardez un œil sur votre domaine où que vous soyez grâce à l'application Ezcurity !</p>
      </div>
      <a href="{{ route('service', ['service' => 'camera']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>

    <!-- Alarmes -->
    <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:h-96 lg:px-8 xl:w-1/4 xl:mr-10">
      <img src="img/icons/alert.png" alt="Alarme icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Alarme de sécurité</p>
        <p class="text-lg">Alarme de sécurité retentissant lorsqu'une effraction dans votre domicile est confirmé.</p>
      </div>
      <a href="{{ route('service', ['service' => 'alarm']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>

    <!-- Badge -->
    <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:mr-10 lg:h-96 lg:px-8 xl:w-1/4 xl:mr-0">
      <img src="img/icons/keycard.png" alt="Keycard icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Badge de sécurité</p>
        <p class="text-lg">Badge de sécurité facile d'utilisation permettant d'activer et désactiver l'alarme.</p>
      </div>
      <a href="{{ route('service', ['service' => 'keycard']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>

    <!-- Biométrique -->
    <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:h-96 lg:px-8 xl:w-1/4 xl:mr-10">
      <img src="img/icons/eye-recognition.png" alt="Biometric system icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Système biométrique</p>
        <p class="text-lg">Contrôlez le flux d'accès à votre domaine grâce à ce système biométrique modulable.</p>
      </div>
      <a href="{{ route('service', ['service' => 'biometric']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>

    <!-- Detecteur -->
    <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:mr-10 lg:h-96 lg:px-8 xl:w-1/4 xl:mr-10">
      <img src="img/icons/sensor.png" alt="Sensor icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Détecteur</p>
        <p class="text-lg">Détecteurs toujours en marche envoyant une notification sur lorsqu'un incident se produit.</p>
      </div>
      <a href="{{ route('service', ['service' => 'sensor']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>

     <!-- App -->
     <div class="border-2 border-gray-400 bg-white py-6 px-7 flex items-center justify-center flex-wrap mb-10 md:px-20 lg:w-2/5 lg:h-96 lg:px-8 xl:w-1/4 xl:mr-0">
      <img src="img/icons/cell-phone.png" alt="Cell phone icon" class="h-20">
      <div class="w-auto text-center mb-4">
        <p class="text-2xl text-blue-600 my-4">Application mobile</p>
        <p class="text-lg">L'application mobile Ezcurity vous permet de manager en temps réel vos installations.</p>
      </div>
      <a href="{{ route('service', ['service' => 'app']) }}" class="border border-gray-600 px-5 text-xl hover:bg-blue-600 hover:text-white">Consulter les offres</a>
    </div>
    
  </div>
</div>

@endsection