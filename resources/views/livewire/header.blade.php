<div class="bg-indigo-900 relative overflow-hidden shadow-xl">
    @if (Request::is('/'))
        <img src="/images/IMG_2017.jpg" class="absolute w-full object-cover "/>
    @elseif (Request::is('volunteer'))
        <img src="/images/IMG_1850.jpg" class="absolute w-full object-cover "/>
    @elseif (Request::is('request'))
        <img src="/images/IMG_1834.jpg" class="absolute w-full object-cover "/>
    @endif

    <div class="inset-0 bg-black opacity-25 absolute">
    </div>
    <header class="absolute top-0 left-0 right-0 z-20">
        <nav class="container mx-auto px-6 md:px-12 py-4">
            <div class="md:flex justify-between items-center">
                <div class="flex justify-between items-center">
                    <a href="/" class="text-white">
                        <svg class="w-8 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" data-name="Capa 1"
                             viewBox="0 0 16.16 12.57">
                            <defs>
                            </defs>
                            <path d="M14.02 4.77v7.8H9.33V8.8h-2.5v3.77H2.14v-7.8h11.88z">
                            </path>
                            <path d="M16.16 5.82H0L8.08 0l8.08 5.82z">
                            </path>
                        </svg>
                    </a>
                    <div class="md:hidden">
                        <button class="text-white focus:outline-none">
                            <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="/#about" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                        About ServeWeek
                    </a>
                    <a href="/#details" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                        Details
                    </a>
                    @if ($showVolunteer)
                        <a href="/volunteer" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Volunteer
                        </a>
                    @endif

                    @if ($showSubmit)
                        <a href="/request" class="text-lg uppercase mx-3 text-white cursor-pointer hover:text-gray-300">
                            Request a Project
                        </a>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
        <div class="lg:w-3/5 xl:w-3/5 flex flex-col items-start relative z-10">
            <span class="font-bold uppercase text-yellow-400 text-4xl">
                May 14-22, 2022
            </span>
            <h1 class="font-bold text-6xl sm:text-7xl text-white leading-tight mt-4">
                Loving Central PA
                <br/>
                One Neighbor<br/>At A Time
            </h1>
            @if ($showSubmit)
            <a href="/request"
               class="block bg-white hover:bg-gray-100 py-3 px-4 rounded-lg text-lg text-gray-800 font-bold uppercase mt-10">
                Request a Project
            </a>
            @endif

            @if ($showVolunteer)
                <a href="/volunteer"
                   class="block bg-white hover:bg-gray-100 py-3 px-4 rounded-lg text-lg text-gray-800 font-bold uppercase mt-10">
                    Volunteer
                </a>
            @endif
        </div>
    </div>
</div>
