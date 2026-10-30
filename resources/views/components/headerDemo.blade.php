<!--Header component used in pages-->
<header class="mx-auto py-6 px-4 sm:px-6 w-fit lg:px-8">
    <img src="{{ asset('storage/images/melisa_fashion_logo_header.svg') }}" fetchpriority="high" alt="web_shop_logo" width="300" height="200" class=" sm:w-[300px] sm:h-[100px] lg:w-[600px] lg:h-[200px] 2xl:w-[900px] 2xl:h-[300px]">
    <nav class="flex flex-row mt-[0.5rem] mb-[0.5rem]  2xl:mt-[0rem] 2xl:mb-[0rem] lg:flex-row-reverse flex-wrap" x-data="{ open: false }">
        <div class="lg:hidden">
            <img class="cursor-pointer lg:w-[100px]" src="{{ asset('storage/images/burger.svg') }}" alt="burger_menu" width="35" height="60" x-on:click="open = ! open" x-data="{ red: false }" x-bind:class="red ? ' bg-slate-100 text-white' : ''" @click="red = ! red">
            <div class=" flex flex-col md:flex-row md:items-end gap-1 lg:gap-5 xl:gap-6 lg:mt-6  xl:mt-6 2xl:gap-8 mt-[1rem] 2xl:mt-12 2xl:mb-[1.5rem] " x-show="open" x-transition>
                <div class="flex justify-center md:justify-start mb-3">
    <span class="inline-flex items-center gap-1.5
                 rounded-full border border-gray-200
                 bg-gray-50 px-3 py-1
                 text-[10px] font-semibold uppercase
                 tracking-wider text-gray-500 shadow-sm">

        <svg class="w-3 h-3 text-gray-400" fill="none"
             stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 9v3.75m9.303 3.376L13.303 3.376a1.5 1.5 0 0 0-2.606 0L2.697 16.126a1.5 1.5 0 0 0 1.303 2.249h16a1.5 1.5 0 0 0 1.303-2.249Z"/>
        </svg>

        Prijava i registracija nisu dostupne u demu
    </span>
</div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/loginicon.svg') }}" alt="messages_icon" width="25" height="25">
                    </div>
                    <div>
                        <p>Prijavi se</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/newuser.svg') }}" alt="messages_icon" width="25" height="25">
                    </div>
                    <div>
                        <p>Registracija</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3"><img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/carticon.svg') }}" alt="messages_icon" width="25" height="25"></div>
                    <div>
                        <p>Korpa</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/google-login.svg') }}" alt="google logo" width="25" height="25" loading="lazy">
                    </div>
                    <div>
                        <p>Prijavi se sa Google</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
            <div class="flex flex-row gap-1 lg:gap-5 xl:gap-6  xl:mt-6  2xl:gap-8  items-end  2xl:mb-[1.5rem]">
                <div class="flex justify-center md:justify-start mb-3">
                    <span class="inline-flex items-center gap-1.5
                 rounded-full border border-gray-200
                 bg-gray-50 px-3 py-1
                 text-[10px] font-semibold uppercase
                 tracking-wider text-gray-500 shadow-sm">

                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9.303 3.376L13.303 3.376a1.5 1.5 0 0 0-2.606 0L2.697 16.126a1.5 1.5 0 0 0 1.303 2.249h16a1.5 1.5 0 0 0 1.303-2.249Z" />
                        </svg>

                        Prijava i registracija nisu dostupne u demu
                    </span>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/loginicon.svg') }}" alt="messages_icon" width="25" height="25">
                    </div>
                    <div>
                        <p>Prijavi se</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/newuser.svg') }}" alt="messages_icon" width="25" height="25">
                    </div>
                    <div>
                        <p>Registracija</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3"><img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/carticon.svg') }}" alt="messages_icon" width="25" height="25"></div>
                    <div>
                        <p>Korpa</p>
                    </div>
                </div>
                <div class="flex flex-col gap-[0.5rem] items-center">
                    <div class="bg-white text-gray-700 border border-gray-200 rounded-full shadow-lg hover:shadow-xl p-3">
                        <img class="cursor-pointer w-6 lg:w-10 lg:h-10 h-6" src="{{ asset('storage/images/google-login.svg') }}" alt="google logo" width="25" height="25" loading="lazy">
                    </div>
                    <div>
                        <p>Prijavi se sa Google</p>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <hr class="border-t-2 border-gray-800">
    </hr>
    <nav x-data="{ open: false }" class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/70 backdrop-blur-md">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex h-16 gap-6 items-center justify-between">

                <!-- Logo -->
                <a href="/" class="text-3xl font-semibold tracking-wide text-gray-900">
                    MODICA
                </a>

                <!-- Desktop Nav -->
                <div class="hidden md:flex items-center space-x-10">
                    <a href="/prodavnica#istraži" class="text-base font-medium text-gray-800 hover:text-black transition">
                        Kategorije i pretraga
                    </a>
                    <a href="/prodavnica#posebne-cijene" class="text-base font-medium text-gray-800 hover:text-black transition">
                        Posebne ponude
                    </a>

                    <a href="/prodavnica#posebne-cijene" class="text-base font-medium text-gray-800 hover:text-black transition">
                        Najnovija linija
                    </a>
                    <a href="/prodavnica#posebne-cijene" class="text-base font-medium text-gray-800 hover:text-black transition">
                        Najbolje cijene
                    </a>
                    <a href="/prodavnica#footer" class="text-base font-medium text-gray-800 hover:text-black transition">
                        O nama
                    </a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden py-4 space-y-4 flex flex-col">

                <a href="/prodavnica#istraži" class="block text-sm text-gray-800 hover:text-black">
                    Kategorije i pretraga
                </a>
                <a href="/prodavnica#posebne-cijene" class="text-sm font-medium text-gray-800 hover:text-black transition">
                    Posebne ponude
                </a>
                <a href="/prodavnica#special-prices" class="text-sm font-medium text-gray-800 hover:text-black transition">
                    Najnovija linija
                </a>
                <a href="/prodavnica#special-prices" class="block text-sm text-gray-800 hover:text-black">
                    Najbolje cijene
                </a>
                <a href="/prodavnica/#footer" class="block text-sm text-gray-800 hover:text-black">
                    O nama
                </a>
            </div>
        </div>
    </nav>
    <hr class="border-t-2 border-gray-800">
    </hr>
</header>