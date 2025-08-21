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
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('dashbord')">
                            <i class="fa-solid fa-house"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">ড্যাশবোর্ড</span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('Academic')">
                            <i class="fa-solid fa-graduation-cap"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">পড়াশোনা</span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('exam')">
                            <i class="fa-solid fa-pen-to-square"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">পরীক্ষা</span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('practice')">
                            <i class="fa-solid fa-square-caret-right"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">দ্রুত প্র্যাকটিস</span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('signUp')">
                            <i class="fa-solid fa-user-plus"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">সাইন আপ</span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a href="#" class="w-full rounded-xl flex items-center px-4 py-2 hover:bg-slate-200 transition-all duration-200" onclick="showSection('login')">
                            <i class="fa-solid fa-right-to-bracket"></i> <span class="text-xs xl:text-sm ml-3 font-semibold">সাইন ইন</span>
                        </a> 
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
    <main class="bg-slate-100 min-h-screen mt-15 lg:mt-0">
        <section id="dashbord" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">ড্যাশবোর্ড</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
                <div class="container mx-auto px-3 py-8 sm:py-12 flex flex-col items-center justify-center text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-blue-700 mb-3 sm:mb-4 galada-regular">শিক্ষা, অনুপ্রেরণা ও সাফল্যের মঞ্চ!</h2>
                    <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-5 sm:mb-6 max-w-xl sm:max-w-2xl">প্রস্তুতি মঞ্চ-এ যোগ দিন, যেখানে শিক্ষার্থীরা একসাথে শিখে, অনুশীলন করে এবং নিজেদের দক্ষতা বাড়ায়। আপনার স্বপ্নের পথে এগিয়ে যেতে আজই আমাদের সাথে যুক্ত হোন।</p>
                    <a href="#" class="bg-gradient-to-r from-blue-600 to-red-500 hover:from-red-500 hover:to-blue-600 text-white font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-full shadow-lg transition-all duration-300 text-base sm:text-lg">এখনই সাইন আপ করুন</a>
                    <div class="mt-8 sm:mt-10 grid grid-cols-2 sm:grid-cols-3 2xl:grid-cols-4 gap-5 sm:gap-6 w-full max-w-4xl">
                        
                        <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 flex flex-col items-center">
                            <i class="fa-solid fa-graduation-cap text-2xl sm:text-3xl text-red-500 mb-2 sm:mb-3"></i>
                            <h3 class="font-semibold text-lg sm:text-xl mb-1 sm:mb-2">পড়াশোনা</h3>
                            <p class="text-gray-600 text-xs sm:text-sm">আপনার অ্যাকাডেমিক সাবজেক্ট খুঁজুন এবং এখান থেকে পড়ুন।</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 flex flex-col items-center">
                            <i class="fa-solid fa-pen-to-square text-2xl sm:text-3xl text-red-500 mb-2 sm:mb-3"></i>
                            <h3 class="font-semibold text-lg sm:text-xl mb-1 sm:mb-2">পরীক্ষা</h3>
                            <p class="text-gray-600 text-xs sm:text-sm">প্রতিটি অধ্যায় শেষ করার পর নিজেকে বিচার করো।</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 flex flex-col items-center">
                            <i class="fa-solid fa-bolt text-2xl sm:text-3xl text-red-500 mb-2 sm:mb-3"></i>
                            <h3 class="font-semibold text-lg sm:text-xl mb-1 sm:mb-2">দ্রুত প্র্যাকটিস</h3>
                            <p class="text-gray-600 text-xs sm:text-sm">নিয়মিত অনুশীলনে দক্ষতা বাড়ান সহজেই।</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 flex flex-col items-center">
                            <i class="fa-solid fa-trophy text-2xl sm:text-3xl text-yellow-500 mb-2 sm:mb-3"></i>
                            <h3 class="font-semibold text-lg sm:text-xl mb-1 sm:mb-2">লিডারবোর্ড</h3>
                            <p class="text-gray-600 text-xs sm:text-sm">আপনার অগ্রগতি দেখুন ও অন্যদের সাথে প্রতিযোগিতা করুন।</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 flex flex-col items-center">
                            <i class="fa-solid fa-users text-2xl sm:text-3xl text-blue-500 mb-2 sm:mb-3"></i>
                            <h3 class="font-semibold text-lg sm:text-xl mb-1 sm:mb-2">কমিউনিটি</h3>
                            <p class="text-gray-600 text-xs sm:text-sm">সহযোগিতামূলক পরিবেশে শিখুন ও শেয়ার করুন।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Academic" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection hidden">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">পড়াশোনা</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
                <div class="container mx-auto px-3 py-8 sm:py-12 flex flex-col items-center justify-center text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-blue-700 mb-3 sm:mb-4 galada-regular">শিক্ষা, অনুপ্রেরণা ও সাফল্যের মঞ্চ!</h2>
                    <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-5 sm:mb-6 max-w-xl sm:max-w-2xl">আপনার অ্যাকাডেমিক বা শিক্ষাগত পাঠ খুঁজে পেতে হলে প্রথমে আপনাকে লগইন করতে হবে।</p>
                    <a href="#" class="bg-gradient-to-r from-blue-600 to-red-500 hover:from-red-500 hover:to-blue-600 text-white font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-full shadow-lg transition-all duration-300 text-base sm:text-lg">এখনই সাইন আপ করুন</a>
                </div>
            </div>
        </section>
         <section id="exam" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection hidden">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">পরীক্ষা</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
                <div class="container mx-auto px-3 py-8 sm:py-12 flex flex-col items-center justify-center text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-blue-700 mb-3 sm:mb-4 galada-regular">শিক্ষা, অনুপ্রেরণা ও সাফল্যের মঞ্চ!</h2>
                    <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-5 sm:mb-6 max-w-xl sm:max-w-2xl">আপনার অ্যাকাডেমিক বা শিক্ষাগত পাঠ খুঁজে পেতে হলে প্রথমে আপনাকে লগইন করতে হবে।</p>
                    <a href="#" class="bg-gradient-to-r from-blue-600 to-red-500 hover:from-red-500 hover:to-blue-600 text-white font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-full shadow-lg transition-all duration-300 text-base sm:text-lg">এখনই সাইন আপ করুন</a>
                </div>
            </div>
        </section> 
         <section id="practice" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection hidden">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">দ্রুত প্র্যাকটিস</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
                <div class="container mx-auto px-3 py-8 sm:py-12 flex flex-col items-center justify-center text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-blue-700 mb-3 sm:mb-4 galada-regular">শিক্ষা, অনুপ্রেরণা ও সাফল্যের মঞ্চ!</h2>
                    <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-5 sm:mb-6 max-w-xl sm:max-w-2xl">আপনার অ্যাকাডেমিক বা শিক্ষাগত পাঠ খুঁজে পেতে হলে প্রথমে আপনাকে লগইন করতে হবে।</p>
                    <a href="#" class="bg-gradient-to-r from-blue-600 to-red-500 hover:from-red-500 hover:to-blue-600 text-white font-bold py-2 sm:py-3 px-6 sm:px-8 rounded-full shadow-lg transition-all duration-300 text-base sm:text-lg">এখনই সাইন আপ করুন</a>
                </div>
            </div>
        </section>
         <section id="signUp" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection hidden">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">সাইন আপ</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
            </div>
        </section>
         <section id="login" class="mx-auto lg:max-w-[75rem] lg:pl-65 transition-all duration-300 userSection hidden">
            <div class="px-5 py-10"> 
                <h1 class="font-bold mb-3">সাইন ইন</h1>
                <p class="h-[1px] w-full bg-black opacity-20"></p>
                
            </div>
        </section>
    </main>
    <script src="clickHandle.js"></script>
</body>
</html>