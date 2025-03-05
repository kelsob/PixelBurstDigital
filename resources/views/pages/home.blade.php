<x-app-layout>
    <!-- Content Sections -->
    <div class="relative">
        <!-- Hero Section -->
        <div class="min-h-[50vh] flex items-center relative">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-7 max-w-lg">
                        <h1 class="text-3xl tracking-tight font-extrabold sm:text-4xl">
                            <span class="block text-red-800 text-3xl">Web Design & Branding</span>
                            <span class="block text-blue-800 text-7xl mt-1">
                                <span class="bg-gradient-to-br from-blue-700 to-green-700 font-bold text-transparent bg-clip-text">Refined</span><span class="text-red-800">.</span>
                            </span>
                        </h1>
                        <p class="mt-2 text-xl font-bold text-blue-900 max-w-lg">
                            Comprehensive digital solutions - from websites to branding, marketing to design.
                            Your one-stop digital partner for growth and success.
                        </p> 

                        <!-- Floating SVGs -->
                        <div class="absolute top-20 right-[65%] animate-float-fast">
                            <svg class="w-5 h-5 text-blue-700 opacity-100" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="12"/>
                            </svg>
                        </div>
                        <div class="absolute top-6 right-[53%] animate-float-fast">
                            <svg class="w-14 h-14 text-green-500 opacity-75" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="5"/>
                            </svg>
                        </div>
                        <div class="absolute top-4 right-[34%] animate-float-fast">
                            <svg class="w-24 h-24 text-red-600 opacity-50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 40 40">
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                        </div>
                        <div class="absolute -top-24 right-[0%] animate-float-fast">
                            <svg class="w-48 h-48 text-blue-800 opacity-15" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45"/>
                            </svg>
                        </div>
                        <style>
                            @keyframes float-slow {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-2px) rotate(5deg) scale(1.025); }
                            }
                            @keyframes float-medium {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-2px) rotate(-5deg) scale(1.05); }
                            }
                            @keyframes float-fast {
                                0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
                                50% { transform: translateY(-2px) rotate(3deg) scale(1.075); }
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
                        <div class="mt-6 sm:flex sm:justify-center gap-x-6 lg:justify-start">
                            <div class="rounded-md">
                                <a href="{{ route('services') }}" 
                                   class="group relative w-full flex items-center justify-center px-6 py-2 text-sm font-medium rounded-bl-lg rounded-tr-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-3 md:text-base md:px-8 shadow-[4px_4px_0px_0px_rgba(56,0,0,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(255,125,0,0.4)] transform hover:-translate-x-0.5 hover:-translate-y-0.5">
                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-600 to-green-600"></span>
                                    <span class="absolute inset-0 bg-gradient-to-br from-blue-500 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                    <span class="relative">Explore Services</span>
                                </a>
                            </div>
                            <div class="rounded-md">
                                <a href="{{ route('services') }}" 
                                   class="group relative w-full flex items-center justify-center px-6 py-2 text-sm font-medium rounded-br-lg rounded-tl-lg text-blue-25 overflow-hidden transition-all duration-300 md:py-3 md:text-base md:px-8 shadow-[-4px_4px_0px_0px_rgba(56,0,0,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(255,125,0,0.4)] transform hover:translate-x-0.5 hover:-translate-y-0.5">
                                    <span class="absolute inset-0 bg-gradient-to-br from-green-600 to-blue-600"></span>
                                    <span class="absolute inset-0 bg-gradient-to-br from-green-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                    <span class="relative">Our Work</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="perspective-container group block relative lg:mt-0 mt-8">
                        <!-- Base iMac Image -->
                        <img src="{{ asset('images/imac-2.png') }}" alt="iMac" class="imac-bg w-full w-auto relative z-0">
                        
                        <!-- Screen Content positioned absolutely over the iMac screen -->
                        <div class="computer-screen absolute top-[6.4%] left-[10.2%] w-[83.9%] h-[49%] z-10 flex flex-col">
                            <img src="{{ asset('images/mac_bg.jpg') }}" alt="Mac background" class="absolute inset-0 w-full h-full object-cover">
                            <div class="screen-container">
                                <!-- Mac toolbar -->
                                <img src="{{ asset('images/toolbar.webp') }}" alt="Mac toolbar" class="screen-layer toolbar-img w-full h-8 object-contain -mt-3.5">
                                <img src="{{ asset('images/browser-img.png') }}" alt="Chrome browser" class="screen-layer chrome-img absolute inset-0 top-[8%] left-[8%] w-5/6 h-[80.2%] object-fill">

                                <!-- Main content -->
                                <div class="screen-layer preserve-3d flex-1 flex items-center justify-between px-6 pr-10 py-4">
                                    <!-- Text content with background card -->
                                    <div class="relative w-5/6 p-4 flex flex-col">
                                        <div class="relative">
                                            <div class="screen-layer header-text-wrapper-1 absolute top-1">
                                                <span class="font-extrabold bg-gradient-to-br from-red-200 to-green-100 text-blue-200 bg-clip-text text-[10px]">YOUR BRAND,</span>
                                            </div>
                                            <div class="screen-layer header-text-wrapper-2 absolute top-6 left-2">
                                                <span class="relative inline-block animate-pulse">
                                                    <span class="absolute -inset-1 rounded-lg bg-gradient-to-r from-pink-600 via-red-500 to-yellow-500 blur-md"></span>
                                                    <span class="relative font-bold bg-gradient-to-br from-green-200 to-blue-200 text-green-400 bg-clip-text whitespace-nowrap">Bursting to Life.</span>
                                                </span>
                                            </div>
                                            <h2 class="screen-layer header-box text-sm h-12 w-full font-extrabold mb-1 mt-2 text-left bg-gradient-to-br from-red-800 to-blue-600 backdrop-blur-sm rounded-lg p-2 pr-4"></h2>
                                            <p class="screen-layer text-blurb text-[8px] font-bold text-blue-400 pl-2 pt-1 pb-2 pr-2 whitespace-nowrap">Ignite Your Digital Presence.</p>
                                            <button class="float-right screen-layer screen-button relative text-[8px] font-bold text-white px-3 py-1 rounded-bl-lg rounded-tr-lg overflow-hidden transition-all duration-500 ease-in-out shadow-[2px_2px_0px_0px_rgba(34,197,94,0.2)] hover:shadow-[2px_2px_0px_0px_rgba(22,163,74,0.5)] hover:scale-105">
                                                <span class="absolute inset-0 bg-gradient-to-br from-purple-600 via-blue-500 to-green-400"></span>
                                                <span class="relative">Get Started</span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Image section with decorative cards -->
                                    <div class="screen-layer preserve-3d relative w-1/2 h-full flex items-center justify-center">
                                        <!-- Decorative background cards -->
                                        <div class="screen-layer decorative-box-2 absolute -bottom-5 w-16 h-16 bg-green-500/20 rounded-lg -rotate-3 animate float-slow"></div>
                                        <div class="screen-layer decorative-box-1 absolute -bottom-5 w-16 h-16 bg-green-500/20 rounded-lg -rotate-3 animate float-slow"></div>

                                        <!-- Main image container -->
                                        <img src="{{ asset('images/pixelburst-logo.Webp') }}" alt="Chrome browser" class="brand-img transition-all absolute  object-fill">
                                    </div>
                                </div>

                                <!-- Mac dock -->
                                <img src="{{ asset('images/dock.png') }}" alt="Mac dock" class="screen-layer dock-img object-contain mx-auto absolute bottom-1 transform">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .perspective-container {
                perspective: 800px;
                perspective-origin: 218px 142px;
                width: 400px;
                height: 400px;
                transform-style: preserve-3d;
            }

            .computer-screen {
                transform-style: preserve-3d;
                transform: rotateY(-16deg) translateZ(0px) translateY(0px);
                will-change: transform;
                transition: transform 1.5s ease-out;
            }

            .screen-container {
                perspective: 800px;
                position: relative;
                transform-style: preserve-3d;
                transition: transform 1.5s;
                width: 100%;
                height: 100%;
            }

            .screen-layer {
                transition: transform 1.5s;
                transform-style: preserve-3d;
                transform: translateZ(10);
                will-change: transform;
            }

            .imac-bg {
                transform: translateZ(-48px) scale(1.05) translateX(-2px);
            }

            .screen-container:hover .brand-img {
                transform: translateX(-0px) translateY(0px) translateZ(120px) scale(1.0);
                transition: transform 3.5s ease-out;

            }
            .screen-container:hover .dock-img {
                transform: translateX(0px) translateZ(10px);
            }
            .screen-container:hover .toolbar-img {
                transform: translateX(0px) translateY(-0px) translateZ(10px) scale(1.0);
            }

            .screen-container:hover .chrome-img {
                transform: translateX(0px) translateY(0px) translateZ(30px) scale(1.0);
                transition: transform 2.5s ease-out;
            }

            .screen-container:hover .screen-button {
                transform: translateX(-20px) translateY(0px) translateZ(80px) scale(1.0);
                transition: transform 3.0s ease-out;
            }


            .screen-container:hover .decorative-box-1 {
                transform: translateX(-6px) translateY(0px) translateZ(80px) scale(1.0);
                transition: transform 3.5s ease-out;

            }

            .screen-container:hover .decorative-box-2 {
                transform: translateX(-8px) translateY(0px) translateZ(100px) scale(1.0);
                transition: transform 3.5s ease-out;

            }

            .screen-container:hover .header-box {
                transform: translateX(0px) translateY(0px) translateZ(120px) scale(1.0);
            }

            .screen-container:hover .header-text-wrapper-1 {
                transform: translateX(0px) translateY(6px) translateZ(170px) scale(1.0);
                transition: transform 3.5s ease-out;
            }

            .screen-container:hover .header-text-wrapper-2 {
                transform: translateX(0px) translateY(3px) translateZ(170px) scale(1.0);
                transition: transform 3.5s ease-out;
            }

            .screen-container:hover .text-blurb {
                transform: translateX(0px) translateY(0px) translateZ(120px) scale(1.0);
                transition: transform 3.0s ease-out;

            }

            .header-text-wrapper-1 {
                transform: translateX(0) translateY(0) translateZ(0px);
                transition: transform 4.5s ease-out;
                z-index: 2;
                display: inline-block;
                text-align: right;
                right: 8px;
            }

            .header-text-wrapper-2 {
                transform: translateX(0) translateY(0px) translateZ(0px);
                transition: transform 3.0s ease-out; 
                z-index: 2;
            }

            .header-box {
                transform: translateX(0) translateY(0) translateZ(0);
                transition: transform 3.0s ease-out;
                z-index: 1;
            }


            /* Add transform-style: preserve-3d to the inner relative div */
            .relative {
                transform-style: preserve-3d;
            }

        </style>
    </div>

    <!-- Web Design & Development Section -->
    <div class="py-12 relative z-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-blue-800 to-green-400 text-transparent bg-clip-text sm:text-4xl">
                    Web Design & Development
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-blue-900 lg:mx-auto">
                    💡 Custom websites for businesses of all sizes—whether you're starting fresh or need an upgrade.
                </p>
            </div>

            <div class="mt-4">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-8">
                    <div class="relative bg-gradient-to-br from-blue-500 to-green-500 p-8 rounded-lg shadow-[-6px_6px_0_0_rgba(59,130,246,0.3)] hover:shadow-[-8px_8px_0_0_rgba(5,150,105,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-blue-50">Website Builder Customization</h3>
                            <p class="mt-2 text-blue-100">For those who started with Wix, WordPress, etc. and need expert tweaks.</p>
                        </div>
                    </div>

                    <div class="relative bg-gradient-to-tl from-red-500 to-blue-500 p-8 rounded-lg shadow-[6px_6px_0_0_rgba(239,68,68,0.3)] hover:shadow-[8px_8px_0_0_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-100" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-red-50">Modern, Built-from-Scratch Websites</h3>
                            <p class="mt-2 text-red-100">For those who need a fully custom web experience.</p>
                        </div>
                    </div>

                    <div class="relative bg-gradient-to-br from-green-500 to-red-500 p-8 rounded-lg shadow-[-6px_6px_0_0_rgba(5,150,105,0.3)] hover:shadow-[-8px_8px_0_0_rgba(239,68,68,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-green-50">Website Migration & Modernization</h3>
                            <p class="mt-2 text-green-100">Moving old sites to better platforms, upgrading UI/UX, and improving performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Branding & Digital Identity Section -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-red-800 to-blue-400 text-transparent bg-clip-text sm:text-4xl">
                    Branding & Digital Identity
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-red-600 lg:mx-auto">
                    🎨 Professional branding and visuals to make your business stand out.
                </p>
            </div>

            <div class="mt-4">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">
                    <div class="relative bg-gradient-to-br from-blue-600 via-purple-500 to-red-500 p-8 rounded-lg shadow-[6px_6px_0_0_rgba(59,130,246,0.3)] hover:shadow-[8px_8px_0_0_rgba(147,51,234,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-blue-50">3D Product Visualization</h3>
                            <p class="mt-2 text-blue-100">Blender-powered product renders, mockups, and animations.</p>
                        </div>
                    </div>

                    <div class="relative bg-gradient-to-tl from-green-500 via-blue-500 to-purple-500 p-8 rounded-lg shadow-[-6px_6px_0_0_rgba(5,150,105,0.3)] hover:shadow-[-8px_8px_0_0_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-green-50">Photography & Videography</h3>
                            <p class="mt-2 text-green-100">High-quality product photography and promotional videos.</p>
                        </div>
                    </div>

                    <div class="relative bg-gradient-to-br from-red-500 via-yellow-500 to-green-500 p-8 rounded-lg shadow-[6px_-6px_0_0_rgba(239,68,68,0.3)] hover:shadow-[8px_-8px_0_0_rgba(234,179,8,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-100" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-red-50">Logo & Visual Identity Design</h3>
                            <p class="mt-2 text-red-100">Custom logo creation, typography, and color palettes.</p>
                        </div>
                    </div>

                    <div class="relative bg-gradient-to-tr from-purple-500 via-red-500 to-yellow-500 p-8 rounded-lg shadow-[-6px_-6px_0_0_rgba(147,51,234,0.3)] hover:shadow-[-8px_-8px_0_0_rgba(239,68,68,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-100" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-bold text-purple-50">Brand Identity Clarification</h3>
                            <p class="mt-2 text-purple-100">Helping businesses refine their message, audience, and aesthetic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl p-12 bg-gradient-to-br from-blue-800 to-green-400">
                <div class="lg:text-center">
                    <h2 class="text-3xl font-extrabold bg-gradient-to-br from-red-200 to-green-200 bg-clip-text text-transparent sm:text-4xl">
                        Why Choose PixelCraft
                    </h2>
                    <p class="mt-4 max-w-2xl text-lg font-bold text-red-200 lg:mx-auto">
                        Small team, big impact. We bring enterprise-level expertise with startup agility.
                    </p>
                </div>

                <div class="mt-8">
                    <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="flex bg-gradient-to-br from-red-200 to-green-200 p-6 rounded-lg shadow-[-4px_4px_0px_0px_rgba(239,68,68,0.5)] hover:shadow-[-6px_6px_0px_0px_rgba(34,197,94,0.5)] hover:bg-gradient-to-br hover:from-green-200 hover:to-red-200 transition-all duration-300 transform hover:translate-x-0.5 hover:-translate-y-0.5">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-red-500 via-orange-500 to-yellow-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Direct Communication</h3>
                                <p class="mt-2 text-gray-600">
                                    Work directly with our core team. No account managers, no bureaucracy.
                                </p>
                            </div>
                        </div>

                        <div class="flex bg-gradient-to-br from-red-200 to-green-200 p-6 rounded-lg shadow-[4px_4px_0px_0px_rgba(239,68,68,0.5)] hover:shadow-[6px_6px_0px_0px_rgba(34,197,94,0.5)] hover:bg-gradient-to-br hover:from-green-200 hover:to-red-200 transition-all duration-300 transform hover:translate-x-0.5 hover:-translate-y-0.5">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-yellow-500 via-orange-500 to-red-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Fast Execution</h3>
                                <p class="mt-2 text-gray-600">
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
            <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-tl-lg rounded-br-lg shadow-xl overflow-hidden gradient-container">
                <div class="relative px-8 py-10 lg:p-12">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            <span class="block">Ready to get started?</span>
                            <span class="block text-blue-200">Let's build something great.</span>
                        </h2>
                        <div class="mt-8 lg:mt-0 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="{{ route('contact') }}" 
                               class="hover-optimized group relative w-full flex items-center justify-center px-6 py-3 text-base font-medium rounded-bl-lg rounded-tr-lg text-blue-900">
                                <span class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-500"></span>
                                <span class="absolute inset-0 bg-gradient-to-br from-blue-500 to-green-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                <span class="relative">Contact Us</span>
                            </a>
                            <a href="{{ route('portfolio') }}" 
                               class="hover-optimized group relative w-full flex items-center justify-center px-6 py-3 text-base font-medium rounded-tr-lg rounded-bl-lg text-blue-200">
                                <span class="absolute inset-0 bg-gradient-to-br from-blue-800 to-indigo-900"></span>
                                <span class="absolute inset-0 bg-gradient-to-br from-indigo-900 to-blue-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                <span class="relative">View Portfolio</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 