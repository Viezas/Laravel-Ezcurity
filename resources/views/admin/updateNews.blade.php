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

<div class="px-5 py-2 md:px-28 lg:px-56 xl:px-96">

  <form action="{{ route('admin.update.news', ['id' => $article->id]) }}" method="POST" class="border-2 border-black flex justify-center items-center flex-wrap py-6 mb-10 md:px-20">
  @csrf
    <!-- Title -->
    <div class="w-5/6 mb-5">
      <label for="title">Titre</label><br>
      <input type="text" name="title" id="title" class="border border-gray-600 w-full px-1" value="{{ old('title') ? old('title') : $article->title }}" required>
      @error('title')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- Body -->
    <div class="w-5/6 mb-5">
      <label for="body">Body</label><br>
      <textarea name="body" class="resize-none w-full h-96" id="body">{{ old('body') ? old('body') :  $article->body }}</textarea>
      @error('body')
        <div class=" text-red-600">{{ $message }}</div>
      @enderror
    </div>

    <!-- dates -->
    <div class="w-5/6 mb-5">
      <label for="publish">Date de publication</label><br>
      <input type="date" name="published" id="published" min="Carbon::now()" value="{{ date('Y-m-d', strtotime($article->published_at)) }}">
    </div>

    <!-- Image -->
    <div class="w-5/6 mb-5">
      <label for="img">Image</label><br>
      <input type="file" name="img" id="img" accept="image/png, image/jpeg">
    </div>

    <!-- publish -->
    <div class="w-5/6 mb-5">
      <input type="checkbox" id="publish" name="publish" value="true" {{ $article->published == true ? 'checked' : ''}}>
      <label for="publish">Publier ?</label>
    </div>

    <button type="submit" class="bg-yellow-600 border-2 border-yellow-900 px-5 py-1 my-2 hover:bg-yellow-900">Modifier</button>
  </form>
</div>
@endsection