<div class="border-2 border-gray-600 w-full pb-10 mb-10 md:w-2/5 md:mr-10">
    <!-- Section Title -->
    <div class="my-10">
      <p class="text-center text-3xl font-bold text-blue-600"><span class="border-b-2 border-gray-400">Nous contacter</span></p>
    </div>

    <!-- Contact form -->
    <div class="px-2">
      <form method="POSt">
        @csrf
        <div class="mb-4">
          <label for="email">Votre adresse email<span class="text-red-600">*</span> : </label>
          <input type="email" name="email" id="email" class="border border-gray-600 w-full px-1" value="{{ old('email') }}" autofocus required>
          @error('email')
            <div class=" text-red-600">{{ $message }}</div>
          @enderror
        </div>

        <div class="md:flex md:justify-between md:items-center">
          <div class="mb-4 md:w-2/5">
            <label for="last_name">Nom<span class="text-red-600">*</span> : </label>
            <input type="text" name="last_name" id="last_name" class="border border-gray-600 w-full px-1" value="{{ old('last_name') }}" required>
            @error('last_name')
              <div class=" text-red-600">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4 md:w-2/5">
            <label for="first_name">Prénom<span class="text-red-600">*</span> : </label>
            <input type="text" name="first_name" id="first_name" class="border border-gray-600 w-full px-1" value="{{ old('first_name') }}" required>
            @error('first_name')
              <div class=" text-red-600">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-4">
          <label for="object">Objet<span class="text-red-600">*</span> : </label>
          <input type="text" name="object" id="object" class="border border-gray-600 w-full px-1" value="{{ old('object') }}" required>
          @error('object')
            <div class=" text-red-600">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="object">Votre message<span class="text-red-600">*</span> : </label>
          <textarea name="body" id="body" class="border border-gray-600 w-full px-1 resize-none h-52" placeholder="min 15 caractères" required>{{ old('body') }}</textarea>
          @error('body')
            <div class=" text-red-600">{{ $message }}</div>
          @enderror
          <small class="text-red-600">*champs obligatoire</small>
        </div>

        <div class="flex items-center justify-center">
          <button type="submit" class="border-2 border-blue-900 bg-blue-600 text-white text-center px-20 py-2 hover:bg-blue-800">Envoyer !</button>
        </div>

      </form>
    </div>
  </div>