@extends('layouts.admin')
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

<livewire:news />

@endsection 