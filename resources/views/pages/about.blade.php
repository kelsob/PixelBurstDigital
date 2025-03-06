<x-app-layout>
    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
        <div class="w-full h-screen bg-cover bg-center opacity-60" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-blue-400 to-green-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Our Team
                </h1>
            </div>

            <!-- Team Members -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 pt-8">
                <!-- Ben Kelso -->
                <div class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(5,150,105,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-gray-900 to-blue-900 p-6 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <div class="aspect-w-16 aspect-h-9 mb-4">
                            <img class="object-cover w-full h-[250px] rounded-tr-lg rounded-bl-lg" 
                                 src="{{ asset('images/benkelso.jpg') }}"
                                 alt="Ben Kelso">
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-2xl font-extrabold bg-gradient-to-br from-blue-200 to-green-200 bg-clip-text text-transparent">Ben Kelso</h2>
                            <div class="text-lg font-bold text-blue-400">Lead Developer</div>
                            <p class="text-base text-blue-100">Full-stack developer focused on building modern, high-performance websites from scratch using the latest frameworks, tailored to each client's unique needs.</p>
                            <div class="flex space-x-4 pt-2">
                                <a href="https://github.com/bkdev98" target="_blank" class="group relative px-4 py-1.5 text-blue-200 hover:text-white transition-all duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                                    <span class="relative">GitHub</span>
                                </a>
                                <a href="https://linkedin.com/in/benkelso" target="_blank" class="group relative px-4 py-1.5 text-blue-200 hover:text-white transition-all duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                                    <span class="relative">LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chris Fast -->
                <div class="relative bg-gradient-to-br from-green-600 to-blue-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[-6px_6px_0px_0px_rgba(5,150,105,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-gray-900 to-blue-900 p-6 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                        <div class="aspect-w-16 aspect-h-9 mb-4">
                            <img class="object-cover w-full h-[250px] rounded-tl-lg rounded-br-lg" 
                                 src="{{ asset('images/chrisfast.jpg') }}"
                                 alt="Chris Fast">
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-2xl font-extrabold bg-gradient-to-br from-green-200 to-blue-200 bg-clip-text text-transparent">Chris Fast</h2>
                            <div class="text-lg font-bold text-green-400">Creative Director</div>
                            <p class="text-base text-blue-100">Branding strategist with experience in 3D product visualization, photography, videography, animation, and logo design helps bring brands to life through clear, engaging visuals.</p>
                            <div class="flex space-x-4 pt-2">
                                <a href="https://bsky.app/profile/chrisfast.bsky.social" target="_blank" class="group relative px-4 py-1.5 text-blue-200 hover:text-white transition-all duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                                    <span class="relative">Bluesky</span>
                                </a>
                                <a href="https://linkedin.com/in/chrisfast" target="_blank" class="group relative px-4 py-1.5 text-blue-200 hover:text-white transition-all duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                                    <span class="relative">LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Advantage Section -->
            <div class="mt-8 mb-8">
                <div class="relative bg-gradient-to-br from-green-500 to-blue-500 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[8px_8px_0px_0px_rgba(34,197,94,0.3)]">
                    <div class="bg-gradient-to-br from-green-800 via-blue-800 to-green-800 p-8 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                        <h2 class="text-3xl font-extrabold bg-gradient-to-br from-green-200 to-blue-200 bg-clip-text text-transparent mb-6">The Small Team Advantage</h2>
                        <div class="space-y-6">
                            <p class="text-lg text-blue-100">
                                Our lean team structure isn't just about efficiency—it's about delivering better results for our clients. 
                                With direct access to decision-makers and no bureaucratic layers, we can move quickly from concept to execution 
                                while maintaining the highest standards of quality.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                                <div class="bg-gradient-to-br from-green-400/90 to-emerald-500/90 rounded-2xl rounded-br-3xl p-6 shadow-lg shadow-emerald-500/20 transform hover:scale-105 transition-all duration-300">
                                    <h3 class="text-xl font-bold text-white mb-3">Rapid Development</h3>
                                    <p class="text-white/90">Small teams mean faster decisions and quicker iterations. We move fast without sacrificing quality.</p>
                                </div>
                                <div class="bg-gradient-to-br from-emerald-400/90 to-green-500/90 rounded-2xl rounded-tl-3xl p-6 shadow-lg shadow-green-500/20 transform hover:scale-105 transition-all duration-300">
                                    <h3 class="text-xl font-bold text-white mb-3">Direct Communication</h3>
                                    <p class="text-white/90">Work directly with developers. No middlemen, no confusion - just clear, effective communication.</p>
                                </div>
                                <div class="bg-gradient-to-br from-green-400/90 to-teal-500/90 rounded-2xl rounded-tr-3xl p-6 shadow-lg shadow-teal-500/20 transform hover:scale-105 transition-all duration-300">
                                    <h3 class="text-xl font-bold text-white mb-3">Personal Touch</h3>
                                    <p class="text-white/90">Every project gets our full attention. We're invested in your success because your growth is our growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 