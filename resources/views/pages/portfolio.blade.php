<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-red-200 via-gray-100 via-blue-200"></div>

    <!-- Page-specific background images -->  
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
        <div class="w-full h-screen bg-cover bg-center opacity-60" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-green-400 to-blue-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Our Work
                </h1>
            </div>

            <!-- Featured Projects -->
            <div class="mt-8">
                <div class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-6 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-blue-200 to-green-200 bg-clip-text text-transparent mb-4">Featured Projects</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Project 1 -->
                            <div class="relative bg-gradient-to-br from-blue-500 to-green-500 p-1 rounded-lg shadow-[-4px_4px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-6px_6px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-blue-800 to-green-800 p-6 rounded-lg">
                                    <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg mb-4">
                                    <h3 class="text-xl font-bold text-blue-200">Project 1</h3>
                                    <p class="mt-2 text-blue-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- Project 2 -->
                            <div class="relative bg-gradient-to-br from-green-500 to-blue-500 p-1 rounded-lg shadow-[4px_4px_0px_0px_rgba(34,197,94,0.3)] hover:shadow-[6px_6px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-green-800 to-blue-800 p-6 rounded-lg">
                                    <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" class="w-full h-48 object-cover rounded-lg mb-4">
                                    <h3 class="text-xl font-bold text-green-200">Project 2</h3>
                                    <p class="mt-2 text-green-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Projects -->
            <div class="mt-8 mb-8">
                <div class="relative bg-gradient-to-br from-green-600 to-blue-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[6px_6px_0px_0px_rgba(34,197,94,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-green-900 to-blue-900 p-6 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-green-200 to-blue-200 bg-clip-text text-transparent mb-4">More Projects</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Project 3 -->
                            <div class="relative bg-gradient-to-br from-blue-500 to-green-500 p-1 rounded-lg shadow-[-4px_4px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-6px_6px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-blue-800 to-green-800 p-6 rounded-lg">
                                    <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" class="w-full h-48 object-cover rounded-lg mb-4">
                                    <h3 class="text-xl font-bold text-blue-200">Project 3</h3>
                                    <p class="mt-2 text-blue-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- Project 4 -->
                            <div class="relative bg-gradient-to-br from-green-500 to-blue-500 p-1 rounded-lg shadow-[4px_4px_0px_0px_rgba(34,197,94,0.3)] hover:shadow-[6px_6px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-green-800 to-blue-800 p-6 rounded-lg">
                                    <img src="{{ asset('images/project4.jpg') }}" alt="Project 4" class="w-full h-48 object-cover rounded-lg mb-4">
                                    <h3 class="text-xl font-bold text-green-200">Project 4</h3>
                                    <p class="mt-2 text-green-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <!-- Project 5 -->
                            <div class="relative bg-gradient-to-br from-blue-500 to-green-500 p-1 rounded-lg shadow-[-4px_4px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-6px_6px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                                <div class="bg-gradient-to-br from-blue-800 to-green-800 p-6 rounded-lg">
                                    <img src="{{ asset('images/project5.jpg') }}" alt="Project 5" class="w-full h-48 object-cover rounded-lg mb-4">
                                    <h3 class="text-xl font-bold text-blue-200">Project 5</h3>
                                    <p class="mt-2 text-blue-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 