<div class="flex items-center justify-center w-full lg:px-20">  <!-- Slideshow container -->

  <button id="left-chevron" class="hover:bg-blue-600 focus:outline-none lg:hidden">  <!-- Left chevron -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10" fill="none" viewBox="0 0 24 24" stroke="black">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>

  <div class="border-2 border-black"> <!-- A slide -->
    <div class="active" id="slide-1">   <!-- Content -->
      <img src="img/news-bg.jpg" alt="news background" class="pb-1 border-b-2 border-black">  <!-- Image -->
      <div class="py-2 px-2">  <!-- Article -->
        <p class="text-lg">Protegez votre maison et votre famille avec notre alarme maison !</p><br>  <!-- Title -->
        <p>   <!-- Body -->                                     
          Installation rapide, techniciens qualifié et gadget dernier cri. 
          Ne laissez plus les malfrats pénétrer l'enceinte de votre demeure. 
          Pensez sécurité, contactez Ezcurity !
        </p><br>
        <small>Post crée le : dd/mm/yyyy</small><br><br>  <!-- Date -->
        <a href="/" class="bg-blue-600 text-lg text-white px-4 py-1">En savoir plus</a>   <!-- Link to full article -->
      </div>
    </div>

    <div class="hidden" id="slide-2">   <!-- Content -->
      <img src="img/news-bg.jpg" alt="news background" class="pb-1 border-b-2 border-black">  <!-- Image -->
      <div class="py-2 px-2">  <!-- Article -->
        <p class="text-lg">News 2 !</p><br>  <!-- Title -->
        <p>   <!-- Body -->                                     
          Installation rapide, techniciens qualifié et gadget dernier cri. 
          Ne laissez plus les malfrats pénétrer l'enceinte de votre demeure. 
          Pensez sécurité, contactez Ezcurity !
        </p><br>
        <small>Post crée le : dd/mm/yyyy</small><br><br>  <!-- Date -->
        <a href="/" class="bg-blue-600 text-lg text-white px-4 py-1">En savoir plus</a>   <!-- Link to full article -->
      </div>
    </div>

    <div class="hidden" id="slide-3">   <!-- Content -->
      <img src="img/news-bg.jpg" alt="news background" class="pb-1 border-b-2 border-black">  <!-- Image -->
      <div class="py-2 px-2">  <!-- Article -->
        <p class="text-lg">News 3 !</p><br>  <!-- Title -->
        <p>   <!-- Body -->                                     
          Installation rapide, techniciens qualifié et gadget dernier cri. 
          Ne laissez plus les malfrats pénétrer l'enceinte de votre demeure. 
          Pensez sécurité, contactez Ezcurity !
        </p><br>
        <small>Post crée le : dd/mm/yyyy</small><br><br>  <!-- Date -->
        <a href="/" class="bg-blue-600 text-lg text-white px-4 py-1">En savoir plus</a>   <!-- Link to full article -->
      </div>
    </div>

    <div class="hidden" id="slide-4">   <!-- Content -->
      <img src="img/news-bg.jpg" alt="news background" class="pb-1 border-b-2 border-black">  <!-- Image -->
      <div class="py-2 px-2">  <!-- Article -->
        <p class="text-lg">News 4 !</p><br>  <!-- Title -->
        <p>   <!-- Body -->                                     
          Installation rapide, techniciens qualifié et gadget dernier cri. 
          Ne laissez plus les malfrats pénétrer l'enceinte de votre demeure. 
          Pensez sécurité, contactez Ezcurity !
        </p><br>
        <small>Post crée le : dd/mm/yyyy</small><br><br>  <!-- Date -->
        <a href="/" class="bg-blue-600 text-lg text-white px-4 py-1">En savoir plus</a>   <!-- Link to full article -->
      </div>
    </div>

    <div class="hidden" id="slide-5">   <!-- Content -->
      <img src="img/news-bg.jpg" alt="news background" class="pb-1 border-b-2 border-black">  <!-- Image -->
      <div class="py-2 px-2">  <!-- Article -->
        <p class="text-lg">News 5 !</p><br>  <!-- Title -->
        <p>   <!-- Body -->                                     
          Installation rapide, techniciens qualifié et gadget dernier cri. 
          Ne laissez plus les malfrats pénétrer l'enceinte de votre demeure. 
          Pensez sécurité, contactez Ezcurity !
        </p><br>
        <small>Post crée le : dd/mm/yyyy</small><br><br>  <!-- Date -->
        <a href="/" class="bg-blue-600 text-lg text-white px-4 py-1">En savoir plus</a>   <!-- Link to full article -->
      </div>
    </div>

    <div class="items-center justify-center mb-2 hidden" id="btns">    <!-- Btn to select a slide (desktop) -->
      <button class="h-4 w-4 mr-2 rounded-full border-2 border-blue-900 bg-blue-600 focus:outline-none" id="btn1"></button>
      <button class="h-4 w-4 mr-2 rounded-full border-2 border-black focus:outline-none" id="btn2"></button>
      <button class="h-4 w-4 mr-2 rounded-full border-2 border-black focus:outline-none" id="btn3"></button>
      <button class="h-4 w-4 mr-2 rounded-full border-2 border-black focus:outline-none" id="btn4"></button>
      <button class="h-4 w-4 mr-2 rounded-full border-2 border-black focus:outline-none" id="btn5"></button>
    </div>
  </div>

  <button id="right-chevron" class="hover:bg-blue-600 focus:outline-none lg:hidden">   <!-- Left chevron -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10" fill="none" viewBox="0 0 24 24" stroke="black">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
</div>

<script>
let slide1 = document.getElementById('slide-1')
let slide2 = document.getElementById('slide-2')
let slide3 = document.getElementById('slide-3')
let slide4 = document.getElementById('slide-4')
let slide5 = document.getElementById('slide-5')
let leftChevron = document.getElementById('left-chevron')
let rightChevron = document.getElementById('right-chevron')
let btns = document.getElementById('btns')
let btn1 = document.getElementById('btn1')
let btn2 = document.getElementById('btn2')
let btn3 = document.getElementById('btn3')
let btn4 = document.getElementById('btn4')
let btn5 = document.getElementById('btn5')

function mobileSlide(toRemove, toShow){
  hideSlide(toRemove)
  toShow.style.display = 'block'
  toShow.classList.add('active')
}

function desktopHideBtn(btn){
  btn.classList.remove('bg-blue-600')
  btn.classList.remove('border-blue-900')
  btn.classList.add('border-black')
}

function hideSlide(slide){
  slide.style.display = 'none'
  slide.classList.remove('active')
}

function colorBtn(toColor, toDecolor, toDecolor2, toDecolor3, toDecolor4){
  toColor.classList.add('border-blue-900')
  toColor.classList.add('bg-blue-600')
  desktopHideBtn(toDecolor)
  desktopHideBtn(toDecolor2)
  desktopHideBtn(toDecolor3)
  desktopHideBtn(toDecolor4)
}

function desktopSlide(toShow, toHide, toHide2, toHide3, toHide4){
  toShow.style.display = 'block'
  toShow.classList.add('active')
  hideSlide(toHide)
  hideSlide(toHide2)
  hideSlide(toHide3)
  hideSlide(toHide4)
}

window.addEventListener('resize', event=>{
  let width = document.body.clientWidth
  if (width >= 1024) {
    btns.style.display = 'flex'
  }
  else{
    btns.style.display = 'none'
  }
})

if (document.body.clientWidth >= 1024) {
  btns.style.display = 'flex'
}

leftChevron.addEventListener('click', event => {
  if (slide1.classList.contains('active')) {
    mobileSlide(slide1, slide5)
    colorBtn(btn5, btn1, btn2, btn3, btn4)
  }
  else if (slide2.classList.contains('active')) {
    mobileSlide(slide2, slide1)
    colorBtn(btn1, btn2, btn3, btn4, btn5)
  }
  else if (slide3.classList.contains('active')) {
    mobileSlide(slide3, slide2)
    colorBtn(btn2, btn1, btn3, btn4, btn5)
  }
  else if (slide4.classList.contains('active')) {
    mobileSlide(slide4, slide3)
    colorBtn(btn3, btn1, btn2, btn4, btn5)
  }
  else{
    mobileSlide(slide5, slide4)
    colorBtn(btn4, btn1, btn2, btn3, btn5)
  }
})

rightChevron.addEventListener('click', event => {
  if (slide1.classList.contains('active')) {
    mobileSlide(slide1, slide2)
    colorBtn(btn2, btn1, btn3, btn4, btn5)
  }
  else if (slide2.classList.contains('active')) {
    mobileSlide(slide2, slide3)
    colorBtn(btn3, btn1, btn2, btn4, btn5)
  }
  else if (slide3.classList.contains('active')) {
    mobileSlide(slide3, slide4)
    colorBtn(btn4, btn1, btn2, btn3, btn5)
  }
  else if (slide4.classList.contains('active')) {
    mobileSlide(slide4, slide5)
    colorBtn(btn5, btn1, btn2, btn3, btn4)
  }
  else{
    mobileSlide(slide5, slide1)
    colorBtn(btn1, btn2, btn3, btn4, btn5)
  }
})

btn1.addEventListener('click', event => {
  desktopSlide(slide1, slide2, slide3, slide4, slide5)
  colorBtn(btn1, btn2, btn3, btn4, btn5)
})

btn2.addEventListener('click', event => {
  desktopSlide(slide2, slide1, slide3, slide4, slide5)
  colorBtn(btn2, btn1, btn3, btn4, btn5)
})

btn3.addEventListener('click', event => {
  desktopSlide(slide3, slide1, slide2, slide4, slide5)
  colorBtn(btn3, btn1, btn2, btn4, btn5)
})

btn4.addEventListener('click', event => {
  desktopSlide(slide4, slide1, slide2, slide3, slide5)
  colorBtn(btn4, btn1, btn2, btn3, btn5)
})

btn5.addEventListener('click', event => {
  desktopSlide(slide5, slide1, slide2, slide3, slide4)
  colorBtn(btn5, btn1, btn2, btn3, btn4)
})
</script>