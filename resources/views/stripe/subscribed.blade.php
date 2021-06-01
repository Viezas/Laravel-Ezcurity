@extends('layouts.default')
@section('content')

<div class="flex items-center justify-center mb-10">

  <div class="border-2 border-gray-600 w-full md:w-1/2 xl:w-1/3">
    <div class="my-10 text-center">
      <p class="text-3xl mb-10 text-green-400"><span class="border-b-2 border-gray-400">Payement effectué </p>
      <ul>
        <li class="mb-1">Montant : 40€/mois</li>
        <li class="mb-1">Souscrit le : 01/01/2021 à 00:00:00</li>
        <li class="mb-1">Renouvellement le : 01/02/2021 à 00:00:00</li>
        <li class="mb-1">4 derniers chiffre de la CB : 0123</li>
      </ul>
    </div>
  </div>

</div>

@endsection