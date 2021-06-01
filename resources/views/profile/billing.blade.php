@extends('layouts.profile')
@section('content')

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">
  
  <div class="border-2 border-black py-6 px-2 md:px-10 xl:px-20">
    <div class="mb-6">
      <p class="text-blue-600 text-3xl text-center">Mes abonnements</p>
    </div>

    <div class="border-b-2 border-blue-600 flex items-center justify-between mb-5">
      <p>Facture du : 01/01/2021</p>
      <div class="flex items-center justify-between">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="blue">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
          </svg>
        </button>
      </div>
    </div>

    <div class="border-b-2 border-blue-600 flex items-center justify-between mb-5">
      <p>Facture du : 01/02/2021</p>
      <div class="flex items-center justify-between">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="blue">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
          </svg>
        </button>
      </div>
    </div>
  </div>

</div>

@endsection