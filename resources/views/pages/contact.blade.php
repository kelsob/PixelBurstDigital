<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-green-200 via-gray-100 via-red-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-red-400 to-blue-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Contact Us
                </h1>
            </div>

            <!-- Contact Form and Info -->
            <div class="mt-8 mb-8 flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
                <!-- Contact Info -->
                <div class="md:w-1/2">
                    <div class="relative bg-gradient-to-br from-blue-600 to-red-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(239,68,68,0.4)] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-blue-900 to-red-900 p-6 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                            <h2 class="text-xl font-extrabold bg-gradient-to-br from-blue-200 to-red-200 bg-clip-text text-transparent mb-4">Contact Information</h2>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm text-blue-100">contact@pixelburstdigital.com</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="text-sm text-blue-100">(519) 362-5475</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-sm text-blue-100">
                                        Guelph, ON<br>
                                        Canada
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Image -->
                    <div class="mt-6">
                        <img src="{{ asset('images/phone.webp') }}" alt="Contact Us" class="w-full h-auto">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="md:w-1/2">
                    <div class="relative bg-gradient-to-br from-red-600 to-blue-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(239,68,68,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-red-900 to-blue-900 p-4 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                            <h2 class="text-lg font-extrabold bg-gradient-to-br from-red-200 to-blue-200 bg-clip-text text-transparent mb-4">Get in Touch</h2>
                            @if(session('success'))
                                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-md">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="name" class="block text-xs font-medium text-red-100">Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="name" id="name" autocomplete="name" required class="block w-full px-2 py-1.5 text-sm placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-xs font-medium text-red-100">Email</label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-2 py-1.5 text-sm placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>

                                <div>
                                    <label for="message" class="block text-xs font-medium text-red-100">Message</label>
                                    <div class="mt-1">
                                        <textarea id="message" name="message" rows="3" class="block w-full px-2 py-1.5 text-sm placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required></textarea>
                                    </div>
                                </div>

                                <div>
                                    <label for="referral" class="block text-xs font-medium text-red-100">Where did you hear about us?</label>
                                    <div class="mt-1">
                                        <select id="referral" name="referral" class="block w-full px-2 py-1.5 text-sm placeholder-gray-400 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                            <option value="">Select an option</option>
                                            <option value="search_engine">Search Engine</option>
                                            <option value="social_media">Social Media</option>
                                            <option value="referral">Referral</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-medium text-red-100">What services are you interested in?</label>
                                    <fieldset class="mt-2">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                            <div class="flex items-center">
                                                <input id="custom_website_design" name="services[]" type="checkbox" value="custom_website_design" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="custom_website_design" class="ml-2 block text-xs text-red-100">Custom Website Design</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="website_customization" name="services[]" type="checkbox" value="website_customization" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="website_customization" class="ml-2 block text-xs text-red-100">Wix/Squarespace/WordPress Customization</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="website_update" name="services[]" type="checkbox" value="website_update" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="website_update" class="ml-2 block text-xs text-red-100">Website Update/Modernization</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="seo" name="services[]" type="checkbox" value="seo" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="seo" class="ml-2 block text-xs text-red-100">Search Engine Optimization</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="branding" name="services[]" type="checkbox" value="branding" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="branding" class="ml-2 block text-xs text-red-100">Branding</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="logo_design" name="services[]" type="checkbox" value="logo_design" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="logo_design" class="ml-2 block text-xs text-red-100">Logo Design</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3d_visualization" name="services[]" type="checkbox" value="3d_visualization" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="3d_visualization" class="ml-2 block text-xs text-red-100">3D Product Visualization</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="product_media" name="services[]" type="checkbox" value="product_media" class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                                <label for="product_media" class="ml-2 block text-xs text-red-100">Product Photography/Videography</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div>
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 text-xs font-medium text-white bg-gradient-to-br from-blue-500 to-red-500 hover:from-blue-600 hover:to-red-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 