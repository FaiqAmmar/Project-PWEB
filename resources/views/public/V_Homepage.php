<?php $title = 'Homepage'; ?>

<?php include_once 'resources/views/master-layout/public.php'; ?>

<div class="w-full flex flex-row py-4 pl-8 pr-16 justify-between">
  <form class="ml-16 flex flex-row items-center gap-10">   
    <img class="h-10 rounded-full" src="assets/images/logo1.png" alt="Logo">
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
  <img class="w-[600px]" src="assets/images/homepage-vector.png" alt="Main">
</div>

<?php include_once 'resources/views/master-layout/public.php'; ?>