<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-blue-200 via-gray-100 via-green-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-red.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-blue-800 to-green-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Our Services
                </h1>
                <p class="mt-4 text-xl text-blue-900 max-w-2xl mx-auto">
                    Comprehensive digital solutions tailored to your unique needs - from websites to branding, we're your partner in digital success.
                </p>
            </div>

            <!-- Web Design & Development -->
            <div class="mt-12">
                <div class="relative bg-gradient-to-br from-blue-800 to-green-600 p-8 rounded-tr-[2rem] rounded-bl-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-blue-700/20">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="lg:w-2/3">
                            <h2 class="text-3xl font-extrabold bg-gradient-to-r from-blue-200 via-blue-100 to-indigo-200 bg-clip-text text-transparent mb-6">Web Design & Development</h2>
                            <p class="text-blue-100 mb-6 text-lg">
                                Custom websites for businesses of all sizes—whether you're starting fresh or need an upgrade. We combine modern design with powerful functionality.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-blue-100">Built-from-Scratch Websites</h3>
                                            <p class="text-blue-200">Fully custom web experiences tailored to your brand</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-blue-100">Website Builder Customization</h3>
                                            <p class="text-blue-200">Expert tweaks for Wix, WordPress, and other platforms</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-blue-100">Website Migration</h3>
                                            <p class="text-blue-200">Moving old sites to better platforms</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-blue-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-blue-100">Performance Optimization</h3>
                                            <p class="text-blue-200">Speed and functionality improvements</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 flex items-center justify-center">
                            <div class="relative group">
                                <div class="absolute -inset-1 blur-lg rounded-xl blur-4xl opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                                <img src="{{ asset('images/toolbox.webp') }}" 
                                     alt="Web Design Illustration" 
                                     class="relative w-full max-w-md transform transition duration-500 group-hover:scale-[1.03] drop-shadow-xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Branding & Digital Identity -->
            <div class="mt-12">
                <div class="relative bg-gradient-to-br bg-gradient-to-br from-blue-800 to-red-600 p-8 rounded-tl-[2rem] rounded-br-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-emerald-700/20">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="lg:w-2/3">
                            <h2 class="text-3xl font-extrabold bg-gradient-to-r from-green-200 via-emerald-100 to-green-200 bg-clip-text text-transparent mb-6">Branding & Digital Identity</h2>
                            <p class="text-emerald-100 mb-6 text-lg">
                                Professional branding and visuals to make your business stand out. We create cohesive brand experiences that resonate with your audience.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-emerald-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-emerald-100">3D Product Visualization</h3>
                                            <p class="text-emerald-200">Blender-powered renders and animations</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-emerald-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-emerald-100">Logo & Visual Identity</h3>
                                            <p class="text-emerald-200">Custom logos, typography, and color palettes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-emerald-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-emerald-100">Photography & Video</h3>
                                            <p class="text-emerald-200">High-quality product and promotional content</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-2">
                                        <svg class="h-6 w-6 text-emerald-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <div>
                                            <h3 class="font-bold text-emerald-100">Brand Identity</h3>
                                            <p class="text-emerald-200">Message refinement and audience targeting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 flex items-center justify-center relative group">
                            <div class="absolute -inset-1 blur-lg rounded-xl blur-2xl opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                            <img src="{{ asset('images/polaroid.webp') }}" 
                                alt="Branding Illustration" 
                                class="relative w-full max-w-md transform transition duration-500 group-hover:scale-[1.03] drop-shadow-xl">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Solutions -->
            <div class="mt-8 mb-8">
                <div class="relative bg-gradient-to-br from-purple-900 via-indigo-800 to-purple-950 p-6 rounded-[1.5rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <div class="text-center md:text-left md:col-span-2">
                            <h2 class="text-3xl font-extrabold bg-gradient-to-r from-purple-200 via-indigo-100 to-purple-200 bg-clip-text text-transparent mb-4">
                                Tailored to Your Vision
                            </h2>
                            <p class="text-purple-100 mb-4 text-base">
                                Don't see exactly what you're looking for? Our services are flexible and can be customized to meet your unique needs. Whether you need a combination of our services or have a specific project in mind, we're here to help bring your vision to life.
                            </p>
                            <div class="text-right">
                                <a href="{{ route('contact') }}" 
                                   class="inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-500 text-white font-bold rounded-tr-xl rounded-bl-xl shadow-[4px_4px_0px_0px_rgba(147,51,234,0.5)] hover:shadow-[6px_6px_0px_0px_rgba(99,102,241,0.5)] hover:from-purple-400 hover:to-indigo-400 transition-all duration-300 transform hover:-translate-y-0.5 hover:translate-x-0.5">
                                    Let's Discuss Your Project
                                </a>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute -inset-1 blur-lg rounded-xl blur-2xl opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                            <img src="{{ asset('images/joystick.webp') }}" 
                                 alt="Custom Solutions" 
                                 class="relative transform transition duration-500 group-hover:scale-[1.03] drop-shadow-xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 