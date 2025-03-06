<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-green-200 via-gray-100 via-red-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
        <div class="w-full h-screen bg-cover bg-center opacity-60" style="background-image: url('{{ asset('images/gradient-bg-red.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-red-400 to-blue-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Contact Us
                </h1>
            </div>

            <!-- Contact Form -->
            <div class="mt-8">
                <div class="relative bg-gradient-to-br from-red-600 to-blue-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(239,68,68,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-red-900 to-blue-900 p-6 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-red-200 to-blue-200 bg-clip-text text-transparent mb-4">Get in Touch</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-red-100">Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" autocomplete="name" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-red-100">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-red-100">Message</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-br from-blue-500 to-red-500 hover:from-blue-600 hover:to-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="mt-8 mb-8">
                <div class="relative bg-gradient-to-br from-blue-600 to-red-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(239,68,68,0.4)] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-blue-900 to-red-900 p-6 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-blue-200 to-red-200 bg-clip-text text-transparent mb-4">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="text-blue-100">contact@pixelburststudio.com</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="text-blue-100">(519) 362-5475</span>
                            </div>
                            <div class="flex items-start space-x-4">
                                <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-blue-100">
                                    Guelph, ON<br>
                                    Canada
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 