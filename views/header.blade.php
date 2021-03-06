<nav class="px-4 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center lg:relative lg:-ml-4 lg:mr-2">
            <!-- Mobile menu button-->
            <button @click="open_sidebar = !open_sidebar"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-white
                hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                aria-label="Main menu" aria-expanded="false">
                <!-- Icon when menu is closed. -->
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="h-6 w-6" x-show="!open_sidebar" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon when menu is open. -->
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="h-6 w-6" x-show="open_sidebar" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flex-1 flex items-center justify-center lg:items-stretch lg:justify-start">
            <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto"
                    src="{{asset('/assets/img/watchbeetle_icon.png')}}" alt="Watchbeetle logo">
                <img class="hidden lg:block h-8 w-auto"
                    src="{{asset('/assets/img/watchbeetle_full_light.png')}}" alt="Watchbeetle logo">
            </div>
            <div class="hidden lg:block lg:ml-6">
                <div x-cloak class="flex">
                    @hasSection ('navbar-top')
                        @yield('navbar-top')
                    @else
                    <a href="#"
                        class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</a>
                    <a href="#"
                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Team</a>
                    <a href="#"
                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Projects</a>
                    <a href="#"
                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar</a>
                    @endif
                </div>
            </div>
        </div>
        <div x-cloak class="absolute inset-y-0 right-0 flex items-center pr-2 lg:static lg:inset-auto lg:ml-6 lg:pr-0">
            <button
                class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                aria-label="Notifications">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="ml-3 relative" x-data="{ dropdownopen: false }" @click.away='dropdownopen = false'>
                <div>
                    <button @click='dropdownopen = !dropdownopen'
                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out"
                        id="user-menu" aria-label="User menu" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
                    x-show="dropdownopen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    style="z-index: 10001;">
                    <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                        aria-labelledby="user-menu">
                        <a href="#"
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            role="menuitem">Your Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            role="menuitem">Settings</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            role="menuitem">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
