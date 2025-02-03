<x-app-layout>
    <!-- Hero Section -->
    <div class="relative min-h-screen flex items-center">
        <!-- Tech Background Pattern -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900"></div>
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-radial from-transparent to-gray-900"></div>
                <div class="absolute inset-0 opacity-10">
                    <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                        </pattern>
                        <rect width="100" height="100" fill="url(#grid)" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-7">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Digital Solutions</span>
                        <br>
                        <span class="block text-blue-400 xl:inline"> For Every Stage</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        From website development to brand strategy, digital marketing to product design. 
                        Whether you're just starting out or looking to scale, we provide the complete digital 
                        toolkit for your business success.
                    </p>
                    <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-4">
                        <a href="{{ route('services') }}" 
                           class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-blue-400 hover:bg-blue-500 md:text-lg">
                            Explore Services
                        </a>
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 md:text-lg">
                            Start a Project
                        </a>
                    </div>
                    
                    <!-- Update service highlights to show diversity -->
                    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="flex items-start space-x-3">
                            <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm text-gray-300">Web Development & Maintenance</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm text-gray-300">Brand Strategy & Identity</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm text-gray-300">Digital Marketing & SEO</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm text-gray-300">Product Design & Strategy</span>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block lg:col-span-5">
                    <div class="relative transform translate-x-8">
                        <!-- Decorative tech elements -->
                        <div class="absolute top-0 right-0 -mr-4 p-2 bg-gray-800 rounded-lg shadow-lg">
                            <div class="w-8 h-8 bg-blue-400 rounded-md"></div>
                        </div>
                        <div class="absolute bottom-0 left-0 -ml-4 p-2 bg-gray-800 rounded-lg shadow-lg">
                            <div class="w-8 h-8 bg-blue-400 rounded-md"></div>
                        </div>
                        <!-- Update the code snippet to reflect service diversity -->
                        <div class="bg-gray-800 rounded-lg shadow-xl p-6 transform rotate-2">
                            <pre class="text-blue-400 text-sm">
<span class="text-gray-500">// Your complete digital toolkit</span>
const pixelcraft = {
    web: 'development & maintenance',
    brand: 'strategy & identity',
    marketing: 'digital & content',
    product: 'design & strategy'
};</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Overview -->
    <div class="bg-gray-900 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-left">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Complete Digital Solutions
                </h2>
                <p class="mt-4 text-lg text-gray-300 max-w-3xl">
                    Every service you need to establish, grow, and optimize your digital presence
                </p>
            </div>

            <div class="mt-20 grid grid-cols-1 gap-12 lg:grid-cols-2">
                <a href="{{ route('services') }}#web-development" 
                   class="group relative bg-gray-800 p-8 rounded-lg hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-blue-400 opacity-0 rounded-full blur-lg group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-blue-400 mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Web Solutions</h3>
                        <p class="mt-2 text-gray-300">From simple business websites to complex web applications. Development, maintenance, and optimization.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}#branding" 
                   class="group relative bg-gray-800 p-8 rounded-lg hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-blue-400 opacity-0 rounded-full blur-lg group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-blue-400 mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Brand & Identity</h3>
                        <p class="mt-2 text-gray-300">Strategic brand development, visual identity design, and brand voice creation.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}#marketing" 
                   class="group relative bg-gray-800 p-8 rounded-lg hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-blue-400 opacity-0 rounded-full blur-lg group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-blue-400 mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Digital Marketing</h3>
                        <p class="mt-2 text-gray-300">SEO optimization, content strategy, social media management, and digital advertising.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}#product-design" 
                   class="group relative bg-gray-800 p-8 rounded-lg hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-blue-400 opacity-0 rounded-full blur-lg group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative">
                        <div class="text-blue-400 mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white">Product Strategy</h3>
                        <p class="mt-2 text-gray-300">User experience design, product strategy, and digital product development.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Work with more stylized layout -->
    <div class="bg-gray-800 py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-50">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                <pattern id="project-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
                <rect width="100" height="100" fill="url(#project-grid)" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Featured Work
                </h2>
                <p class="mt-4 text-lg text-gray-300">
                    Some of our recent projects
                </p>
            </div>

            <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <a href="{{ route('portfolio') }}" class="group relative">
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
                </a>

                <!-- Add 2 more featured projects here -->
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('portfolio') }}" 
                   class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-blue-400 hover:bg-blue-500">
                    View All Projects
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-gray-900 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                    <div class="flex">
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

                    <div class="flex">
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

                    <!-- Add 2 more advantages -->
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section with more style -->
    <div class="bg-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                <pattern id="cta-grid" width="15" height="15" patternUnits="userSpaceOnUse">
                    <path d="M 15 0 L 0 0 0 15" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
                <rect width="100" height="100" fill="url(#cta-grid)" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 relative">
            <div class="bg-gray-800 rounded-lg shadow-xl p-8">
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
</x-app-layout> 