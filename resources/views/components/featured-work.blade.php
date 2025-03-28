<!-- Featured Work Section -->
<section class="py-8 relative overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="bg-gradient-to-br from-blue-900/80 to-green-900/80 backdrop-blur-xl rounded-2xl shadow-2xl p-8 border border-white/10">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold bg-gradient-to-tr from-purple-500 via-red-500 to-yellow-500 bg-clip-text text-transparent sm:text-4xl">
                    Featured Work
                </h2>
                <p class="mt-4 text-blue-100 max-w-2xl mx-auto text-lg">
                    Explore our latest projects showcasing our expertise in web design, branding, and digital solutions.
                </p>
            </div>

            <!-- Featured Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Project 1: Kate Howells -->
                <a href="/portfolio#kate-howells" class="block transition-transform duration-300 hover:scale-[1.02]">
                    <div class="relative bg-gradient-to-br from-green-900/50 to-red-900/50 rounded-xl p-4 shadow-lg border border-white/10">
                        <div class="relative overflow-hidden rounded-lg pb-4 md:pb-0">
                            <img src="{{ asset('images/portfolio-kate-howells-1.webp') }}" 
                                 alt="Kate Howells Portfolio" 
                                 class="w-full h-64 object-contain">
                        </div>
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl font-bold text-blue-200">Kate Howells Portfolio</h3>
                                <div class="flex flex-wrap gap-2 justify-end">
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">Web Design</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Branding</span>
                                </div>
                            </div>
                            <p class="text-blue-100">Space Communicator Website</p>
                        </div>
                    </div>
                </a>

                <!-- Project 2: Planet Bean -->
                <a href="/portfolio#planet-bean" class="block transition-transform duration-300 hover:scale-[1.02]">
                    <div class="relative bg-gradient-to-br from-red-900/50 to-blue-900/50 rounded-xl p-4 shadow-lg border border-white/10">
                        <div class="relative overflow-hidden rounded-lg pb-4 md:pb-0">
                            <video autoplay muted loop playsinline class="w-full h-64 object-contain">
                                <source src="{{ asset('videos/portfolio-planet-bean-1.webm') }}" type="video/webm">
                            </video>
                        </div>
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl font-bold text-blue-200">Planet Bean</h3>
                                <div class="flex flex-wrap gap-2 justify-end">
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">Animation</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Branding</span>
                                </div>
                            </div>
                            <p class="text-blue-100">Space-Themed Animation</p>
                        </div>
                    </div>
                </a>

                <!-- Project 3: Ben Reid -->
                <a href="/portfolio#ben-reid" class="block transition-transform duration-300 hover:scale-[1.02]">
                    <div class="relative bg-gradient-to-br from-blue-900/50 to-red-900/50 rounded-xl p-4 shadow-lg border border-white/10">
                        <div class="relative overflow-hidden rounded-lg pb-4 md:pb-0">
                            <img src="{{ asset('images/portfolio-ben-reid-1.webp') }}" 
                                 alt="Ben Reid Consulting" 
                                 class="w-full h-64 object-contain">
                        </div>
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl font-bold text-blue-200">Ben Reid Consulting</h3>
                                <div class="flex flex-wrap gap-2 justify-end">
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">Web Design</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Branding</span>
                                </div>
                            </div>
                            <p class="text-blue-100">Professional Website Design</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-12">
                <a href="/portfolio" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-green-500 text-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:translate-y-[-2px]">
                    <span class="text-lg font-semibold">View All Projects</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>