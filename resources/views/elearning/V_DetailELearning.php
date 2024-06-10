<?php $title = 'E Learning'; ?>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>

<div class="relative flex flex-col w-[80%] mx-auto my-4 py-4 gap-3">
  <a class="w-fit flex flex-row hover:underline hover:font-bold hover:scale-105 transition-all duration-200" href="<?= urlpath('elearning') ?>">
      <svg class="w-6 h-6" svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd" d="M10.53 2.97a.75.75 0 0 1 0 1.06L6.56 8l3.97 3.97a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0" clip-rule="evenodd"/>
      </svg>
      <p>List E-Learning</p>
    </a>
  <div class="flex flex-row justify-between">
    <span class="flex text-[#171473] font-bold text-3xl py-4 justify-center"><?php echo $data['judul']; ?></span>
    <div class="flex justify-center items-center">
      <a href="<?php echo $data['website']; ?>" class="flex w-auto text-white py-2 px-4 rounded-lg bg-[#171473] 
      hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
        Belajar Sekarang
      </a>
    </div>
  </div>
  <div class="flex flex-col p-4 border border-[#DDDDDD] rounded-lg gap-2">
    <span class="flex text-[#171473] font-bold text-xl">Deskripsi Materi</span>
    <p class="text-base text-justify flex flex-wrap">
      <?php echo $data['deskripsi']; ?>
    </p>
  </div>
  <div class="flex flex-col p-4 border border-[#DDDDDD] rounded-lg gap-2">
    <span class="flex text-[#171473] font-bold text-xl">Materi Yang Akan Dipelajari</span>
    <p class="text-base text-justify flex">
      <?php echo $data['materi']; ?>
    </p>
  </div>
</div>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>