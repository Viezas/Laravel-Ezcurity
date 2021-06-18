<div class="mb-10 flex items-center justify-center flex-wrap">

  <table class="w-full border-2 border-gray-400 md:w-5/6">
    <thead>
      <tr class="bg-gray-300">
        <th class="border-r border-gray-400">#</th>
        <th class="border-r border-gray-400">Abonnement</th>
      </tr>
    </thead>
    <tbody class="bg-gray-300">
      @foreach($subscriptions as $subscription)

      <tr class="odd:bg-white">
        <td class="border-r border-gray-400 md:text-center">{{ $subscription->id }}</td>
        <td class="border-r border-gray-400 md:pl-2">{{ $subscription->name }}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>