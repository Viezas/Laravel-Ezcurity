@extends('layouts.profile')
@section('content')

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">
  
  <div class="border-2 border-black py-6 px-2 md:px-10 xl:px-20 flex justify-center items-center">
  <p><a href="{{ Auth::user()->billingPortalUrl(route('profile.billing')) }}" class="text-blue-600 text-xl">Voir mes factures</a></p>
  </div>

</div>

@endsection