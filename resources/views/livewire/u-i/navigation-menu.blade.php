<div x-data="{ /* ... existing alpine data ... */ }"
     class="relative font-sans w-screen h-full">

    <!-- Top Bar - Enhanced for large screens -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900 py-3 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-10">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0">
                <!-- Contact Info - Larger text on big screens -->
                <div class="flex items-center space-x-6 text-sm lg:text-base">
                    <!-- ... existing contact elements ... -->
                </div>

                <!-- Social & Theme - More spacing on large screens -->
                <div class="flex items-center justify-between space-x-6 lg:space-x-8">
                    <!-- Social Icons - Larger on big screens -->
                    <div class="flex space-x-4 lg:space-x-6">
                        <!-- ... existing social icons ... -->
                    </div>
                    <!-- ... existing theme toggle ... -->
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation - Optimized for large screens -->
    <nav :class="{/* ... existing classes ... */}"
         class="border-b border-gray-100 dark:border-gray-800 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-10">
            <div class="relative">
                <!-- ... existing curved background ... -->

                <div class="relative">
                    <div class="flex justify-between h-20 lg:h-24"> <!-- Taller nav on large screens -->
                        <!-- Logo - Larger on big screens -->
                        <div class="flex items-center">
                            <a href="" class="flex items-center group">
                                <x-application-mark class="block h-12 w-auto lg:h-16 lg:w-16 transform group-hover:scale-110 transition-transform duration-200" />
                                <span class="ml-3 text-xl lg:text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                    Academy
                                </span>
                            </a>
                        </div>

                        <!-- Desktop Navigation - Enhanced spacing -->
                        <div class="hidden md:flex items-center space-x-4 lg:space-x-6 xl:space-x-8">
                            @foreach(['Home', 'Academic', 'Admissions', 'Programs', 'Faculty', 'Research', 'Campus Life'] as $item)
                                <a href="#" class="px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 rounded-lg text-sm lg:text-base font-medium transition-all duration-200 hover:bg-blue-50 dark:hover:bg-gray-800 transform hover:scale-105">
                                    {{ $item }}
                                </a>
                            @endforeach

                            <!-- User Menu - Larger buttons on big screens -->
                            <div class="ml-4 lg:ml-6 relative">
                                @if (Route::has('login'))
                                    <nav class="flex items-center space-x-2 lg:space-x-4">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                               class="px-4 py-2 lg:px-6 lg:py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200 text-sm lg:text-base">
                                                Dashboard
                                            </a>
                                        @else
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                   class="px-4 py-2 lg:px-6 lg:py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-200 text-sm lg:text-base">
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                            </div>
                        </div>

                        <!-- Mobile menu button - Hidden on larger screens -->
                        <div class="flex items-center md:hidden">
                            <!-- ... existing mobile menu button ... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu - Wider on larger mobile devices -->
    <div x-show="isSideMenuOpen"
         class="fixed inset-0 z-50 bg-gray-600/50 backdrop-blur-sm">
        <div class="fixed inset-y-0 left-0 w-72 md:w-80 bg-white dark:bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out"
             :class="{ '-translate-x-full': !isSideMenuOpen }">
            <!-- ... existing mobile menu content ... -->
        </div>
    </div>
</div>
