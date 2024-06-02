<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="resources/css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        fontFamily:{
          Inter: ["Inter", "sans-serif"]
        }
      }
    }
  </script>
</head>
<body class="font-Inter bg-[#FFFFFF]">
  
<div class="w-full flex flex-row py-4 px-16 justify-between">
    <form class="ml-16">   
      <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-[#98A2B3] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="search" id="default-search" class="w-full p-3 ps-10 font-normal text-sm text-[#667085] 
        border border-[#1F1D59] rounded-lg focus:border-[#171473] focus:ring-2 focus:outline-none focus:ring-[#171473]" placeholder="Cari program..." required />
      </div>
    </form>
    <div class="flex flex-row gap-8 font-medium	text-base text-[#101828] items-center">
      <a class="hover:underline" href="#">
        Program
      </a>
      <a class="hover:underline" href="#">
        Lowongan
      </a>
    </div>
    <div  class="flex flex-row gap-4 font-medium	text-base items-center">
      <a class="text-[#101828] hover:underline" href="#">
        Masuk
      </a>
      <a class="text-white p-2 px-4 rounded-lg bg-[#171473] hover:underline" href="#">
        Buat Akun
      </a>
    </div>
  </div>

  <div class="w-full flex flex-row mt-16 py-4 px-16">
    <div class="flex flex-col gap-4">
      <p class="font-semibold text-[#1F1D59]">
        Bootcamp & Karir Bidang IT
      </p>
      <p class="text-6xl leading-[80px] font-bold text-[#1F1D59]">
        Wujudkan Impian Bersama Kami
      </p>
      <p class="text-[#646464] py-2 mb-4">
        Kami menyediakan berbagai macam bootcamp yang bisa anda ikuti dan lowongan pekerjaan terbaru
      </p>
      <div>
        <a class="text-white p-4 rounded-lg bg-[#171473] hover:underline" href="#">
          Lihat Program
        </a>
      </div>
    </div>
    <img class="w-[600px]" src="assets/images/homepage-vector.png" alt="">
  </div>

  <div class="flex flex-col py-5 px-16 font-semibold">
    <p class="text-[#1F1D59] flex justify-center">
      Kategori Bootcamp
    </p>
    <p class="text-[#101828] flex text-4xl justify-center ">
      Berbagai pilihan bidang Favorit
    </p>
  </div>

  <div id="default-carousel" class="relative w-full py-2 px-16" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden rounded-xl">
        <!-- Item 1 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div id="SlideIndicator1" class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="active slider-button-1 w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="slider-button-1 w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="slider-button-1 w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>  
  </div>

  <div class="flex flex-col gap-4 py-5 px-16 font-semibold">
    <p class="flex text-[#1F1D59]">
      Mitra Karir
    </p>
    <p class="text-[#101828] flex text-4xl">
      Lowongan Pekerjaan Bidang IT Terbaru
    </p>
    <div class="flex flex-row justify-between">
      <p class="text-[#667085]">Bekerjasama dengan berbagai mitra yang tersebar di seluruh Indonesia</p>
      <a class="font-semibold rounded-lg bg-[#F9FAFB] text-[#101828] hover:underline p-2 border border-[#D0D5DD]" href="#">
        Lihat Semua
      </a>
    </div>
  </div>

  <div id="default-carousel" class="relative w-full py-2 px-16" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden rounded-xl">
        <!-- Item 1 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="p-12 flex flex-row gap-8 hidden duration-1000 ease-in-out" data-carousel-item>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">UI/UX Desainer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Kelas desain tampilan dan prototyping menggunakan Figma</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Web Developer</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Membuat website yang menarik bagian Front-End dan Back-End</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
          <div class="flex flex-col gap-3 group hover:bg-[#1F1D59] w-1/3 shadow-lg rounded-lg transition-all p-8 text-[#1F1D59]">
            <p class="text-2xl font-extrabold	group-hover:text-[#FFFFFF]">Data Analist</p>
            <p class="group-hover:text-[#FFFFFF] text-sm">Mempelajari dan menganalisa Big data serta pemanfaatannya</p>
            <a class="w-fit flex flex-row items-center font-bold hover:underline group-hover:text-[#FFFFFF]" href="#">Lihat Selengkapnya
              <svg class="w-4 h-4 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/>
                <path d="M8 12h8m-4 4l4-4l-4-4"/></g>
              </svg>
            </a>
          </div>
        </div>
    </div>
    <!-- Slider indicators -->
    <div id="SlideIndicator2" class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="active slider-button-2 w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="slider-button-2 w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="slider-button-2 w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>  
  </div>

  <script src="resources/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>