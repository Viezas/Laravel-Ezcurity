@extends('layouts.admin')
@section('content')
<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">

  <form action="{{ route('admin.news.create') }}" method="POST" enctype="multipart/form-data" class="border-2 border-black flex justify-center items-center flex-wrap py-6 mb-10 md:px-20">
  @csrf
    <!-- Title -->
    <div class="w-5/6 mb-5">
      <label for="title">Titre<small class="text-red-600">*</small></label><br>
      <input type="text" name="title" id="title" class="border border-gray-600 w-full px-1" value="{{ old('title') ? old('title') : '' }}">
      @error('title')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- Body -->
    <div class="w-5/6 mb-5">
      <label for="body">Body<small class="text-red-600">*</small></label><br>
      <textarea name="body" class="resize-none w-full h-96" id="body">{{ old('body') ? old('body') : '' }}</textarea>
      @error('body')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- dates -->
    <div class="w-5/6 mb-5">
      <label for="publish">Date de publication<small class="text-red-600">*</small></label><br>
      <input type="date" name="published" id="published" min="date('Y-m-d')" value="{{ old('published') ? old('published') : date('Y-m-d') }}">
      @error('published')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- Image -->
    <div class="w-5/6 mb-5">
      <label for="img">Image<small class="text-red-600">*</small></label><br>
      <input type="file" name="img" id="img" required>
      @error('img')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- publish -->
    <div class="w-5/6 mb-5">
      <input type="checkbox" id="publish" name="publish" value="true" checkded>
      <label for="publish">Publier ?<small class="text-red-600">*</small></label><br><br>
      <small class="text-red-600">*Champs obligatoire</small>

    </div>
    <button type="submit" class="bg-yellow-600 border-2 border-yellow-900 px-5 py-1 my-2 hover:bg-yellow-900">Modifier</button>
  </form>
</div>
@endsection