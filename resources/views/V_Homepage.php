<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
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
  <div class="w-full flex flex-row py-4 px-24 justify-between ">
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
      <a class="hover:underline" href="#">
        Tentang Kami
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>