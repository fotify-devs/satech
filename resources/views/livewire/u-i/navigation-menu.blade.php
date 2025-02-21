<div x-data="{
    isSticky: false,
    isSideMenuOpen: @entangle('isSideMenuOpen'),
    darkMode: @entangle('darkMode'),
    init() {
        window.addEventListener('scroll', () => {
            this.isSticky = window.pageYOffset > 20;
        });
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.isSideMenuOpen = false;
            }
        });

        if (this.darkMode) {
            document.documentElement.classList.add('dark');
        }

        this.$watch('darkMode', value => {
            if (value) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    }

}" class="relative font-sans w-screen h-full">

    <!-- Top Bar with enhanced gradient -->
    <div
        class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 py-3 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0">

                <div class="flex items-center justify-between w-full">

                    <div class="flex items-center space-x-4">
                        <a href="mailto:info@academy.edu"
                            class="flex items-center text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            @if ($settings->email)
                                <span class="hidden sm:inline">{{ $settings->email }}</span>
                            @endif
                        </a>
                        <a href="tel:+1234567890"
                            class="flex items-center text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            @if ($settings->phone)
                                <span class="hidden sm:inline">{{ $settings->phone }}</span>
                            @endif
                        </a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <!-- Social Icons with hover effects -->
                        <div class="flex space-x-4">
                            <a href="#" class="transform hover:scale-110 transition-transform duration-200">
                                <div
                                    class="p-2 rounded-full bg-white dark:bg-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
                                    <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#" class="transform hover:scale-110 transition-transform duration-200">
                                <div
                                    class="p-2 rounded-full bg-white dark:bg-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
                                    <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#" class="transform hover:scale-110 transition-transform duration-200">
                                <div
                                    class="p-2 rounded-full bg-white dark:bg-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
                                    <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.016 18.6h-2.472v-3.9c0-.936-.018-2.142-1.302-2.142-1.302 0-1.5 1.02-1.5 2.076v3.966H9.27V9.75h2.37v1.086h.036c.335-.636 1.152-1.305 2.37-1.305 2.532 0 3 1.668 3 3.84v5.229zM7.116 8.664a1.434 1.434 0 11.042-2.868 1.434 1.434 0 01-.042 2.868zM5.88 18.6V9.75h2.472v8.85H5.88z" />
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <!-- Enhanced Theme Toggle -->
                        <button wire:click="toggleDarkMode"
                            class="group flex items-center space-x-2 px-4 py-2 rounded-full bg-white dark:bg-gray-700 shadow-sm hover:shadow-md transition-all duration-200">
                            <span x-show="!darkMode" class="flex items-center text-yellow-500">
                                <svg class="h-4 w-4 group-hover:rotate-90 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium">Light</span>
                            </span>
                            <span x-show="darkMode" class="flex items-center text-blue-400">
                                <svg class="h-4 w-4 group-hover:rotate-90 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium">Dark</span>
                            </span>
                        </button>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <!-- Main Navigation with glass effect -->
    <nav :class="{
        'fixed top-0 w-full transform translate-y-0 transition-transform duration-300 backdrop-blur-lg bg-white/90 dark:bg-gray-900/90': isSticky,
        'bg-white dark:bg-gray-900': !isSticky
    }"
        class="border-b border-gray-100 dark:border-gray-800 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto">
            <div class="relative">
                <!-- Enhanced curved edge with gradient -->
                <div class=" bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900"
                    style="clip-path: polygon(0 0, 100% 0, 100% 85%, 85% 100%, 0 100%);"></div>

                <!-- Navigation Content -->
                <div class="relative px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20">
                        <!-- Logo & Brand with animation -->
                        <div class="flex items-center">
                            <a href="" class="flex items-center group space-x-2 sm:space-x-3">
                                @if ($settings->institution_logo)
                                    <img class="h-8 sm:h-10 w-auto object-contain transition-transform duration-200 group-hover:scale-105"
                                        src="{{ Storage::url($settings->institution_logo) }}" alt="Company Logo">
                                @endif
                                <span
                                    class="text-xl sm:text-2xl md:text-3xl font-bold bg-gradient-to-tfrom-blue-600via-violet-500to-zinc-400bg-clip-text text-transparent">
                                    Satech
                                </span>
                            </a>
                        </div>

                        <!-- Desktop Navigation with hover effects -->
                        <div class="hidden md:flex items-center space-x-1">
                            <!-- Navigation links with enhanced hover effects -->
                            @foreach (['Home', 'Academic', 'Admissions', 'Programs', 'Faculty', 'Research', 'Campus Life'] as $item)
                                <a href="#"
                                    class="px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50 dark:hover:bg-gray-800">
                                    {{ $item }}
                                </a>
                            @endforeach

                            <!-- User Menu with glass effect -->
                            <div class="ml-3 relative">
                                @if (Route::has('login'))
                                    <nav class="flex items-center space-x-2">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                                class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200">
                                                ApplyNow
                                            </a>
                                        @else
                                            {{-- <a href="{{ route('login') }}"
                                               class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-blue-600 dark:hover:border-blue-400 transition-colors duration-200">
                                                Log in
                                            </a> --}}
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200">
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                            </div>
                        </div>

                        <!-- Enhanced Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button @click="isSideMenuOpen = true"
                                class="items-center justify-center block md:hidden p-2 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-gray-800 focus:outline-none transition duration-200">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Enhanced Mobile Side Navigation with glass effect -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" @click.away="isSideMenuOpen = false"
        class="fixed inset-0 z-50 bg-gray-600/50 backdrop-blur-sm">

        <div class="fixed inset-y-0 left-0 w-72 bg-white dark:bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out"
            :class="{ '-translate-x-full': !isSideMenuOpen }">

            <div class="flex items-center justify-between p-4 border-b dark:border-gray-800">
                <span
                    class="text-xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Menu</span>
                <button @click="isSideMenuOpen = false"
                    class="p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation Links -->
            <nav class="px-4 py-4 space-y-1">
                @foreach (['Home', 'Academic', 'Admissions', 'Programs', 'Faculty', 'Research', 'Campus Life'] as $item)
                    <a href="#"
                        class="block px-4 py-3 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 rounded-lg transition-colors duration-200 hover:bg-blue-50 dark:hover:bg-gray-800">
                        {{ $item }}
                    </a>
                @endforeach

                <div class="border-t border-gray-200 dark:border-gray-800 my-4"></div>

                <!-- Mobile Auth Buttons -->
                <div class="px-4 py-4 space-y-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="block w-full px-4 py-3 text-center rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="block w-full px-4 py-3 text-center rounded-lg border border-gray-200 dark:border-gray-700 hover:border-blue-600 dark:hover:border-blue-400 transition-colors duration-200">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block w-full px-4 py-3 text-center rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200">
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
