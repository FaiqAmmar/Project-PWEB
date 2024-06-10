<?php $title = 'E-Learning'; ?>

<?php displayFlashMessages('success'); ?>
<?php displayFlashMessages('error'); ?>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>

<div class="relative w-full flex flex-col px-16 py-8">
  <a class="w-fit flex flex-row py-2 hover:underline hover:font-bold hover:scale-105 transition-all duration-200" href="<?= urlpath('dashboard') ?>">
    <svg class="w-6 h-6" svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 16 16">
      <path fill="currentColor" fill-rule="evenodd" d="M10.53 2.97a.75.75 0 0 1 0 1.06L6.56 8l3.97 3.97a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0" clip-rule="evenodd"/>
    </svg>
    <p>Dashboard</p>
  </a>
  <span class="text-3xl font-bold text-[#0f0f5a]">
    Daftar E-Learning
  </span>
  <div class="flex flex-row py-6 items-center gap-4">
    <?php if ($userRoleData['role'] === 'Admin') : ?>
    <a href="<?= urlpath('add-elearning') ?>" class="flex w-auto text-white py-2 px-4 rounded-lg bg-[#171473] 
    hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
      Tambah E-Learning
    </a>
    <?php endif; ?>

    <div class="flex flex-row items-center gap-10">   
      <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-[#98A2B3] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="searchInput" class="w-full p-3 ps-10 font-normal text-sm text-[#667085] 
        border border-[#1F1D59] rounded-lg focus:border-[#171473] focus:ring-2 focus:outline-none focus:ring-[#171473]" placeholder="Cari e-learning..."/>
      </div>
    </div>
  </div>
  <table class="table">
    <thead class="text-left font-bolf text-white bg-[#1F1D59]">
      <tr>
        <?php if ($userRoleData['role'] === 'Admin') : ?>
        <th class="border border-[#DDDDDD] px-3 py-2 w-[90%]">Nama E-Learning</th>
        <th class="border border-[#DDDDDD] px-3 py-2 w-[10%]">Aksi</th>
        <?php elseif ($userRoleData['role'] === 'Seeker') : ?>
        <th class="border border-[#DDDDDD] px-3 py-2 w-[83%]">Nama E-Learning</th>
        <th class="border border-[#DDDDDD] px-3 py-2 w-[17%]">Aksi</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
    <?php if ($ELearning !== null && $userRoleData['role'] === 'Admin') : ?>
        <?php foreach($ELearning as $elearning): ?>
        <tr>
          <td class="border border-[#DDDDDD] px-3 py-2"><?=$elearning['judul']?></td>
          <td class="border border-[#DDDDDD] px-3 py-2 flex flex-row gap-4 justify-center">
            <a href="<?= urlpath('edit-elearning?id='.$elearning['id']) ?>" class="flex w-auto text-white py-2 px-4 rounded-lg bg-[#171473]
            hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
              Edit
            </a>
            <a href="<?= urlpath('delete-elearning?id='.$elearning['id']) ?>" class="flex w-auto text-[#101828] py-2 px-4 rounded-lg bg-[#F9FAFB] border border-[#171473]
            hover:bg-[#E5E7EB] hover:scale-105 transition-all duration-200">
              Hapus
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php elseif ($userRoleData['role'] === 'Seeker' && $ELearning !== null) : ?>
        <?php foreach($ELearning as $elearning): ?>
        <tr>
          <td class="border border-[#DDDDDD] px-3 py-2"><?=$elearning['judul']?></td>
          <td class="border border-[#DDDDDD] px-3 py-2 flex flex-row gap-4 justify-center">
            <a href="<?= urlpath('detail-elearning?id='.$elearning['id']) ?>" class="flex w-auto text-white py-2 px-4 rounded-lg bg-[#171473]
            hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
              Lihat E-Learning
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <?php else : ?>
    <div class="text-center text-[#98A2B3] font-bold text-lg">Tidak ada E-Learning</div>
    <?php endif; ?>
  </table>
</div>

<script src="resources/js/dismiss-alert.js"></script>
<script src="resources/js/search-form.js"></script>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>