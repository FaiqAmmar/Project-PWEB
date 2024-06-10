<?php $title = 'E Learning'; ?>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>

<form action="<?= urlpath('update-elearning?id='. $data['id']); ?>" method="POST"
class="relative flex flex-col w-[70%] mx-auto my-4 p-4 shadow-[0_0px_10px_0px_rgba(0,0,0,0.2)] rounded-xl">
  <span class="flex text-[#333333] font-bold text-3xl py-4 justify-center">Edit Lowongan E-Learning</span>
  <div class="flex flex-col gap-1 py-2">
    <label class="text-base" for="judul">Nama E-Learning:</label>
    <input name="judul" type="text" class="border border-[#333333] rounded-lg w-full py-1 px-2
    focus:border-[#333333] focus:ring-0 focus:outline-none" value="<?php echo $data['judul']; ?>">
  </div>
  <div class="flex flex-col gap-1 py-2">
    <label class="text-base" for="website">Link E-Learning:</label>
    <input name="website" type="text" class="border border-[#333333] rounded-lg w-full py-1 px-2
    focus:border-[#333333] focus:ring-0 focus:outline-none" value="<?php echo $data['website']; ?>">
  </div>
  <div class="flex flex-col gap-1 py-2">
    <label class="text-base" for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" id="dataInput" type="text" cols="10"  rows="4" style="resize: none;" class="border border-[#333333] rounded-lg w-full py-1 px-2
    focus:border-[#333333] focus:ring-0 focus:outline-none"><?php echo $data['deskripsi']; ?></textarea>
  </div>
  <div class="flex flex-col gap-1 py-2">
    <label class="text-base" for="materi">Materi:</label>
    <textarea name="materi" id="dataInput" type="text" cols="10"  rows="4" style="resize: none;" class="border border-[#333333] rounded-lg w-full py-1 px-2
    focus:border-[#333333] focus:ring-0 focus:outline-none"><?php echo $data['materi']; ?></textarea>
  </div>
  <div class="flex justify-center py-2">
    <button type="submit" class="flex w-auto text-white py-2 px-6 rounded-lg bg-[#171473] 
    hover:bg-[#0f0f5a] hover:scale-105 transition-all duration-200">
      Ubah
    </button>
  </div>
</form>

<script src="resources/js/textarea.js"></script>

<?php include_once 'resources/views/master-layout/elearning.php'; ?>