<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <title>প্রস্তুতি মঞ্চ</title>
    <style>
       .galada-regular {
        font-family: "Galada", cursive;
        font-weight: 400;
       
        }
    </style>
</head>
<body>
    <nav>
        <div class="fixed top-0 bg-white w-full px-5 py-3 flex justify-between lg:hidden">
            <span class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
            </span>

            <h1><a href="" class="galada-regular text-black"><span class="text-2xl text-red-700">প্র</span><span class="text-xl text-blue-700">স্তুতি </span><span class="text-xl text-red-500">ম</span><span>ঞ্চ</span></a></h1>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>
        </div>
        <nav class="bg-white h-screen fixed p-5 rounded-sm shadow-lg hidden lg:block lg:w-65 transition-all duration-300">
            <div class="text-white flex justify-between mb-8">
                <h1><a href="" class="galada-regular text-black"><span class="text-2xl text-red-700">প্র</span><span class="text-xl text-blue-700">স্তুতি </span><span class="text-xl text-red-500">ম</span><span>ঞ্চ</span></a></h1>
                <p class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>
                </p>
            </div>
            <div>
                <ul>
                    <li class="w-full bg-black">
                        <a href="" class="my-2 px-3 py-1 relative bg-white w-full rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200" onclick="showSection('dashbord')">
                            <i class="fa-solid fa-house"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">ড্যাশবোর্ড</span>
                        </a> 
                    </li>
                    <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-graduation-cap"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">ক্লাস ৬-১০</span>
                        </a> 
                    </li>
                    <!-- <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-pen-to-square"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">পরীক্ষা</span>
                        </a> 
                    </li> -->
                    <!-- <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-square-caret-right"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">দ্রুত প্র্যাকটিস</span>
                        </a> 
                    </li>
                    <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-users"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">কমিউনিটি টিম</span>
                        </a> 
                    </li>
                    <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-chart-area"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">লিডারবোর্ড</span>
                        </a> 
                    </li>
                    <li class="my-2 px-3 py-1 rounded-md cursor-pointer hover:bg-slate-300 transition-all duration-200">
                        <a href="">
                            <i class="fa-solid fa-circle-user"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">প্রোফাইল</span>
                        </a> 
                    </li> -->
                </ul>
            </div>
        </nav>
    </nav>
    <main class="bg-slate-100 h-screen mt-15 lg:mt-0">
        <section id="dashbord" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection">
            <div class="px-5 py-10">
                <h1 class="font-bold mb-3">ড্যাশবোর্ড</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
            </div>
        </section>
        <section id="Academic" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection">
           <?php include "exam.php" ?>
        </section>
    </main>
    <script src="./../clickHandle.js"></script>
</body>
</html>