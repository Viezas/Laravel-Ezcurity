@extends('layouts.default')
@section('content')

<div class="flex items-center justify-center flex-wrap mb-10">

  @if (session('denied'))
  <div class="bg-red-300 text-3xl text-center w-full py-5 mb-10 text-red-600 w-full">
      <ul>
        <li>{{ session('denied') }}</li>
      </ul>
  </div>
  @endif

  <div class="px-10 border-2 border-gray-600 md:w-3/6">
    <!-- Section Title -->
    <div class="my-10 text-center">
      <p class="text-3xl mb-5"><span class="border-b-2 border-gray-400">Souscription</span></p>
      <p>{{ $service[0]->name}}</p>
      <p>Montant: {{ $service[0]->price}}/mois*</p>
      <small>*prix TTC</small>
    </div>

    <form method="POST" id="payment-form">
      @csrf

      <div class="mb-4">
        <label for="name">Nom<span class="text-red-600">*</span> : </label>
        <input type="text" name="name" id="name" class="border border-gray-600 w-full px-1" value="{{ old('name') }}" required autofocus>
        @error('name')
          <div class=" text-red-600">{{ $message }}</div>
        @enderror
      </div>

      <p>Informations de la carte<span class="text-red-600">*</span> :</p>
      <div id="card-element">
      </div>

      <div id="card-errors" role="alert" class="text-red-600"></div>

      <div class="my-4">
        <label for="discount">Code promo : </label>
        <input type="text" name="discount" id="discount" class="border border-gray-600 w-full px-1" value="{{ old('discount') }}">
        <small class="text-red-600">*champs obligatoire</small>
      </div>

      <div class="mb-4 flex items-center justify-center">
        <button type="submit" class="border-2 border-blue-900 bg-blue-600 text-white px-10 py-1 hover:bg-blue-800"  id="card-button" data-secret="{{ $intent->client_secret }}">S'abonner</button>
      </div>

    </form>
  </div>

  </div>

</div>

<script>
  const stripe = Stripe('pk_test_51IzzWtHiPm1KQtiInfKCieXPa4i8woqvEV68k6kZBkAZqwHzeFYYsMgya1rT2FE9VH7hpUchJQV11cHz5olp2xh800DxLrz2mf');
  const elements = stripe.elements();

  const card = elements.create("card");
  card.mount("#card-element");
  const card_elemen = document.getElementById("card-element");
  card_elemen.classList.add("border", "border-gray-600", "w-full", "px-1", "py-3");

  const cardHolderName = document.getElementById('name');
  const cardButton = document.getElementById('card-button');
  const clientSecret = cardButton.dataset.secret;

  let displayError = document.getElementById('card-errors');

  card.on('change', ({error}) => {
    if (error) {
      displayError.textContent = error.message;
    } else {
      displayError.textContent = '';
    }
  });

  const form = document.getElementById('payment-form');
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const { setupIntent, error } = await stripe.confirmCardSetup(
      clientSecret, {
        payment_method: {
          card: card,
          billing_details: { name: cardHolderName.value }
        }
      }
    );

    if (error) {
      displayError.textContent = error.message;
    } else {
      displayError.textContent = '';
      
      let input = document.createElement('input')
      input.setAttribute('type', 'hidden')
      input.setAttribute('name', 'token')
      input.value = setupIntent.payment_method

      form.appendChild(input)
      form.submit()
    }
  });
</script>

@endsection