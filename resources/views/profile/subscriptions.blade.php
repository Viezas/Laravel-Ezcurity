@extends('layouts.profile')
@section('content')

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">
  
  <div class="border-2 border-black py-6 px-2 md:px-10 xl:px-20">
    <div class="mb-6">
      <p class="text-blue-600 text-3xl text-center">Mes abonnements</p>
    </div>

    <div class="border-b-2 border-blue-600 flex items-center justify-between mb-5">
      <p>Détecteur de fumée (ZGMF-P07)</p>
      <div class="flex items-center justify-between w-1/5 md:w-1/6">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="orange">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
      </div>
    </div>

    <div class="border-b-2 border-blue-600 flex items-center justify-between mb-5">
      <p>Détecteur de mouvement (DMVC-745B)</p>
      <div class="flex items-center justify-between w-1/5 md:w-1/6">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="blue">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
      </div>
    </div>
  </div>

</div>

@endsection