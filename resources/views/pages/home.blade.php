<x-app-layout>
    <!-- Content Sections -->
    <div class="relative">
        <!-- Hero Section -->
        <div class="min-h-[75vh] flex items-center relative">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-7 max-w-lg">
                        <h1 class="text-3xl tracking-tight font-extrabold sm:text-4xl">
                            <span class="block text-red-800 text-3xl">Web Design & Branding</span>
                            <span class="block text-blue-800 text-7xl mt-1">
                                <span class="bg-gradient-to-br from-blue-700 to-green-700 font-bold text-transparent bg-clip-text">Refined</span><span class="text-red-800">.</span>
                            </span>
                        </h1>
                        <p class="mt-2 text-xl font-bold text-blue-900  max-w-lg">
                            Comprehensive digital solutions - from websites to branding, marketing to design.
                            Your one-stop digital partner for growth and success.
                        </p> 

                        <!-- Floating SVGs -->
                        <div class="absolute top-20 right-[55%] animate-float-slow">
                            <svg class="w-6 h-6 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                            </svg>
                        </div>
                        <div class="absolute top-28 right-[40%] animate-float-medium">
                            <svg class="w-4 h-4 text-blue-75" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                            </svg>
                        </div>
                        <div class="absolute top-36 right-[65%] animate-float-fast">
                            <svg class="w-3 h-3 text-blue-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                            </svg>
                        </div>

                        <style>
                            @keyframes float-slow {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-10px) rotate(5deg) scale(1.1); }
                            }
                            @keyframes float-medium {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-8px) rotate(-5deg) scale(1.15); }
                            }
                            @keyframes float-fast {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-6px) rotate(3deg) scale(1.2); }
                            }
                            .animate-float-slow {
                                animation: float-slow 12s ease-in-out infinite;
                            }
                            .animate-float-medium {
                                animation: float-medium 10s ease-in-out infinite;
                            }
                            .animate-float-fast {
                                animation: float-fast 8s ease-in-out infinite;
                            }
                        </style>
                        <div class="mt-6 sm:flex sm:justify-center gap-x-4 lg:justify-start">
                            <div class="rounded-md">
                                <a href="{{ route('services') }}" 
                                   class="group relative w-full flex items-center justify-center px-6 py-2 text-sm font-medium rounded-bl-lg rounded-tr-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-3 md:text-base md:px-8 shadow-[-4px_4px_0px_0px_rgba(56,0,0,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(125,255,0,0.4)] transform hover:translate-x-0.5 hover:-translate-y-0.5">
                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-600 to-green-600"></span>
                                    <span class="absolute inset-0 bg-gradient-to-br from-red-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                    <span class="relative">Explore Services</span>
                                </a>
                            </div>
                            <div class="rounded-md">
                                <a href="{{ route('services') }}" 
                                   class="group relative w-full flex items-center justify-center px-6 py-2 text-sm font-medium rounded-bl-lg rounded-tr-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-3 md:text-base md:px-8 shadow-[-4px_4px_0px_0px_rgba(56,0,0,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(125,255,0,0.4)] transform hover:translate-x-0.5 hover:-translate-y-0.5">
                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-600 to-green-600"></span>
                                    <span class="absolute inset-0 bg-gradient-to-br from-red-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                    <span class="relative">Explore Services</span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="hidden h-full lg:block lg:col-span-5">
                        <div class="computer-screen">
                            <div class="screen-container">
                                <div class="screen-layer bg-gradient-to-r from-red-25 to-red-100 opacity-50 bg-gradient"></div>
                                <div class="screen-layer bg-image" style="background-image: url('{{ asset('images/gradient-bg.webp') }}'); background-size: cover; background-position: center;"></div>
                                <div class="screen-layer header scale-[0.80] origin-top-left">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="flex justify-between h-8">
                                            <div class="flex">
                                                <div class="screen-layer screen-logo flex-shrink-0 flex items-center">
                                                    <a href="{{ route('home') }}">
                                                        <x-application-logo class="block h-5 w-auto fill-current text-gray-600" />
                                                    </a>
                                                </div>
                                                <div class="screen-layer screen-nav-links hidden sm:ml-4 sm:flex sm:space-x-4">
                                                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xs font-medium leading-4 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        Home
                                                    </a>
                                                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xs font-medium leading-4 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        About  
                                                    </a>
                                                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xs font-medium leading-4 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                        Contact
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="items-start flex gap-8 body-container flex items-center w-full h-full mx-auto scale-[0.6] origin-center">
                                    <div class="w-2/3">
                                        <h1 class="text-3xl tracking-tight font-extrabold sm:text-4xl">
                                            <span class="screen-layer screen-header-1 block text-red-800 text-xs">Web Design & Branding</span>
                                            <span class="screen-layer screen-header-2 block text-blue-800 text-3xl mt-1">
                                                <span class="bg-gradient-to-br from-blue-700 to-green-700 font-bold text-transparent bg-clip-text">Refined</span><span class="text-red-800">.</span>
                                            </span>
                                        </h1>
                                        <p class="screen-layer screen-blurb mt-2 text-xs font-bold text-blue-900 w-full">
                                            Comprehensive digital solutions - from websites to branding, marketing to design.
                                            Your one-stop digital partner for growth and success.
                                        </p>
                                        <div class="mt-6 sm:flex sm:justify-start gap-x-4 w-2/3 gap-0">
                                            <div class="screen-layer screen-button-1 rounded-md w-1/2">
                                                <a href="{{ route('services') }}" 
                                                class="group relative w-full flex items-center justify-center px-1 py-1 text-sm font-medium rounded-bl-lg rounded-tr-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-1.5 md:text-xs shadow-[-4px_4px_0px_0px_rgba(56,0,0,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(125,255,0,0.4)] transform hover:translate-x-0.5 hover:-translate-y-0.5">
                                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-600 to-green-600"></span>
                                                    <span class="absolute inset-0 bg-gradient-to-br from-red-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                                    <span class="relative whitespace-nowrap text-xs scale-75">Explore Services</span>
                                                </a>
                                            </div>
                                            <div class="screen-layer screen-button-2 rounded-md w-1/2">
                                                <a href="{{ route('services') }}" 
                                                class="group relative w-full flex items-center justify-center px-1 py-1 text-sm font-medium rounded-bl-lg rounded-tr-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-1.5 md:text-xs shadow-[4px_4px_0px_0px_rgba(0,125,0,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(0,255,0,0.4)] transform hover:translate-x-0.5 hover:-translate-y-0.5">
                                                    <span class="absolute inset-0 bg-gradient-to-br from-green-600 to-blue-600"></span>
                                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-600 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                                    <span class="relative whitespace-nowrap text-xs scale-75">Explore Services</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="screen-layer screen-image w-1/2 h-auto flex items-center justify-center">
                                        <img src="{{ asset('images/imac.png') }}" alt="iMac" class="w-full h-auto object-contain">
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <style>
                            .computer-screen {
                                perspective: 1000px;
                            }
                        
                            .screen-container {
                                position: relative;
                                transform-style: preserve-3d;
                                transition: transform 0.5s;
                                width: 500px;
                                height: 300px;
                            }
                            .screen-container:hover {
                                transform: rotateX(10deg) rotateY(-10deg);
                            }
                            .screen-layer {
                                transition: transform 0.5s;
                            }
                            .screen-container:hover .screen-layer {
                                transform: translatex(20px) translatey(20px) translateZ(10px) scale(1.05) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.bg-gradient {
                                transform: translatex(20px) translatey(20px) translateZ(20px) scale(1.1) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.bg-image {
                                transform: translatex(-20px) translatey(20px) translateZ(30px) scale(1.2) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.screen-blurb {
                                transform: translatex(-60px) translatey(60px) translateZ(40px) scale(1.5) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.screen-header-1 {
                                transform: translatex(-60px) translatey(-30px) translateZ(50px) scale(2.25) skew(-1deg, -1deg);
                            }                            
                            .screen-container:hover .screen-layer.screen-button-1 {
                                transform: translatex(-120px) translatey(80px) translateZ(60px) scale(1.75) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.screen-button-2 {
                                transform: translatex(-60px) translatey(80px) translateZ(60px) scale(1.75) skew(-1deg, -1deg);
                            }               
                            .screen-container:hover .screen-layer.screen-nav-links {
                                transform: translatex(0px) translatey(0px) translateZ(0px) scale(2.0) skew(-1deg, -1deg);
                            }                           
                            .screen-container:hover .screen-layer.screen-image {
                                transform: translatex(60px) translatey(20px) translateZ(20px) scale(1.75) skew(-1deg, -1deg);
                            }
                            .screen-container:hover .screen-layer.screen-logo {
                                transform: translatex(-120px) translatey(0px) translateZ(0px) scale(2.8);
                            }                  
                            .screen-container:hover .screen-layer.screen-header-2 {
                                transform: translatex(-40px) translatey(10px) translateZ(100px) scale(3.0) skew(-1deg, -1deg);
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Overview -->
        <div class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="section-border rounded-2xl p-12">
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold text-deep-blue sm:text-4xl">
                            Complete Digital Solutions
                        </h2>
                        <p class="mt-4 text-lg text-gray-600 max-w-3xl lg:mx-auto">
                            Every service you need to establish, grow, and optimize your digital presence
                        </p>
                    </div>

                    <div class="mt-20 grid grid-cols-1 gap-12 lg:grid-cols-2">
                        <a href="{{ route('services') }}#web-development" 
                           class="group relative bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                            <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-pastel-blue opacity-50 rounded-full blur-lg group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative">
                                <div class="text-deep-blue mb-4">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Web Solutions</h3>
                                <p class="mt-2 text-gray-600">From simple business websites to complex web applications. Development, maintenance, and optimization.</p>
                            </div>
                        </a>

                        <a href="{{ route('services') }}#branding" 
                           class="group relative bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                            <div class="absolute bottom-0 left-0 -ml-4 -mb-4 w-24 h-24 bg-pastel-red opacity-50 rounded-full blur-lg group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative">
                                <div class="text-deep-red mb-4">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Brand & Identity</h3>
                                <p class="mt-2 text-gray-600">Strategic brand development, visual identity design, and brand voice creation.</p>
                            </div>
                        </a>

                        <a href="{{ route('services') }}#marketing" 
                           class="group relative bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                            <div class="absolute top-0 left-0 -ml-4 -mt-4 w-24 h-24 bg-pastel-green opacity-50 rounded-full blur-lg group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative">
                                <div class="text-deep-blue mb-4">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Digital Marketing</h3>
                                <p class="mt-2 text-gray-600">SEO optimization, content strategy, social media management, and digital advertising.</p>
                            </div>
                        </a>

                        <a href="{{ route('services') }}#product-design" 
                           class="group relative bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                            <div class="absolute bottom-0 right-0 -mr-4 -mb-4 w-24 h-24 bg-pastel-blue opacity-50 rounded-full blur-lg group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative">
                                <div class="text-deep-blue mb-4">
                                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Product Strategy</h3>
                                <p class="mt-2 text-gray-600">User experience design, product strategy, and digital product development.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Work -->
        <div class="py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="section-border rounded-2xl p-12">
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            Featured Work
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Some of our recent projects
                        </p>
                    </div>

                    <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="group relative bg-gray-800/50 backdrop-blur-sm rounded-lg overflow-hidden">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-800">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                                     alt="E-commerce Platform" 
                                     class="h-full w-full object-cover object-center transition-opacity group-hover:opacity-75">
                                <div class="absolute inset-0 bg-gray-900 opacity-0 group-hover:opacity-75 transition-opacity"></div>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                    <span class="text-white text-sm font-medium">View Project</span>
                                </div>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-white">Modern E-commerce Platform</h3>
                            <p class="text-sm text-gray-300">Web Development</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ route('portfolio') }}" 
                           class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-blue-400 hover:bg-blue-500">
                            View All Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="section-border rounded-2xl p-12">
                    <div class="lg:text-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            Why Choose PixelCraft
                        </h2>
                        <p class="mt-4 max-w-2xl text-lg text-gray-300 lg:mx-auto">
                            Small team, big impact. We bring enterprise-level expertise with startup agility.
                        </p>
                    </div>

                    <div class="mt-20">
                        <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="flex bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-400 text-black">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-white">Direct Communication</h3>
                                    <p class="mt-2 text-gray-300">
                                        Work directly with our core team. No account managers, no bureaucracy.
                                    </p>
                                </div>
                            </div>

                            <div class="flex bg-gray-800/50 backdrop-blur-sm p-6 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-400 text-black">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-white">Fast Execution</h3>
                                    <p class="mt-2 text-gray-300">
                                        Small team means quick decisions and faster implementation of your ideas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="relative">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-800/50 backdrop-blur-sm rounded-lg shadow-xl p-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            <span class="block">Ready to get started?</span>
                            <span class="block text-blue-400">Let's build something great.</span>
                        </h2>
                        <div class="mt-8 lg:mt-0 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black bg-blue-400 hover:bg-blue-500">
                                Contact Us
                            </a>
                            <a href="{{ route('portfolio') }}" 
                               class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">
                                View Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 