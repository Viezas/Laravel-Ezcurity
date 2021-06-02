@extends('layouts.admin')
@section('content')

<div class="mb-10 flex items-center justify-center">
  <table class="w-full border-2 border-gray-400 md:w-5/6">
    <thead>
      <tr class="bg-gray-300">
        <th class="border-r border-gray-400">#</th>
        <th class="border-r border-gray-400">Titre</th>
        <th class="border-r border-gray-400">Date</th>
        <th class="border-r border-gray-400">Publié</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border-r border-gray-400 md:text-center">1</td>
        <td class="border-r border-gray-400 md:pl-2">News 1</td>
        <td class="border-r border-gray-400 md:pl-2">01/01/2021</td>
        <td class="border-r border-gray-400 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="green">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </td>
        <td class="border-r border-gray-400">
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="orange">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </td>
        <td>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </a>
        </td>
      </tr>

      <tr class="bg-gray-300">
        <td class="border-r border-gray-400 md:text-center">2</td>
        <td class="border-r border-gray-400 md:pl-2">News 2</td>
        <td class="border-r border-gray-400 md:pl-2">02/01/2021</td>
        <td class="border-r border-gray-400 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </td>
        <td class="border-r border-gray-400">
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="orange">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </a>
        </td>
        <td>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </a>
        </td>
    </tbody>
  </table>
</div>

@endsection 