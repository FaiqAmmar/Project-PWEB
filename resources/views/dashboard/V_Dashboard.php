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
      <div class="group">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0">
      </div>
    <?php elseif ($userRoleData['role'] === 'Mitra') : ?>
      <div class="text-[#101828]">
        Selamat Datang, <?php echo $currentMitra['nama_mitra'] ?>
      </div>
      <div class="group">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0">
      </div>
    <?php elseif ($userRoleData['role'] === 'Admin') : ?>
      <div class="text-[#101828]">
        Selamat Datang, <?php echo $currentAdmin['nama'] ?>
      </div>
      <div class="group">
        <img class="h-10 rounded-full bg-cover" src="assets/images/null-profile.png" alt="profile">
        <hr class="mt-2 rounded-xl h-0.5 bg-[#171473] opacity-0">
      </div>
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

<script src="resources/js/dashboard.js"></script>
<script src="resources/js/dismiss-alert.js"></script>

<?php include_once 'resources/views/master-layout/public.php'; ?>