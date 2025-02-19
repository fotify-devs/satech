<footer class="lg:h-screen flex items-end justify-center">
    <div class="w-full bg-gradient-to-b from-sky-800 via-blue-900 to-slate-900">
        <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
            <!-- Main Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <!-- Institution Info -->
                <div class="col-span-full lg:col-span-2">
                    <div class="flex items-center">
                        <div class="flex items-center gap-3">
                            <!-- Medical Cross Icon -->
                            @if($settings->institution_logo)
                            <img class="h-10" src="{{ Storage::url($settings->institution_logo) }}" alt="Company Logo">
                        @endif
                            <a class="flex-none text-3xl font-bold bg-gradient-to-r from-blue-200 to-blue-100 bg-clip-text text-transparent"
                                href="#">Satech College</a>
                        </div>
                    </div>
                    <p class="text-blue-200 mt-6 leading-relaxed"> {{ $settings->about }}</p>

                    <!-- Contact Info -->
                    <div class="mt-6 space-y-2">
                        @if ($settings->address)
                            <p class="flex items-center text-blue-200">
                                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                                {{ $settings->address }}
                            </p>
                        @endif
                        @if ($settings->phone)
                            <p class="flex items-center text-blue-200">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                  </svg>

                                {{ $settings->phone }}
                            </p>
                        @endif
                        @if ($settings->email)
                            <p class="flex items-center text-blue-200">
                                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                                {{ $settings->email }}
                            </p>
                        @endif
                    </div>
                </div>

                <!-- Programs -->
                <div class="col-span-1">
                    <h4 class="font-bold text-blue-100 uppercase tracking-wider mb-4">Programs</h4>
                    <div class="mt-3 grid space-y-3">
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Nursing</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Clinical Medicine</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Laboratory Technology</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Pharmacy</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Short Courses</a></p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-span-1">
                    <h4 class="font-bold text-blue-100 uppercase tracking-wider mb-4">Quick Links</h4>
                    <div class="mt-3 grid space-y-3">
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Admissions</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Student Portal</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">E-Learning</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Library</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Research</a></p>
                    </div>
                </div>

                <!-- Resources -->
                <div class="col-span-1">
                    <h4 class="font-bold text-blue-100 uppercase tracking-wider mb-4">Resources</h4>
                    <div class="mt-3 grid space-y-3">
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">About Us</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Faculty</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Careers</a> <span
                                class="inline ms-1 text-xs bg-green-600 text-white py-1 px-2 rounded-md">Hiring</span>
                        </p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">News</a></p>
                        <p><a class="inline-flex gap-x-2 text-blue-200 hover:text-blue-100 transition-colors"
                                href="#">Contact</a></p>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div
                class="mt-8 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center border-t border-blue-800 pt-8">
                <!-- Copyright -->
                <div class="flex justify-between items-center">
                    <p class="text-sm text-blue-300">© <span x-text="new Date().getFullYear()"></span> Satech College. All rights reserved💚</p>
                </div>

                <!-- Social Links -->
                <div class="flex gap-4">
                    <a class="group size-10 inline-flex justify-center items-center rounded-full border border-blue-700 text-blue-200 hover:bg-blue-800 hover:text-blue-100 transition-all duration-300"
                        href="#">
                        <svg class="size-4 transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a class="group size-10 inline-flex justify-center items-center rounded-full border border-blue-700 text-blue-200 hover:bg-blue-800 hover:text-blue-100 transition-all duration-300"
                        href="#">
                        <svg class="size-4 transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="group size-10 inline-flex justify-center items-center rounded-full border border-blue-700 text-blue-200 hover:bg-blue-800 hover:text-blue-100 transition-all duration-300"
                        href="#">
                        <svg class="size-4 transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="group size-10 inline-flex justify-center items-center rounded-full border border-blue-700 text-blue-200 hover:bg-blue-800 hover:text-blue-100 transition-all duration-300"
                        href="#">
                        <svg class="size-4 transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
