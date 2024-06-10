<?php displayFlashMessages('error'); ?>

<div id="container" class="relative w-auto h-auto flex flex-row gap-[10%] my-20 mx-28 p-16 rounded-lg shadow-[0_0px_10px_0px_rgba(0,0,0,0.2)] transition-all duration-500">
  <div class="w-[40%] flex flex-col gap-3 transition-transform">
    <div id="title" class="text-base font-bold text-[#1A1A1A] text-center transition-opacity duration-500">
      Register
    </div>
    <div id="role" class="w-full my-auto items-center transition-opacity duration-500">
      <div class="text-base text-center">
        Sebagai :
      </div>
      <div class="flex flex-row gap-10 items-center">
        <button id="userButton" class="bg-[#171473] text-white py-2 w-full h-auto rounded-full mt-2
        hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
          User
        </button>
        <button id="mitraButton" class="bg-[#171473] text-white py-2 w-full h-auto rounded-full mt-2
        hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
          Mitra
        </button>
      </div>
    </div>
    <form id="roleUser" action="<?= urlpath('register-user'); ?>" method="POST"
    class="hidden text-base my-auto flex flex-col text-left transition-opacity duration-500 opacity-0">
      <div class="flex flex-row gap-5">
        <div class="text-base flex flex-col text-left w-[60%]">
          <div>
            Nama Lengkap:
          </div>
          <input name="nama" class="rounded-full border-2 border-[#171473] text-sm
          focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
          type="text">
        </div>
        <div class="text-base flex flex-col text-left w-[35%]">
          <div>
            Tanggal Lahir:
          </div>
          <input name="tanggal_lahir" class="rounded-full border-2 border-[#171473] text-sm
          focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
          type="date">
        </div>
      </div>
      <div class="flex flex-row gap-5">
        <div class="text-base flex flex-col text-left w-[60%]">
          <div>
            Email:
          </div>
          <input name="email" class="rounded-full border-2 border-[#171473] text-sm
          focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
          type="text">
        </div>
        <div class="text-base flex flex-col text-left w-[35%]">
          <div>
            Lulusan:
          </div>
          <select name="lulusan" class="rounded-full border-2 border-[#171473] text-sm
          focus:outline-none focus:ring-0 focus:border-[#171473] px-3 py-2">
            <option value="SMA">SMA</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4/S1">D4/S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        </div>
      </div>
      <div class="text-base flex flex-col text-left">
        <div>
          Password:
        </div>
        <input name="password" class="rounded-full border-2 border-[#171473] text-sm
        focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
        type="password">
      </div>
      <button type="submit" class="bg-[#171473] text-white py-2 rounded-full mt-2
      hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
      Register
      </button>
    </form>
    <form id="roleMitra" action="<?= urlpath('register-mitra'); ?>" method="POST"
    class="hidden text-base my-auto flex flex-col text-left transition-opacity duration-500 opacity-0">
      <div class="text-base flex flex-col text-left">
        <div>
          Nama Mitra:
        </div>
        <input class="rounded-full border-2 border-[#171473] text-sm
        focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
        name="nama_mitra" type="text">
      </div>
      <div class="text-base flex flex-col text-left">
        <div>
          Alamat:
        </div>
        <input class="rounded-full border-2 border-[#171473] text-sm
        focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
        name="alamat" type="text">
      </div>
      <div class="text-base flex flex-col text-left">
        <div>
          Email:
        </div>
        <input class="rounded-full border-2 border-[#171473] text-sm
        focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
        name="email" type="text">
      </div>
      <div class="text-base flex flex-col text-left">
        <div>
          Password:
        </div>
        <input class="rounded-full border-2 border-[#171473] text-sm
        focus:outline-none focus:ring-0 focus:border-[#171473] px-3" 
        name="password" type="password">
      </div>
      <button type="submit" class="bg-[#171473] text-white py-2 rounded-full mt-2
      hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
      Register
      </button>
    </form>
    <div class="mt-8 text-sm font-medium text-[#1A1A1A] text-center">
      Sudah punya akun? 
      <a href="<?= urlpath('login') ?>" class="underline hover:font-bold">
        Login
      </a>
    </div>
  </div>
  <img class="w-[50%] object-scale-down" src="assets/images/homepage-vector.png" alt="Main">
</div>

<script src="resources/js/register-role.js"></script>
<script src="resources/js/dismiss-alert.js"></script>