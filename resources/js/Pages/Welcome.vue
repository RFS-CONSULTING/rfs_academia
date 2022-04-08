<template>
    <div>
        <header class="bg-white">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="flex justify-between items-center py-4 lg:py-0 relative">
                    <!-- Brand Logo -->
                    <a href="index.html">
                        <!-- <img src="/images/logo.png" alt="Logo" class="w-44"> -->
                        RFS ACADEMIA
                    </a>
                    <!-- Mobile Menu -->
                    <div class="lg:hidden flex items-center gap-2">
                        <div class="flex items-center gap-1 bg-gray-50 rounded-md px-2 py-1.5 group relative cursor-pointer">
                            <img src="/assets/img/header/english.png" class="h-5 w-6" alt=""/>
                            <span class="text-xs">Eng</span>
                            <i class="fas fa-chevron-down text-xs text-slate-500"></i>

                            <ul class="absolute top-14 right-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[150px] divide-y group-hover:divide-gray-50 transition-all duration-300 ease-in-out translate-y-5 group-hover:translate-y-0">
                                <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                    <a href="#" class="text-sm text-white font-medium block px-4 py-3">English</a>
                                </li>
                                <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                    <a href="#" class="text-sm text-white font-medium block px-4 py-3">France</a>
                                </li>
                            </ul>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" id="mobile-menu"
                            class="h-8 w-8 text-slate-800 cursor-pointer transition-all duration-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                    <!-- Nav -->
                    <nav class="hidden lg:block">
                        <ul class="flex items-center gap-6">
                            <li class="group relative cursor-pointer">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <p class="text-base text-gray-800 font-medium block py-6">{{ $__('Home') }}</p>
                            </li>
                            <li class="group relative">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <a href="about-us.html" class="text-base text-gray-800 font-medium block py-6">{{ $__('About us') }}</a>
                            </li>
                            <li class="group relative cursor-pointer">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <p class="text-base text-gray-800 font-medium block py-6">{{ $__('Course') }}</p>
                                <ul class="absolute invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[200px] divide-y group-hover:divide-gray-50 transition-all duration-700 ease-in-out translate-y-5 group-hover:translate-y-0">
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="course-standard.html" class="text-sm text-white font-medium block px-4 py-3">
                                        {{ $__('Free training') }}
                                        </a>
                                    </li>
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="course-list.html" class="text-sm text-white font-medium block px-4 py-3">
                                        {{ $__('Certifying training') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="group relative cursor-pointer">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <p class="text-base text-gray-800 font-medium block py-6">{{ $__('Instructor') }}</p>
                                <ul class="absolute invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[200px] divide-y group-hover:divide-gray-50 transition-all duration-700 ease-in-out translate-y-5 group-hover:translate-y-0">
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="our-instructor.html" class="text-sm text-white font-medium block px-4 py-3">Our
                                            Instructor</a>
                                    </li>
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="become-instructor.html" class="text-sm text-white font-medium block px-4 py-3">Become
                                            Instructor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="group relative cursor-pointer">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <p class="text-base text-gray-800 font-medium block py-6">{{ $__('Events') }}</p>
                                <ul class="absolute invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[200px] divide-y group-hover:divide-gray-50 transition-all duration-700 ease-in-out translate-y-5 group-hover:translate-y-0">
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="our-events.html" class="text-sm text-white font-medium block px-4 py-3">Our
                                            Events</a>
                                    </li>
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="event-list.html" class="text-sm text-white font-medium block px-4 py-3">Event
                                            List View</a>
                                    </li>
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <a href="event-details.html" class="text-sm text-white font-medium block px-4 py-3">Event
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <a href="contact.html" class="text-base text-gray-800 font-medium block py-6">Contact</a>
                            </li>
                            <li class="group relative cursor-pointer">
                                <span class="absolute top-0 left-0 w-0 h-0.5 bg-transparent group-hover:w-full group-hover:bg-primary transition-all duration-700"></span>
                                <p class="text-base text-gray-800 font-medium block py-6">{{ $__('Connexion') }}</p>
                                <ul class="absolute invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[200px] divide-y group-hover:divide-gray-50 transition-all duration-300 ease-in-out translate-y-5 group-hover:translate-y-0">
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                         <Link :href="route('login')" class="text-sm text-white font-medium block px-4 py-3">
                                             {{ $__('Login') }}
                                        </Link>
                                    </li>
                                    <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                        <Link :href="route('register')" class="text-sm text-white font-medium block px-4 py-3">
                                             {{ $__('Subscribe') }}
                                        </Link>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav>
                    <!-- Social Links -->
                    <ul class="hidden lg:flex items-center gap-4">
                        <li class="flex items-center gap-1 bg-gray-50 rounded-md p-2 group relative cursor-pointer">
                            <img src="/assets/img/header/english.png" class="h-6 w-7" alt=""/>
                            <span>Eng</span>
                            <i class="fas fa-chevron-down text-xs text-slate-500"></i>

                            <ul class="absolute top-14 right-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 z-10 shadow-sm bg-slate-800 rounded-bl-md rounded-br-md overflow-hidden min-w-[150px] divide-y group-hover:divide-gray-50 transition-all duration-300 ease-in-out translate-y-5 group-hover:translate-y-0">
                                <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                    <a href="#" class="text-sm text-white font-medium block px-4 py-3">English</a>
                                </li>
                                <li class="hover:pl-1 hover:bg-slate-700 transition-all duration-300 ease-in-out">
                                    <a href="#" class="text-sm text-white font-medium block px-4 py-3">France</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i
                                    class="fab fa-facebook-f text-xl text-slate-400 hover:text-primary transition-all duration-300"></i></a>
                        </li>
                        <li>
                            <a href="#"><i
                                    class="fab fa-twitter text-xl text-slate-400 hover:text-sky-500 transition-all duration-300"></i></a>
                        </li>
                        <li>
                            <a href="#"><i
                                    class="fab fa-behance text-xl text-slate-400 hover:text-gray-800 transition-all duration-300"></i></a>
                        </li>
                        <li>
                            <a href="#"><i
                                    class="fab fa-youtube text-xl text-slate-400 hover:text-red-600 transition-all duration-300"></i></a>
                        </li>
                    </ul>

                    <!-- Mobile Nav -->
                    <div id="side-bar" class="fixed top-0 bottom-0 -left-full h-screen z-50 transition-all duration-500">
                        <div class="bg-gray-800 bg-opacity-40 absolute inset-0 z-40"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" id="close-menu"
                            class="absolute top-5 right-5 z-[100] lg:hidden h-8 w-8 text-white cursor-pointer transition-all duration-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        <div class="py-3 px-3 space-y-4 w-[250px] h-full bg-white shadow relative z-50 overflow-y-auto hide-scrollbar">
                            <!-- Brand Logo -->
                            <a href="index-2.html">
                                <img src="/assets/img/logo.svg" alt="Logo" class="w-44">
                            </a>

                            <!-- Menus -->
                            <ul>
                                <li class="group relative cursor-pointer space-y-1 overflow-hidden">
                                    <p class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200  ease-in-out">
                                        Home</p>
                                    <ul class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0 transform z-10 shadow-sm bg-slate-100 rounded-md overflow-hidden min-w-full divide-y group-hover:divide-gray-50 transition-all duration-500 ease-in-out">
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="index-2.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Home
                                                One</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="index-3.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Home
                                                Two</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="index-4.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Home
                                                Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-us.html"
                                    class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200">About
                                        Us</a>
                                </li>
                                <li class="group relative cursor-pointer space-y-1 overflow-hidden">
                                    <p class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200  ease-in-out">
                                        Course</p>
                                    <ul class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0 transform z-10 shadow-sm bg-slate-100 rounded-md overflow-hidden min-w-full divide-y group-hover:divide-gray-50 transition-all duration-500 ease-in-out">
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="course-standard.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Course
                                                Standard</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="course-list.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Course
                                                List View</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="course-grid.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Course
                                                Grid View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="group relative cursor-pointer space-y-1 overflow-hidden">
                                    <p class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200  ease-in-out">
                                        Instructor</p>
                                    <ul class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0 transform z-10 shadow-sm bg-slate-100 rounded-md overflow-hidden min-w-full divide-y group-hover:divide-gray-50 transition-all duration-500 ease-in-out">
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="our-instructor.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Our
                                                Instructor</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="single-instructor.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Single
                                                Instructor</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="become-instructor.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Become
                                                Instructor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="group relative cursor-pointer space-y-1 overflow-hidden">
                                    <p class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200  ease-in-out">
                                        Events</p>
                                    <ul class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0 transform z-10 shadow-sm bg-slate-100 rounded-md overflow-hidden min-w-full divide-y group-hover:divide-gray-50 transition-all duration-500 ease-in-out">
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="our-events.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Our
                                                Events</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="event-list.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Events
                                                List View</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="event-details.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Events
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="group relative cursor-pointer space-y-1 overflow-hidden">
                                    <p class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200  ease-in-out">
                                        Pages</p>
                                    <ul class="h-0 group-hover:h-auto opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0 transform z-10 shadow-sm bg-slate-100 rounded-md overflow-hidden min-w-full divide-y group-hover:divide-gray-50 transition-all duration-500 ease-in-out">
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="pricing-plan.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Pricing
                                                Plan</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="blog-grid.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Blog
                                                Grid</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="blog-standard.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Blog
                                                Standard</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="our-gallery.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Our
                                                Gallery</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="gallery-grid.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Gallery
                                                Grid</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="gallery-box.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Gallery
                                                Box</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="our-shop.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Our
                                                Shop</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="shop-column.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">Shop
                                                Column</a>
                                        </li>
                                        <li class="hover:pl-1 hover:bg-slate-200 transition-all duration-300 ease-in-out">
                                            <a href="faq.html"
                                            class="text-sm text-slate-800 hover:text-cyan-500 transition-all duration-500 font-medium block px-4 py-3">FAQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html"
                                    class="text-base text-slate-800 font-normal block hover:bg-slate-100 hover:text-cyan-500 rounded py-2 hover:pl-1 transition-all duration-200">Contact</a>
                                </li>
                            </ul>
                            <!-- Social Links -->
                            <ul class="flex items-center gap-4 mt-auto">
                                <li>
                                    <a href="#"><i
                                            class="fab fa-facebook-f text-lg text-slate-400 hover:text-primary transition-all duration-300"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i
                                            class="fab fa-twitter text-lg text-slate-400 hover:text-sky-500 transition-all duration-300"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i
                                            class="fab fa-behance text-lg text-slate-400 hover:text-gray-800 transition-all duration-300"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i
                                            class="fab fa-youtube text-lg text-slate-400 hover:text-red-600 transition-all duration-300"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero slider -->
        <section>
            <div class="glide-one relative">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides  h-[300px] lg:h-[90vh] w-full">
                        <li class="glide__slide bg-cover bg-center relative" style="background-image: url('assets/img/cover01.jpeg')">
                            <div class="absolute inset-0 bg-slate-800 bg-opacity-50"></div>
                            <div class="flex flex-col justify-center items-center h-full w-full relative z-10">
                                <div class="max-w-xs md:max-w-sm mx-auto text-center space-y-6">
                                    <h1 class="text-xl md:text-3xl lg:text-7xl font-black text-white">les Inscriptions sont en cours</h1>
                                    <p class="text-sm font-medium text-white leading-relaxed px-4 md:px-0">
                                    parcourez notre liste riche des formations certifiantes pour profitez d'un apprentissage de qualité
                                    </p>
                                    <a href="#"
                                    class="bg-primary hover:bg-white px-3 lg:px-6 py-2 lg:py-4 rounded-md inline-flex gap-2 items-center text-sm text-white font-semibold hover:text-primary transition-all duration-500">
                                        <i class="fas fa-book"></i>
                                        <span>Voir les cours</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide bg-cover bg-center relative" style="background-image: url('assets/img/slider/slider-bg.jpg')">
                            <div class="absolute inset-0 bg-slate-800 bg-opacity-50"></div>
                            <div class="flex flex-col justify-center items-center h-full w-full relative z-10">
                                <div class="max-w-xs md:max-w-sm mx-auto text-center space-y-6">
                                    <h1 class="text-xl md:text-3xl lg:text-7xl font-black text-white">Get Your
                                        Get course</h1>
                                    <p class="text-sm font-medium text-white leading-relaxed px-4 md:px-0">Sed ut perspiciatis
                                        unde omnis iste natus error sit voluptatem accusa ntium doloremque laudantium
                                        totam rem aperiam</p>
                                    <a href="#"
                                    class="bg-primary hover:bg-white px-3 lg:px-6 py-2 lg:py-4 rounded-md inline-flex gap-2 items-center text-sm text-white font-semibold hover:text-primary transition-all duration-500">
                                        <i class="fas fa-book"></i>
                                        <span>See Course</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Controllers Previous-->
                <div data-glide-el="controls">
                    <button class="absolute top-1/2 -translate-y-1/2 left-2 md:left-10 bg-white hover:bg-primary text-primary hover:text-white h-10 w-10 rounded-full shadow-lg transition-all duration-500 leading-7"
                            data-glide-dir="<">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <!-- Controllers Next-->
                <div data-glide-el="controls">
                    <button class="absolute top-1/2 -translate-y-1/2 right-2 md:right-10 bg-white hover:bg-primary text-primary hover:text-white h-10 w-10 rounded-full shadow-lg transition-all duration-500 leading-7"
                            data-glide-dir=">">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

                <!-- Success History -->
        <section class="pt-12 lg:pt-28">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="sm:grid grid-cols-12 gap-8 lg:gap-16">
                    <div class="col-span-6 lg:col-span-6">
                        <div class="success-history relative">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides  h-[360px] sm:h-[450px] lg:h-[500px] w-full">
                                    <li class="glide__slide">
                                        <img class="h-full w-full rounded-md overflow-hidden object-cover shadow-lg"
                                            src="assets/img/success/success-img.jpg" alt="">
                                    </li>
                                    <li class="glide__slide">
                                        <img class="h-full w-full rounded-md overflow-hidden object-cover shadow-lg"
                                            src="assets/img/success/success-img-2.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <!-- Controllers -->
                            <div data-glide-el="controls" class="absolute right-5 bottom-5">
                                <button class="bg-white hover:bg-primary text-primary hover:text-white h-10 lg:h-14 w-12 lg:w-16 rounded-lg shadow-lg transition-all duration-500 leading-7"
                                        data-glide-dir="<">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="bg-white hover:bg-primary text-primary hover:text-white h-10 lg:h-14 w-12 lg:w-16 rounded-lg shadow-lg transition-all duration-500 leading-7"
                                        data-glide-dir=">">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-6 lg:col-span-6 max-w-lg mt-10 sm:mt-0">
                        <h2 class="text-2xl lg:text-5xl font-black text-slate-800 leading-tight mb-6 capi">The History of Our Success and Growth</h2>
                        <p class="text-sm font-medium text-slate-600 leading-relaxed mb-6">Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab
                            illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit</p>
                        <h3 class="text-xl lg:text-2xl font-black text-primary leading-tight mb-3">Should You Choose Us?</h3>
                        <p class="text-sm font-medium text-slate-600 leading-relaxed">Rem aperiam eaque ipsa quae ab illo
                            inventore eritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                            quia voluptas sit aspernatur aut odit</p>
                        <div class="flex items-center gap-8 mt-8">
                            <img class="h-20 lg:h-24 w-20 lg:w-24 rounded-full overflow-hidden"
                                src="assets/img/success/success-author.jpg" alt="Author"/>
                            <img class="max-h-24 w-auto" src="assets/img/success/author-sig.png" alt="Author"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses -->
        <section class="py-12 lg:py-28">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="text-center space-y-4">
                    <h1 class="max-w-lg mx-auto text-xl sm:text-2xl lg:text-3xl font-black text-slate-800 capitalize">
                        The best courses on the internet we provide
                    </h1>
                    <p class="max-w-xs sm:max-w-xl mx-auto text-sm font-normal text-slate-500">
                        Sed ut perspiciatis unde omnis
                        iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab
                        illo inventore veritatis
                    </p>
                </div>
                <div class="flex w-full overflow-x-auto overflow-hidden lg:grid grid-cols-2 lg:grid-cols-5 gap-4 mt-10 lg:mt-20 snap-x hide-scrollbar">
                    <!-- Software Development -->
                    <div class="flex-shrink-0 w-full sm:w-4/12 lg:w-full lg:col-span-1 bg-primary text-white rounded-md text-center px-10 py-8 min-h-[250px] relative snap-center">
                        <span class="absolute top-4 right-4 h-10 w-10 rounded-full bg-blue-50 bg-opacity-10"></span>
                        <span class="absolute -bottom-2 -left-3 rotate-12 h-12 w-14 rounded-tl-3xl rounded-tr-3xl bg-blue-50 bg-opacity-10"></span>
                        <i class="fas fa-laptop-code text-4xl"></i>
                        <h1 class="text-xl font-bold my-5">Software Development</h1>
                        <a href="#"
                        class="bg-blue-100 hover:bg-white hover:text-primary bg-opacity-20 rounded-full px-5 py-3 text-base font-semibold transition-all duration-200">$399.99</a>
                    </div>
                    <!-- Graphics Design -->
                    <div class="flex-shrink-0 w-full sm:w-4/12 lg:w-full lg:col-span-1 bg-yellow-500 text-white rounded-md text-center px-10 py-8 min-h-[250px] relative snap-center">
                        <span class="absolute top-4 right-4 h-10 w-10 rounded-full bg-blue-50 bg-opacity-10"></span>
                        <span class="absolute -bottom-2 -left-3 rotate-12 h-12 w-14 rounded-tl-3xl rounded-tr-3xl bg-blue-50 bg-opacity-10"></span>
                        <i class="fas fa-layer-group text-4xl"></i>
                        <h1 class="text-xl font-bold my-5">Graphics Design</h1>
                        <a href="#"
                        class="bg-yellow-50 hover:bg-white hover:text-yellow-500 bg-opacity-20 rounded-full px-5 py-3 text-base font-semibold transition-all duration-200">$349.99</a>
                    </div>
                    <!-- Business Studies -->
                    <div class="flex-shrink-0 w-full sm:w-4/12 lg:w-full lg:col-span-1 bg-pink-500 text-white rounded-md text-center px-10 py-8 min-h-[250px] relative snap-center">
                        <span class="absolute top-4 right-4 h-10 w-10 rounded-full bg-blue-50 bg-opacity-10"></span>
                        <span class="absolute -bottom-2 -left-3 rotate-12 h-12 w-14 rounded-tl-3xl rounded-tr-3xl bg-blue-50 bg-opacity-10"></span>
                        <i class="fas fa-chart-line text-4xl"></i>
                        <h1 class="text-xl font-bold my-5">Business Studies</h1>
                        <a href="#"
                        class="bg-yellow-50 hover:bg-white hover:text-pink-500 bg-opacity-20 rounded-full px-5 py-3 text-base font-semibold transition-all duration-200">$499.99</a>
                    </div>
                    <!-- Language Development -->
                    <div class="flex-shrink-0 w-full sm:w-4/12 lg:w-full lg:col-span-1 bg-cyan-500 text-white rounded-md text-center px-10 py-8 min-h-[250px] relative snap-center">
                        <span class="absolute top-4 right-4 h-10 w-10 rounded-full bg-blue-50 bg-opacity-10"></span>
                        <span class="absolute -bottom-2 -left-3 rotate-12 h-12 w-14 rounded-tl-3xl rounded-tr-3xl bg-blue-50 bg-opacity-10"></span>
                        <i class="fas fa-chart-line far fa-flag text-4xl"></i>
                        <h1 class="text-xl font-bold my-5">Language Development</h1>
                        <a href="#"
                        class="bg-yellow-50 hover:bg-white hover:text-cyan-500 bg-opacity-20 rounded-full px-5 py-3 text-base font-semibold transition-all duration-200">$299.99</a>
                    </div>
                    <!-- Civil Engineering -->
                    <div class="flex-shrink-0 w-full sm:w-4/12 lg:w-full lg:col-span-1 bg-indigo-600 text-white rounded-md text-center px-10 py-8 min-h-[250px] relative snap-center">
                        <span class="absolute top-4 right-4 h-10 w-10 rounded-full bg-blue-50 bg-opacity-10"></span>
                        <span class="absolute -bottom-2 -left-3 rotate-12 h-12 w-14 rounded-tl-3xl rounded-tr-3xl bg-blue-50 bg-opacity-10"></span>
                        <i class="fas fa-cubes text-4xl"></i>
                        <h1 class="text-xl font-bold my-5">Civil Engineering</h1>
                        <a href="#"
                        class="bg-yellow-50 hover:bg-white hover:text-indigo-500 bg-opacity-20 rounded-full px-5 py-3 text-base font-semibold transition-all duration-200">$389.99</a>
                    </div>
                </div>


            </div>
        </section>
        <!-- Learning -->
        <section class="py-12 lg:py-28 bg-cover bg-center" style="background-image: url('assets/img/cta/cta-bg.jpg')">
            <div class="container mx-auto px-4 xl:px-0 text-center">
                <h1 class="text-2xl lg:text-5xl font-black text-white leading-tight mb-6 max-w-3xl mx-auto">Easiest Way To Learn
                    Everything</h1>
                <p class="max-w-2xl mx-auto text-sm font-medium text-gray-50 leading-relaxed">Sed ut perspiciatis unde omnis
                    iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab illo
                    inventore veritatis</p>
                <div class="flex gap-4 justify-center mt-10">
                    <a href="#"
                    class="bg-gray-200 hover:bg-white bg-opacity-30 px-3 lg:px-6 py-2 lg:py-4 rounded-md inline-flex gap-2 items-center text-sm text-white font-semibold hover:text-primary transition-all duration-500">
                        <i class="fas fa-book"></i>
                        <span>See Course</span>
                    </a>
                    <a href="#"
                    class="bg-gray-200 hover:bg-white bg-opacity-30 px-3 lg:px-6 py-2 lg:py-4 rounded-md inline-flex gap-2 items-center text-sm text-white font-semibold hover:text-primary transition-all duration-500">
                        <i class="fas fa-phone"></i>
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Latest Courses -->
        <section class="py-12 lg:py-28 bg-gray-100">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="text-center space-y-4">
                    <h1 class="max-w-lg mx-auto text-2xl lg:text-5xl font-black text-slate-800">Popular Courses</h1>
                    <p class="max-w-xl mx-auto text-sm font-normal text-slate-500">Sed ut perspiciatis unde omnis iste natus
                        error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab illo
                        inventore veritatis</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mt-20">
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                App Development
                            </p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-1.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                Mobile App Development
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-4 lg:py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-1.jpg" alt="author"/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">John Smith</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        Programmer</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                Data Science
                            </p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-2.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                Expert Data Science
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-2.jpg" alt=""/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">Wanda Maxima</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        Data Scientist</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                Programming</p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-3.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                Computer Programming
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-3.jpg" alt=""/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">William Differ</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        Programmer
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                3D Printing</p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-4.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                3D Blue Print Artist
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-4.jpg" alt=""/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">Shaown Jennifer</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        Business Man</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                Graphics</p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-5.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                Graphics Design, (UX/UI)
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-5.jpg" alt=""/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">Robert James</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        UI/UX</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white group">
                        <div class="h-48 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-white rounded-md px-2 py-1 text-sm font-medium text-slate-800">
                                Web App
                            </p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/latest-course/course-img-6.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-lg font-semibold text-slate-800 hover:text-primary transition-all duration-500 inline-block">
                                Web App Development
                            </a>
                            <div class="flex items-center justify-between flex-wrap">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">350</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-clock text-sm text-primary"></i>
                                    <span class="text-sm lg:text-base text-slate-700">2 hr 29 min</span>
                                </p>
                                <div class="flex items-start gap-1">
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                    <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 py-8 border-b border-gray-200">
                                <img class="h-14 w-14 rounded-full overflow-hidden"
                                    src="assets/img/latest-course/author-6.jpg" alt=""/>
                                <div class="flex-1">
                                    <h5 class="text-base font-semibold text-slate-700">Patricia Jerry</h5>
                                    <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5">
                                        Developer</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-4">
                                <p class="text-sm font-medium text-slate-700">Price <span class="text-primary">$250</span></p>
                                <a href="#"
                                class="text-sm font-medium text-slate-600 hover:text-primary transition-all duration-300">
                                    <i class="fas fa-tags text-primary"></i>
                                    <span>Get Enrolled</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="py-12 lg:py-28 bg-cover bg-center"
                style="background-image: url('assets/img/testimonial/testimonial-bg.jpg')">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="text-center">
                    <h1 class="text-2xl lg:text-5xl font-black text-white leading-tight mb-6 max-w-3xl mx-auto">What Parents
                        Say</h1>
                    <p class="max-w-2xl mx-auto text-sm font-medium text-gray-50 leading-relaxed">Sed ut perspiciatis unde omnis
                        iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab
                        illo inventore veritatis</p>
                </div>
                <div class="mt-24 lg:mt-32 testimonial">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides h-full w-full pt-12">
                            <li class="glide__slide">
                                <div class="bg-white rounded-lg px-6 lg:px-8 py-8 lg:py-10 relative">
                                    <img class="absolute -top-12 h-24 w-24 rounded-full overflow-hidden"
                                        src="assets/img/testimonial/author-1.jpg" alt=""/>
                                    <i class="fas fa-quote-right text-primary absolute -top-8 lg:-top-14 right-5 text-6xl lg:text-8xl"></i>
                                    <p class="text-xs lg:text-base font-medium text-slate-800 !leading-loose mt-10">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur
                                        cupiditate deserunt doloribus ea est iste magnam, magni non, odit quam quas quia
                                        quisquam rerum sapiente sit soluta.
                                    </p>
                                    <div class="flex justify-between items-end gap-4 mt-8">
                                        <div class="flex-1 space-y-1">
                                            <a href="#"
                                            class="block text-sm lg:text-lg font-semibold text-slate-700 hover:text-gray-900">
                                                Olivia Otila
                                            </a>
                                            <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5 uppercase">
                                                Housewife
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium">Good Study</p>
                                            <div class="flex items-start gap-1">
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="bg-white rounded-lg px-8 py-10 relative">
                                    <img class="absolute -top-12 h-24 w-24 rounded-full overflow-hidden"
                                        src="assets/img/testimonial/author-2.jpg" alt=""/>
                                    <i class="fas fa-quote-right text-primary absolute -top-8 lg:-top-14 right-5 text-6xl lg:text-8xl"></i>
                                    <p class="text-xs lg:text-base font-medium text-slate-800 !leading-loose mt-10">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur
                                        cupiditate deserunt doloribus ea est iste magnam, magni non, odit quam quas quia
                                        quisquam rerum sapiente sit soluta.
                                    </p>
                                    <div class="flex justify-between items-end gap-4 mt-8">
                                        <div class="flex-1 space-y-1">
                                            <a href="#"
                                            class="block text-sm lg:text-lg font-semibold text-slate-700 hover:text-gray-900">
                                                Hritesh Kumar
                                            </a>
                                            <p class="text-xs font-medium text-primary bg-primary-light rounded-full inline-block px-2.5 py-0.5 uppercase">
                                                Co-founder
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium">Good Study</p>
                                            <div class="flex items-start gap-1">
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="bg-white rounded-lg px-8 py-10 relative">
                                    <img class="absolute -top-12 h-24 w-24 rounded-full overflow-hidden"
                                        src="assets/img/testimonial/author-3.jpg" alt=""/>
                                    <i class="fas fa-quote-right text-primary absolute -top-8 lg:-top-14 right-5 text-6xl lg:text-8xl"></i>
                                    <p class="text-xs lg:text-base font-medium text-slate-800 !leading-loose mt-10">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur
                                        cupiditate deserunt doloribus ea est iste magnam, magni non, odit quam quas quia
                                        quisquam rerum sapiente sit soluta.
                                    </p>
                                    <div class="flex justify-between items-end gap-4 mt-8">
                                        <div class="space-y-1">
                                            <a href="#"
                                            class="block text-sm lg:text-lg font-semibold text-slate-700 hover:text-gray-900">
                                                Emma Watson
                                            </a>
                                            <p class="text-xs font-medium text-primary bg-primary-light rounded-full block px-2.5 py-0.5 uppercase">
                                                Housewife
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium">Good Study</p>
                                            <div class="flex items-start gap-1">
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                                <i class="fas fa-star text-xs lg:text-sm text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- We Do -->
        <section class="pt-12 lg:pt-28 bg-gray-100">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="text-center space-y-4">
                    <h1 class="max-w-lg mx-auto text-2xl lg:text-5xl font-black text-slate-800">Our Work</h1>
                    <p class="max-w-xs lg:max-w-xl mx-auto text-sm font-normal text-slate-500">Sed ut perspiciatis unde omnis
                        iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab
                        illo inventore veritatis</p>
                </div>
                <div class="sm:flex sm:flex-col lg:grid grid-cols-2 gap-8 mt-10 lg:mt-20">
                    <div class="col-span-1 space-y-8 lg:space-y-16 pb-16 order-2 lg:order-1">
                        <div class="flex lg:items-center gap-5 lg:gap-10">
                            <div class="bg-primary-light h-16 lg:h-36 w-16 lg:w-36 rounded-full flex items-center justify-center">
                                <i class="fas fa-trophy text-amber-500 text-2xl lg:text-6xl"></i>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg lg:text-2xl font-semibold text-amber-500 mb-2">Prize Giving Ceremony</h2>
                                <p class="lg:max-w-xl mx-auto text-sm font-normal text-slate-500 leading-loose">Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium
                                    totam rem aperiam eaque ipsa quae ab illo inventore veritatis</p>
                            </div>
                        </div>
                        <div class="flex lg:items-center gap-5 lg:gap-10">
                            <div class="bg-indigo-100 h-16 lg:h-36 w-16 lg:w-36 rounded-full flex items-center justify-center">
                                <i class="far fa-file-alt text-cyan-500 text-2xl lg:text-6xl"></i>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg lg:text-2xl font-semibold text-cyan-500 mb-2">Giving Certifications</h2>
                                <p class="lg:max-w-xl mx-auto text-sm font-normal text-slate-500 leading-loose">Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium
                                    totam rem aperiam eaque ipsa quae ab illo inventore veritatis</p>
                            </div>
                        </div>
                        <div class="flex lg:items-center gap-5 lg:gap-10">
                            <div class="bg-pink-100 h-16 lg:h-36 w-16 lg:w-36 rounded-full flex items-center justify-center">
                                <i class="fas fa-book text-pink-500 text-2xl lg:text-6xl"></i>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg lg:text-2xl font-semibold text-pink-500 mb-2">E - Learning Program</h2>
                                <p class="lg:max-w-xl mx-auto text-sm font-normal text-slate-500 leading-loose">Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lauda ntium
                                    totam rem aperiam eaque ipsa quae ab illo inventore veritatis</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:flex col-span-1 flex-col justify-end order-1 lg:order-2">
                        <img class="w-7/12 lg:w-full mx-auto max-h-[600px] object-contain" src="assets/img/about/about-img.png"
                            alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan -->
        <section class="py-12 lg:py-28 bg-cover bg-center" style="background-image: url('assets/img/price/price-bg.jpg')">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="text-center">
                    <h1 class="text-2xl lg:text-5xl font-black text-white leading-tight mb-6 max-w-3xl mx-auto">
                        Our Pricing
                    </h1>
                    <p class="max-w-2xl mx-auto text-sm font-medium text-gray-50 leading-relaxed">Sed ut perspiciatis unde omnis
                        iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae ab
                        illo inventore veritatis</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10 lg:mt-20">
                    <div class="col-span-1 bg-white px-4 lg:px-6 py-8 lg:py-14">
                        <div class="text-center">
                            <p class="text-lg lg:text-xl font-medium text-slate-500 mb-3">Basic Plan</p>
                            <h1 class="text-4xl lg:text-6xl font-medium text-emerald-600 mb-5">$24.99</h1>
                            <p class="text-sm font-semibold text-red-500 bg-red-300 bg-opacity-40 rounded-md inline-block px-2 py-1 mb-5">
                                SAVE 25%</p>
                            <ul class="space-y-4">
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Business Study</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Web Development</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> Graphic Design
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> E - Learning
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Language Study</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Civil Engineering</li>
                            </ul>
                            <a href="#"
                            class="inline-flex items-center gap-2 text-sm text-white bg-emerald-600 py-2 lg:py-3 px-4 lg:px-6 uppercase rounded-md border-2 border-transparent hover:border-emerald-600 hover:bg-white hover:text-emerald-600 transition-all duration-500 mt-5">
                                <i class="fas fa-book"></i>
                                <span>Join Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white px-4 lg:px-6 py-8 lg:py-14">
                        <div class="text-center">
                            <p class="text-lg lg:text-xl font-medium text-slate-500 mb-3">Standard Plan</p>
                            <h1 class="text-4xl lg:text-6xl font-medium text-primary mb-5">$49.99</h1>
                            <p class="text-sm font-semibold text-red-500 bg-red-300 bg-opacity-40 rounded-md inline-block px-2 py-1 mb-5">
                                SAVE 45%</p>
                            <ul class="space-y-4">
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Business Study</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Web Development <span
                                        class="bg-red-500 text-white text-sm px-2 py-1 rounded-md ml-1">New</span></li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> Graphic Design
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> E - Learning
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Language Study</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Civil Engineering</li>
                            </ul>
                            <a href="#"
                            class="inline-flex items-center gap-2 text-sm text-white bg-primary py-2 lg:py-3 px-4 lg:px-6 uppercase rounded-md border-2 border-transparent hover:border-primary hover:bg-white hover:text-primary transition-all duration-500 mt-5">
                                <i class="fas fa-book"></i>
                                <span>Join Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white px-6 py-14">
                        <div class="text-center">
                            <p class="text-xl font-medium text-slate-500 mb-3">Premium Plan</p>
                            <h1 class="text-4xl lg:text-6xl font-medium text-blue-600 mb-5">$99.99</h1>
                            <p class="text-sm font-semibold text-red-500 bg-red-300 bg-opacity-40 rounded-md inline-block px-2 py-1 mb-5">
                                SAVE 59%</p>
                            <ul class="space-y-4">
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Business Study <span
                                        class="bg-red-500 text-white text-sm px-2 py-1 rounded-md ml-1">New</span></li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Web Development <span
                                        class="bg-red-500 text-white text-sm px-2 py-1 rounded-md ml-1">New</span></li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> Graphic Design
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500"><span
                                        class="text-primary">Advanced</span> E - Learning
                                </li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Basic Language Study</li>
                                <li class="text-sm lg:text-lg font-medium text-gray-500">Civil Engineering</li>
                            </ul>
                            <a href="#"
                            class="inline-flex items-center gap-2 text-sm text-white bg-blue-600 py-2 lg:py-3 px-4 lg:px-6 uppercase rounded-md border-2 border-transparent hover:border-blue-600 hover:bg-white hover:text-blue-600 transition-all duration-500 mt-5">
                                <i class="fas fa-book"></i>
                                <span>Join Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our News -->
        <section class="py-12 lg:py-28 bg-slate-100">
            <div class="container mx-auto px-4 xl:px-0">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-4 space-y-4 text-center lg:text-left">
                        <h1 class="max-w-lg mx-auto text-2xl lg:text-4xl font-black text-slate-800">Our Blogs</h1>
                        <p class="max-w-xs mx-auto lg:mx-0 text-sm font-normal text-slate-500">Sed ut perspiciatis unde omnis
                            iste natus error sit voluptatem accusantium doloremque lauda ntium totam rem aperiam eaque ipsa quae
                            ab illo inventore veritatis</p>
                        <a href="#"
                        class="hidden lg:inline-flex items-center gap-2 text-sm hover:text-white uppercase hover:bg-primary py-2 lg:py-3 px-4 lg:px-6 rounded-md border-2 border-transparent border-primary bg-white text-primary transition-all duration-500 mt-5">
                            <i class="fas fa-book"></i>
                            <span>See More</span>
                        </a>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white group">
                        <div class="h-52 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-primary rounded-md px-2 py-1 text-sm font-medium text-white">
                                Design</p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/news/news-img-1.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-base lg:text-xl font-semibold text-slate-600 hover:text-primary transition-all duration-500 inline-block">
                                How to Choose Colors for your website design
                            </a>
                            <div class="flex items-center flex-wrap gap-4 gap-y-2">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700">Jhon Doe</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-calendar-alt text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700"> 05 July 2022</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-comments text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700">(10)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white group">
                        <div class="h-52 lg:h-64 w-full relative overflow-hidden">
                            <p class="absolute top-4 left-4 z-10 bg-red-500 rounded-md px-2 py-1 text-sm font-medium text-white">
                                Education
                            </p>
                            <img class="h-full w-full group-hover:scale-110 transition-all duration-500"
                                src="assets/img/news/news-img-2.jpg" alt=""/>
                        </div>
                        <div class="px-4 lg:px-8 py-4 lg:py-6 space-y-2">
                            <a href="#"
                            class="text-base lg:text-xl font-semibold text-slate-600 hover:text-primary transition-all duration-500 block capitalize">
                                How much it cost for higher study in Australia
                            </a>
                            <div class="flex items-center flex-wrap gap-4 gap-y-2">
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-user text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700">Jhon Doe</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-calendar-alt text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700"> 05 July 2019</span>
                                </p>
                                <p class="font-medium flex items-center gap-2">
                                    <i class="far fa-comments text-sm text-primary"></i>
                                    <span class="text-sm text-slate-700">(10)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 text-center lg:hidden">
                        <a href="#"
                        class="inline-flex items-center gap-2 text-sm hover:text-white uppercase hover:bg-primary py-2 lg:py-3 px-4 lg:px-6 rounded-md border-2 border-transparent border-primary bg-white text-primary transition-all duration-500">
                            <i class="fas fa-book"></i>
                            <span>See More</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Partners -->
        <section class="py-16 lg:py-28 bg-white">
            <div class="container lg:max-w-5xl mx-auto px-4 lg:px-0">
                <div class="partner">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides h-full w-full">
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-1.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-2.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-3.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-4.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-5.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-6.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-2.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-3.png" alt=""/>
                            </li>
                            <li class="h-24 w-20 lg:h-auto lg:w-auto flex-shrink-0 max-w-[7rem]">
                                <img class="h-full w-full" src="assets/img/brand/brand-img-5.png" alt=""/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<!-- Header Quick Info -->
<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    
    
    export default defineComponent({
        components: {
            Head,
            Link,
            
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>

<style scoped>

</style>
