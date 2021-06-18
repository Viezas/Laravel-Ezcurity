<nav class="px-4 mb-5 lg:border-0 lg:flex lg:py-2">
  <div class="flex justify-between items-center lg:w-full">
    <!-- Responsive menu -->
    <button class="lg:hidden" id="toggle-menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 md:h-16" fill="none" viewBox="0 0 24 24" stroke="black">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>  

    <!-- Logo + non responsive navbar -->
    <div class="lg:flex lg:justify-between lg:items-center lg:w-full">
      <!-- Logo to home -->
      <a href="{{ route('home') }}">
        <img src="/img/logo.png" alt="Link to homepage" class="h-10 md:h-14">
      </a>

      <!-- Contain all links for non responsive -->
      <div class="hidden text-2xl" id="desktopMenu">
        <ul class="flex justify-end items-center">
          <li class="border-b-2 border-transparent hover:border-blue-700"><a href="{{ route('profile') }}">Mes informations</a></li>
          @if(Auth::user()->stripe_id)
          <li class="ml-5 border-b-2 border-transparent hover:border-blue-700"><a href="{{ Auth::user()->billingPortalUrl(route('profile.subscriptions')) }}">Mes abonnements</a></li>
          <li class="ml-5 border-b-2 border-transparent hover:border-blue-700"><a href="{{ route('profile.billing') }}">Mes facturations</a></li>
          @endif
          
          @if(Auth::user()->isAdmin == true)
          <li class="ml-5 border-b-2 border-transparent text-red-600 hover:border-red-700"><a href="{{ route('admin.users') }}">Administration</a></li>
          @endif

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="ml-5 px-10 py-1 text-base text-white border-2 border-red-900 bg-red-600 hover:bg-red-800">Déconnexion</button>
          </form>
        </ul>
      </div>
    </div>

    <!-- Logout button -->
    <form method="POST" action="{{ route('logout') }}" class="lg:hidden">
      @csrf
      <button type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 md:h-16" fill="none" viewBox="0 0 24 24" stroke="red">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
      </button>
    </form>
  </div>

  <!-- Responsive navbar-->
  <div class="hidden mt-2 text-lg" id="mobileMenu">
    <!-- Contain all links for responsive -->
    <ul>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('profile') }}">Mes informations</a></li>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('profile.subscriptions') }}">Mes abonnements</a></li>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('profile.billing') }}">Mes facturations</a></li>
      <li class="mb-3 border-b-2 text-red-600 border-red-600"><a href="{{ route('admin.users') }}">Administration</a></li>
    </ul>
  </div>
</nav>

<script>
let toggleMenu = document.getElementById('toggle-menu')
let mobileMenu = document.getElementById('mobileMenu')
let desktopMenu = document.getElementById('desktopMenu')
let showMenu = false

function showDesktopMenu(){
  mobileMenu.style.display = 'none'
  desktopMenu.style.display = 'block'
}

toggleMenu.addEventListener('click', envent =>{
  if (!showMenu) {
    mobileMenu.style.display = 'block'
    return showMenu = true
  }
  else{
    mobileMenu.style.display = 'none'
    return showMenu = false
  }
})

window.addEventListener('resize', event=>{
  let width = document.body.clientWidth
  if (width >= 1024) {
    showDesktopMenu()
  }
  else{
    desktopMenu.style.display = 'none'
  }
})

if (document.body.clientWidth >= 1024) {
  showDesktopMenu()
}
</script>