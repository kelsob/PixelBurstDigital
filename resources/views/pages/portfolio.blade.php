<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-red-200 via-gray-100 via-blue-200"></div>

    <!-- Page-specific background images -->  
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
        <div class="w-full h-screen bg-cover bg-center opacity-60" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <!-- Lightbox Component -->
    <div id="lightbox" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 hidden">
        <div class="relative max-w-7xl max-h-[90vh] mx-auto p-4">
            <img id="lightbox-image" src="" alt="" class="max-w-full max-h-[85vh] object-contain">
            <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white hover:text-gray-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-green-400 to-blue-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Our Work
                </h1>
            </div>

            <!-- Project Cards -->
            <div class="mt-12 space-y-16 mb-24">
                <!-- Project Card 1: Cosmos Award -->
                <div id="cosmos-award" class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] scroll-mt-32">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-4 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4">
                            <!-- Project Images -->
                            <div class="space-y-4">
                                <div class="hidden lg:block">
                                    <img src="{{ asset('images/portfolio-cosmos-award-bill-nye.webp') }}" 
                                         alt="Cosmos Award 3D Model" 
                                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-bill-nye.webp') }}', 'Cosmos Award 3D Model')">
                                </div>
                                <div class="hidden lg:flex gap-4">
                                    <img src="{{ asset('images/portfolio-cosmos-award-components.webp') }}" 
                                         alt="Cosmos Award Components" 
                                         class="w-[48.5%] object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-components.webp') }}', 'Cosmos Award Components')">
                                    <img src="{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}" 
                                         alt="Cosmos Award 3D Model" 
                                         class="w-[48.5%] object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}', 'Cosmos Award 3D Model')">
                                </div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="space-y-4 lg:flex lg:flex-col lg:justify-center">
                                <div>
                                    <h2 class="text-2xl font-bold text-blue-200">
                                        The Planetary Society - Cosmos Award
                                    </h2>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">3D Modeling</span>
                                        <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Product Design</span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-blue-200 mr-2">Client:</h3>
                                        <p class="text-blue-100">The Planetary Society</p>
                                    </div>
                                </div>
                                <div class="block lg:hidden mt-4">
                                    <img src="{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}" 
                                         alt="Cosmos Award 3D Model" 
                                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}', 'Cosmos Award 3D Model')">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Overview</h3>
                                    <p class="text-blue-100">A sophisticated 3D model of Saturn created for The Planetary Society's prestigious Cosmos Award. This project involved creating a scientifically accurate yet structurally sound 3D model optimized for high-quality 3D printing, replacing their previous handcrafted glass version with a more cost-effective and reproducible solution.</p>
                                </div>
                                <!-- Secondary images for mobile view -->
                                <div class="flex lg:hidden mt-4 grid grid-cols-2 gap-4 justify-center items-center">
                                    <img src="{{ asset('images/portfolio-cosmos-award-components.webp') }}" 
                                         alt="Cosmos Award Components" 
                                         class="h-96 object-contain rounded-lg shadow-lg mx-auto cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-components.webp') }}', 'Cosmos Award Components')">
                                    <img src="{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}" 
                                         alt="Cosmos Award 3D Model" 
                                         class="h-96 object-contain rounded-lg shadow-lg mx-auto cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-cosmos-award-3dmodel.webp') }}', 'Cosmos Award 3D Model')">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Details</h3>
                                    <p class="text-blue-100">The project involved creating a complex 3D model of Saturn with three main components: the planet itself (hollowed out with a mounting socket), semi-transparent free-floating rings, and a subtle mounting system. The design balanced scientific accuracy with practical considerations for 3D printing, including structural stability and material optimization.

Working with Xometry for production, the model was printed using multi-jet diffusion advanced printing methods and vapor smoothed for a premium finish. The final product was mounted on a plaque and presented as the Cosmos Award at The Planetary Society's 45th annual gala. The design successfully achieved the client's goals of creating a beautiful, scientifically accurate award that was both reproducible and cost-effective.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2: Kate Howells -->
                <div id="kate-howells" class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] scroll-mt-32">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-4 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4">
                            <!-- Project Images -->
                            <div class="space-y-4">
                                <div class="hidden lg:block">
                                <img src="{{ asset('images/portfolio-kate-howells-1.webp') }}" 
                                     alt="Kate Howells Homepage" 
                                     class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                     onclick="openLightbox('{{ asset('images/portfolio-kate-howells-1.webp') }}', 'Kate Howells Homepage')">
                                </div>
                                <div class="hidden lg:flex gap-4">
                                    <img src="{{ asset('images/portfolio-kate-howells-mobile-2.webp') }}" 
                                         alt="Kate Howells Books Links" 
                                         class="w-[48.5%] object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-kate-howells-mobile-2.webp') }}', 'Kate Howells Books Links')">
                                    <img src="{{ asset('images/portfolio-kate-howells-mobile-1.webp') }}" 
                                         alt="Kate Howells Mobile View" 
                                         class="w-[48.5%] object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-kate-howells-mobile-1.webp') }}', 'Kate Howells Mobile View')">
                                </div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="space-y-4 lg:flex lg:flex-col lg:justify-center">
                                <div>
                                    <h2 class="text-2xl font-bold text-blue-200">
                                        <a href="https://www.kateonearth.com" target="_blank" class="hover:text-blue-300 transition-colors duration-200">
                                            Kate Howells - Space Communicator Portfolio Website
                                        </a>
                                    </h2>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">Web Design</span>
                                        <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Branding</span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-blue-200 mr-2">Client:</h3>
                                        <p class="text-blue-100">Kate Howells</p>
                                    </div>
                                </div>
                                <div class="block lg:hidden mt-4">
                                    <img src="{{ asset('images/portfolio-kate-howells-1.webp') }}" 
                                         alt="Kate Howells Homepage" 
                                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-kate-howells-1.webp') }}', 'Kate Howells Homepage')">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Overview</h3>
                                    <p class="text-blue-100">A modern, responsive portfolio website for a space communicator and public education specialist. The site features a custom space-themed design with optimized performance, accessibility, and user experience. Built with Laravel and Tailwind CSS, it showcases Kate's work while maintaining high performance standards and engaging visual elements.</p>
                                </div>
                                <!-- Secondary images for mobile view -->
                                <div class="flex lg:hidden mt-4 grid grid-cols-2 gap-4 justify-center items-center">
                                    <img src="{{ asset('images/portfolio-kate-howells-mobile-2.webp') }}" 
                                         alt="Kate Howells Books Page" 
                                         class="h-96 object-contain rounded-lg shadow-lg mx-auto cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-kate-howells-mobile-2.webp') }}', 'Kate Howells Books Page')">
                                    <img src="{{ asset('images/portfolio-kate-howells-mobile-1.webp') }}" 
                                         alt="Kate Howells Mobile View" 
                                         class="h-96 object-contain rounded-lg shadow-lg mx-auto cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-kate-howells-mobile-1.webp') }}', 'Kate Howells Mobile View')">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Details</h3>
                                    <p class="text-blue-100">This project focused on creating a modern, engaging portfolio website for Kate Howells, a space communicator and public education specialist. The site blends a custom space-themed design with optimized performance, accessibility, and user experience to showcase her work effectively.

Built with Laravel and Tailwind CSS, the site features responsive design, optimized image loading, and interactive elements powered by Alpine.js. A custom email integration ensures smooth communication, while an SEO-optimized structure enhances visibility. The result is a visually striking, high-performing portfolio that reflects Kate's expertise and captivates her audience.</p>
                                </div>                                <div class="flex items-center justify-between pt-4">
                                    <div class="flex items-center gap-2">
                                        <span class="px-4 py-2 bg-green-500/20 text-green-200 rounded-full text-sm font-medium flex items-center gap-2">
                                            Live
                                            <div class="w-2 h-2 rounded-full bg-green-400 shadow-[0_0_8px_2px_rgba(74,222,128,0.6)]"></div>
                                        </span>
                                    </div>
                                    <a href="https://www.benreidhowells.com" target="_blank" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-green-500 text-white rounded-lg shadow-lg">
                                        <span>Visit Website</span>
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="planet-bean" class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1 scroll-mt-32">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-4 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4">
                            <!-- Project Images -->
                            <div class="space-y-4">
                                <div class="hidden lg:block">
                                    <video autoplay muted loop playsinline preload="auto" class="w-full h-full object-cover rounded-lg shadow-lg">
                                        <source src="{{ asset('videos/portfolio-planet-bean-1.webm') }}" type="video/webm">
                                        <img src="{{ asset('images/portfolio-planet-bean-1.webp') }}" 
                                             alt="Planet Bean Animation" 
                                             class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                             onclick="openLightbox('{{ asset('images/portfolio-planet-bean-1.webp') }}', 'Planet Bean Animation')">
                                    </video>
                                </div>
                                <div class="hidden lg:block">
                                    <img src="{{ asset('images/portfolio-planet-bean-1.webp') }}" 
                                         alt="Project Design Process" 
                                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-planet-bean-1.webp') }}', 'Project Design Process')">
                                </div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="space-y-4 lg:flex lg:flex-col lg:justify-center">
                                <div>
                                    <h2 class="text-2xl font-bold text-blue-200">Planet Bean - Fair Trade Coffee Cooperative</h2>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-red-500/20 text-blue-200 rounded-full text-sm">Product Visualisation</span>
                                        <span class="px-3 py-1 bg-orange-500/20 text-green-200 rounded-full text-sm">Branding Animation</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-blue-200 mr-2">Client:</h3>
                                        <p class="text-blue-100">Planet Bean</p>
                                    </div>
                                </div>
                                <div class="block lg:hidden mt-4">
                                    <video autoplay muted loop playsinline preload="auto" class="w-full h-full object-cover rounded-lg shadow-lg">
                                        <source src="{{ asset('videos/portfolio-planet-bean-1.webm') }}" type="video/webm">
                                        <img src="{{ asset('images/portfolio-planet-bean-1.webp') }}" 
                                             alt="Planet Bean Animation" 
                                             class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                             onclick="openLightbox('{{ asset('images/portfolio-planet-bean-1.webp') }}', 'Planet Bean Animation')">
                                    </video>  
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Overview</h3>
                                    <p class="text-blue-100">A whimsical, space-themed animation created for Planet Bean's in-store display. The animation brings the brand to life with playful visuals of astronauts, aliens, and a coffee bean planet, using procedural textures, rigging, and physics-based simulations to create an engaging and dynamic scene.</p>
                                </div>
                                                        <!-- Secondary image for mobile view -->
                                <div class="block lg:hidden mt-4">
                                    <img src="{{ asset('images/portfolio-planet-bean-1.webp') }}" 
                                         alt="Project Design Process" 
                                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                         onclick="openLightbox('{{ asset('images/portfolio-planet-bean-1.webp') }}', 'Project Design Process')">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Details</h3>
                                    <p class="text-blue-100">This project focused on creating a playful, space-themed animation for Planet Bean to be featured in their store. Inspired by the company's name, the animation incorporates aliens, astronauts, moons, and a coffee bean planet, bringing a whimsical energy to the brand.

The animation was built using procedural textures, rigging, and physics simulations. A custom moon texture was designed, while an astronaut's arm and an alien's tentacle were rigged and animated for movement. Rigid body physics created a realistic coffee bean ring orbiting the central bean planet, and a rocket ship following a curved path added dynamic motion. The result is a fun, engaging animation that captures the unique character of Planet Bean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ben-reid" class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] duration-300 scroll-mt-32">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-4 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4">
                            <!-- Project Images -->
                            <div class="space-y-4">
                                <div class="hidden lg:block">
                                <img src="{{ asset('images/portfolio-ben-reid-1.webp') }}" alt="Ben Reid Homepage" class="w-full h-full object-cover rounded-lg shadow-lg">
                                </div>
                                <div class="hidden lg:block">
                                    <img src="{{ asset('images/portfolio-ben-reid-2.webp') }}" alt="Ben Reid Services Page" class="w-full h-full object-cover rounded-lg shadow-lg">
                                </div>
                            </div>
                            
                            <!-- Project Details -->
                            <div class="space-y-4 lg:flex lg:flex-col lg:justify-center">
                                <div>
                                    <h2 class="text-2xl font-bold text-blue-200">Ben Reid – Professional Consulting Website</h2>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-200 rounded-full text-sm">Web Design</span>
                                        <span class="px-3 py-1 bg-green-500/20 text-green-200 rounded-full text-sm">Branding</span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-semibold text-blue-200 mr-2">Client:</h3>
                                        <p class="text-blue-100">Ben Reid</p>
                                    </div>
                                </div>
                                <div class="block lg:hidden mt-4">
                                    <img src="{{ asset('images/portfolio-ben-reid-1.webp') }}" alt="Ben Reid Homepage" class="w-full h-full object-cover rounded-lg shadow-lg">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Overview</h3>
                                    <p class="text-blue-100">Ben Reid-Howells needed a professional, organized online presence that clearly communicated his diverse work—ranging from community organizing to consulting and education. This project involved designing a modern, user-friendly website on Wix, streamlining his service offerings, integrating multimedia, and enabling direct booking functionality.</p>
                                </div>
                                                        <!-- Secondary image for mobile view -->
                                <div class="block lg:hidden mt-4">
                                    <img src="{{ asset('images/portfolio-ben-reid-2.webp') }}" alt="Ben Reid Services Page" class="w-full h-full object-cover rounded-lg shadow-lg">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-200">Project Details</h3>
                                    <p class="text-blue-100">This project focused on clarifying Ben's brand and services while creating a professional, engaging online presence. His previous website lacked structure, making it difficult for visitors to understand his work and how to engage with him.

I developed a cohesive content strategy, ensuring his philosophy, past projects, and offerings were clearly presented. The site now features a streamlined service page, an integrated booking system, and embedded media to showcase his work dynamically. Additionally, I facilitated the migration of his Wix Premium plan and domain, ensuring a seamless transition to his new site.</p>
                                </div>
                                <div class="flex items-center justify-between pt-4">
                                    <div class="flex items-center gap-2">
                                        <span class="px-4 py-2 bg-green-500/20 text-green-200 rounded-full text-sm font-medium flex items-center gap-2">
                                            Live
                                            <div class="w-2 h-2 rounded-full bg-green-400 shadow-[0_0_8px_2px_rgba(74,222,128,0.6)]"></div>
                                        </span>
                                    </div>
                                    <a href="https://www.benreidhowells.com" target="_blank" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-green-500 text-white rounded-lg shadow-lg">
                                        <span>Visit Website</span>
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
function openLightbox(imageSrc, imageAlt) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    lightboxImage.src = imageSrc;
    lightboxImage.alt = imageAlt;
    lightbox.classList.remove('hidden');
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.add('hidden');
}

// Close lightbox when clicking outside the image
document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script> 