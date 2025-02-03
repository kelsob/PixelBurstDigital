<x-app-layout>
    <div class="pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Our Work
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    A showcase of our best digital experiences and creative solutions
                </p>
            </div>

            <!-- Portfolio Filter -->
            <div class="mt-12 flex justify-center space-x-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    All Projects
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Web Development
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Branding
                </button>
                <button class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Product Design
                </button>
            </div>

            <!-- Featured Project -->
            <div class="mt-20">
                <div class="relative rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                         alt="E-commerce Platform" 
                         class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80">
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <div class="text-blue-400 text-sm font-semibold">Featured Project</div>
                            <h3 class="mt-2 text-2xl font-bold text-white">Modern E-commerce Platform</h3>
                            <p class="mt-2 text-gray-300">A complete digital transformation for a traditional retail business, featuring a modern tech stack and seamless user experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Grid -->
            <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Project 1 -->
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                             alt="SaaS Dashboard" 
                             class="h-full w-full object-cover object-center transition-opacity group-hover:opacity-75">
                        <div class="absolute inset-0 bg-gray-900 opacity-0 group-hover:opacity-75 transition-opacity"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-blue-400 text-black px-4 py-2 rounded-md font-medium">View Project</button>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-white">SaaS Dashboard Redesign</h3>
                    <p class="text-sm text-gray-300">Web Development</p>
                </div>

                <!-- Project 2 -->
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                             alt="Brand Identity" 
                             class="h-full w-full object-cover object-center transition-opacity group-hover:opacity-75">
                        <div class="absolute inset-0 bg-gray-900 opacity-0 group-hover:opacity-75 transition-opacity"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-blue-400 text-black px-4 py-2 rounded-md font-medium">View Project</button>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-white">Tech Startup Branding</h3>
                    <p class="text-sm text-gray-300">Branding & Identity</p>
                </div>

                <!-- Project 3 -->
                <div class="group relative">
                    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                             alt="Product Design" 
                             class="h-full w-full object-cover object-center transition-opacity group-hover:opacity-75">
                        <div class="absolute inset-0 bg-gray-900 opacity-0 group-hover:opacity-75 transition-opacity"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="bg-blue-400 text-black px-4 py-2 rounded-md font-medium">View Project</button>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-white">Smart Home App</h3>
                    <p class="text-sm text-gray-300">Product Design</p>
                </div>

                <!-- Additional Projects... -->
            </div>

            <!-- Case Studies Section -->
            <div class="mt-32">
                <h2 class="text-3xl font-bold text-white text-center mb-12">Featured Case Studies</h2>
                <div class="space-y-24">
                    <!-- Case Study 1 -->
                    <div class="lg:flex lg:items-center lg:space-x-12">
                        <div class="lg:w-1/2">
                            <div class="relative h-96 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                                     alt="Website Redesign" 
                                     class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="mt-8 lg:mt-0 lg:w-1/2">
                            <div class="text-blue-400 text-sm font-semibold">Web Development</div>
                            <h3 class="mt-2 text-2xl font-bold text-white">Financial Services Website Redesign</h3>
                            <p class="mt-4 text-gray-300">Complete overhaul of a legacy financial services platform, resulting in a 150% increase in user engagement and 40% reduction in bounce rate.</p>
                            <div class="mt-6 flex items-center space-x-4">
                                <span class="text-gray-300">Technologies used:</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">Laravel</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">Vue.js</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">Tailwind</span>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 2 -->
                    <div class="lg:flex lg:items-center lg:space-x-12 lg:flex-row-reverse">
                        <div class="lg:w-1/2">
                            <div class="relative h-96 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                                     alt="Mobile App" 
                                     class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="mt-8 lg:mt-0 lg:w-1/2">
                            <div class="text-blue-400 text-sm font-semibold">Product Design</div>
                            <h3 class="mt-2 text-2xl font-bold text-white">Healthcare Mobile App</h3>
                            <p class="mt-4 text-gray-300">A patient-centered mobile application that streamlines healthcare access and appointment management, serving over 50,000 active users.</p>
                            <div class="mt-6 flex items-center space-x-4">
                                <span class="text-gray-300">Technologies used:</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">React Native</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">Node.js</span>
                                <span class="px-3 py-1 text-sm text-gray-300 bg-gray-800 rounded-full">AWS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 