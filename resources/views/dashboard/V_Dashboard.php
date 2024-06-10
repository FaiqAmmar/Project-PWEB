<?php $title = 'Dashboard'; ?>

<?php include_once 'resources/views/master-layout/public.php'; ?>
  
<?php displayFlashMessages('success'); ?>

<div class="relative w-full flex flex-row py-4 px-16 justify-between">
  <div class="ml-4 flex items-center">   
    <img class="h-10 rounded-full" src="assets/images/logo1.png" alt="Logo">
  </div>
  <div class="flex flex-row gap-8 font-medium	text-base text-[#101828] items-center">
    <a class="hover:underline hover:scale-105 transition-all duration-200" href="<?= urlpath('logout') ?>">
      Logout
    </a>
    <?php if ($userRoleData['role'] !== 'Mitra') : ?>
    <a class="hover:underline hover:scale-105 transition-all duration-200" href="<?= urlpath('elearning') ?>">
      Program
    </a>
    <?php endif; ?>
    <a class="hover:underline hover:scale-105 transition-all duration-200" href="<?= urlpath('loker') ?>">
      Lowongan
    </a>
  </div>
  <div class="flex flex-row gap-4 font-medium	text-base items-center">
    <?php if ($userRoleData['role'] === 'Seeker') : ?>
      <div class="text-[#101828]">
        Selamat Datang, <?php echo $currentSeeker['nama'] ?>
      </div>
      <?php if ($currentSeeker['foto_profil'] == null) : ?>
      <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php else : ?>
        <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php endif; ?>
    <?php elseif ($userRoleData['role'] === 'Mitra') : ?>
      <div class="text-[#101828]">
        Selamat Datang, <?php echo $currentMitra['nama_mitra'] ?>
      </div>
      <?php if ($currentMitra['foto_profil'] == null) : ?>
      <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php else : ?>
        <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php endif; ?>
    <?php elseif ($userRoleData['role'] === 'Admin') : ?>
      <div class="text-[#101828]">
        Selamat Datang, <?php echo $currentAdmin['nama'] ?>
      </div>
      <?php if ($currentAdmin['foto_profil'] == null) : ?>
      <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php else : ?>
        <a class="group" href="#">
        <img class="h-10 rounded-full bg-cover" src="" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0 group-hover:opacity-100 transition-all duration-200">
      </a>
      <?php endif; ?>
    <?php endif; ?>
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
  </div>
  <img class="w-[600px]" src="assets/images/homepage-vector.png" alt="">
</div>

<div class="flex flex-row py-5 px-16 justify-between">
  <div class="flex flex-col gap-4 font-semibold">
    <p class="flex text-[#1F1D59]">
      Kategori Bootcamp
    </p>
    <p class="text-[#101828] flex text-4xl">
      Berbagai pilihan bidang Favorit
    </p>
  </div>
  <div class="flex items-center">
    <a href="<?= urlpath('elearning') ?>" class="flex font-semibold rounded-lg bg-[#F9FAFB] text-[#101828] p-2 border border-[#D0D5DD]
    hover:bg-[#E5E7EB] hover:scale-105 hover:underline transition-all duration-200" >
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
  <div id="SlideIndicator" class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="active slider-button w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="slider-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="slider-button w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
  </div>  
</div>

<div class="flex flex-row gap-4 py-5 px-16 justify-between">
  <div class="flex flex-col font-semibold"">
    <p class="flex text-[#1F1D59]">
      Mitra Karir
    </p>
    <p class="text-[#101828] flex text-4xl">
      Lowongan Pekerjaan Bidang IT Terbaru
    </p>
    <p class="text-[#667085]">Bekerjasama dengan berbagai mitra yang tersebar di seluruh Indonesia</p>
  </div>
  <div class="flex items-center">
    <a href="<?= urlpath('loker') ?>" class="flex font-semibold rounded-lg bg-[#F9FAFB] text-[#101828] p-2 border border-[#D0D5DD]
    hover:bg-[#E5E7EB] hover:scale-105 hover:underline transition-all duration-200" >
      Lihat Semua
    </a>
  </div>
</div>

<script src="resources/js/dashboard.js"></script>
<script src="resources/js/dismiss-alert.js"></script>

<?php include_once 'resources/views/master-layout/public.php'; ?>