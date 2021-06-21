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
          <li class="border-b-2 border-transparent hover:border-blue-700"><a href="{{ route('services') }}">Services</a></li>
          <li class="ml-5 border-b-2 border-transparent hover:border-blue-700"><a href="{{ route('news') }}">Actualités</a></li>
          <li class="ml-5 border-b-2 border-transparent hover:border-blue-700"><a href="{{ route('contact') }}">Contact</a></li>
          <li class="ml-5">
            <form class="flex items-center justify-end" action="{{ route('search') }}" method="POST">
              @csrf
              <input type="text" name="search" id="search" class="w-36 px-1 h-9 border-2 border-black focus:outline-none focus:border-blue-600 lg:w-full">
              <button type="submit" class="border-2 border-blue-900 bg-blue-600 text-white ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24" stroke="white">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </button>
            </form>
          </li>

          @if(!Auth::user())
          <a href="{{ route('login') }}">
            <li class="ml-5 px-10 py-1 text-base text-white border-2 border-blue-900 bg-blue-600 hover:bg-blue-800">Inscription/<br>Connexion</li>
          </a>
          @endif

          @if(Auth::user())
          <a href="{{ route('profile') }}" class="ml-5">
            <img src="/img/account.png" alt="Link to account" class="h-14">
          </a>
          @endif
        </ul>
      </div>
    </div>

    <!-- Account button -->
    <a href="{{ route('login') }}" class="lg:hidden">
      <img src="/img/account.png" alt="Link to account" class="h-10 md:h-14">
    </a>
  </div>

  <!-- Responsive navbar-->
  <div class="hidden mt-2 text-lg" id="mobileMenu">
    <!-- Contain all links for responsive -->
    <ul>
      <li class="mb-3">
        <form class="flex" action="{{ route('search') }}" method="POST">
          <input type="text" name="search" id="search" class="border-2 border-black w-3/5 px-1 focus:outline-none focus:border-blue-600 md:w-3/4" placeholder="Votre recherche...">
          <button type="submit" class="border-2 border-blue-900 w-2/5 bg-blue-600 text-white md:w-1/4">Rechercher !</button>
        </form>
      </li>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('services') }}">Services</a></li>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('news') }}">Actualités</a></li>
      <li class="mb-3 border-b-2 border-blue-600"><a href="{{ route('contact') }}">Contact</a></li>
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