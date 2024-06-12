<?php displayFlashMessages('error'); ?>
<?php displayFlashMessages('success'); ?>

<div class="relative w-auto h-auto flex flex-row gap-[10%] my-20 mx-28 p-16 rounded-lg shadow-[0_0px_10px_0px_rgba(0,0,0,0.2)]">
  <form action="<?= urlpath('login'); ?>" method="POST"
  class="w-[40%] flex flex-col gap-3">
    <div class="text-base font-bold text-[#1A1A1A] text-center">
      Login
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
    <button class="bg-[#171473] text-white py-2 rounded-full mt-2
    hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
      Login
    </button>
    <div class="mt-8 text-sm font-medium text-[#1A1A1A] text-center">
      Belum punya akun? 
      <a href="<?= urlpath('register') ?>" class="underline hover:font-bold">
        Register
      </a>
    </div>
  </form>
  <img class="w-[50%] object-scale-down" src="assets/images/homepage-vector.png" alt="Main">
</div>

<script src="resources/js/dismiss-alert.js"></script>