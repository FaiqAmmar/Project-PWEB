<?php $title = 'Lowongan Kerja'; ?>

<?php include_once 'resources/views/master-layout/loker.php'; ?>

<div class="relative flex flex-row w-auto my-4 mx-3 gap-[3%]">
  <div class="flex flex-col w-[70%] p-4 shadow-[0_0px_10px_0px_rgba(0,0,0,0.2)] rounded-xl gap-4">
    <a class="w-fit flex flex-row hover:underline hover:font-bold hover:scale-105 transition-all duration-200" href="<?= urlpath('loker') ?>">
      <svg class="w-6 h-6" svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 16 16">
        <path fill="currentColor" fill-rule="evenodd" d="M10.53 2.97a.75.75 0 0 1 0 1.06L6.56 8l3.97 3.97a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 0" clip-rule="evenodd"/>
      </svg>
      <p>List Lowongan Kerja</p>
    </a>
    <span class="flex text-[#333333] font-bold text-2xl justify-center"><?php echo $data['judul']; ?></span>
    <hr class="border-b border-[#EEEEEE] rounded-lg">
    <div class="flex flex-col px-2 gap-3">
      <span class="flex text-[#333333] font-bold px-1.5 text-xl">Deskripsi Pekerjaan</span>
      <hr class="border-b-[2px] border-[#171473] rounded-lg">
      <p class="pl-1.5 pr-2 text-sm text-justify flex flex-wrap">
        <?php echo $data['deskripsi']; ?>
      </p>
    </div>
    <div class="flex flex-col px-2 gap-3">
      <span class="flex text-[#333333] font-bold px-1.5 text-xl">Kualifikasi</span>
      <hr class="border-b-[2px] border-[#171473] rounded-lg">
      <p class="pl-1.5 pr-2 text-sm text-justify flex flex-wrap">
        <?php echo $data['kualifikasi']; ?>
      </p>
    </div>
    <div class="flex flex-col px-2 gap-3">
      <span class="flex text-[#333333] font-bold px-1.5 text-xl">Gaji</span>
      <hr class="border-b-[2px] border-[#171473] rounded-lg">
      <p class="pl-1.5 pr-2 text-sm text-justify flex flex-wrap"><?php echo $data['gaji']; ?></p>
    </div>
    <?php if ($userRoleData['role'] === 'Seeker') : ?>
    <form class="flex px-2 justify-end">
      <input value="<?= $Loker['id_seeker']; ?>" type="hidden">
      <input value="<?= $Loker['id_loker']; ?>" type="hidden">
      <a href="" class="flex w-auto text-white py-2 px-4 rounded-lg bg-[#171473]
      hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
        Lamar Sekarang
      </a>
    </form>
    <?php endif; ?>
  </div>
  <div class="h-fit flex flex-col w-[27%] p-4 pt-6 shadow-[0_0px_10px_0px_rgba(0,0,0,0.2)] rounded-xl gap-2">
    <span span class="flex text-[#333333] font-bold text-xl justify-center">Profil Perusahaan</span>
    <hr class="border-b-[2px] border-[#171473] mx-2 rounded-lg">
    <div class="pt-2 flex flex-row justify-center gap-1">
      <label class="font-bold text-sm text-justify flex flex-wrap">Nama Mitra :</label>
      <p class="text-sm text-justify flex flex-wrap"><?php echo $Mitra['nama_mitra']; ?></p>
    </div>
    <div class="flex flex-row justify-center gap-1">
      <label class="font-bold text-sm text-justify flex flex-wrap">Alamat :</label>
      <p class="text-sm text-justify flex flex-wrap"><?php echo $Mitra['alamat']; ?></p>
    </div>
  </div>
</div>

<?php include_once 'resources/views/master-layout/loker.php'; ?>