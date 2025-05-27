<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-blue-200 via-gray-100 via-green-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl leading-tight pb-2 opacity-0 animate fadeInDown">
                    Branding
                </h1>
                <p class="mt-4 text-xl text-purple-900 max-w-2xl mx-auto leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                    Build a powerful brand identity that resonates with your audience and sets you apart from competitors. Our branding services help you create a cohesive visual language that tells your story and connects with your customers.
                </p>
            </div>

            <!-- Transparency Section -->
            <div class="mt-12">
                <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-6 rounded-tr-[2rem] rounded-bl-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown">
                    <h2 class="text-2xl font-extrabold bg-gradient-to-r from-purple-200 via-purple-100 to-indigo-200 bg-clip-text text-transparent mb-4">Brand That Connects</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Strategic Branding</h3>
                                    <p class="text-purple-100">Every element is crafted to align with your business goals and target audience.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Consistent Identity</h3>
                                    <p class="text-purple-100">A cohesive brand system that works across all platforms and touchpoints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Memorable Design</h3>
                                    <p class="text-purple-100">Unique visual elements that make your brand instantly recognizable.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Brand Guidelines</h3>
                                    <p class="text-purple-100">Comprehensive documentation to maintain brand consistency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- One-Time Services -->
            <div class="mt-12">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent text-center mb-8 opacity-0 animate fadeInDown">One-Time Branding Services</h2>
                <div class="max-w-3xl mx-auto mb-12">
                    <p class="text-lg text-purple-900 text-center leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                        Perfect for businesses looking to establish or refresh their brand identity. Our one-time services provide a solid foundation for your brand journey, whether you're launching a new business or giving your existing brand a modern update.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Budget Branding -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown">
                        <div class="absolute top-0 right-0 bg-rose-500 text-white px-10 py-1 rotate-6 translate-x-1 translate-y-1 w-[180px] text-center rounded-bl-2xl whitespace-nowrap">Budget Friendly</div>
                        <h3 class="text-2xl font-bold text-white mb-4">Budget Branding</h3>
                        <div class="text-4xl font-bold text-white mb-6">$500</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Simple Logo Design</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Color Palette</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Font Selection</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Usage Guidelines</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Basic Branding -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-200">
                        <h3 class="text-2xl font-bold text-white mb-4">Basic Branding</h3>
                        <div class="text-4xl font-bold text-white mb-6">$800</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Logo Design</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Color Palette</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Typography Selection</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Brand Guidelines</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Complete Branding -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-400">
                        <h3 class="text-2xl font-bold text-white mb-4">Complete Branding</h3>
                        <div class="text-4xl font-bold text-white mb-6">$2,000</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Everything in Basic, plus:</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Brand Strategy</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Visual Identity System</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Comprehensive Brand Guidelines</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Brand Evolution -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-600">
                        <h3 class="text-2xl font-bold text-white mb-4">Brand Evolution</h3>
                        <div class="text-4xl font-bold text-white mb-6">$4,000</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Everything in Complete, plus:</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Brand Messaging</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Brand Voice & Tone</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Brand Implementation Support</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-12 mb-12">
                <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20">
                    <h2 class="text-3xl font-extrabold bg-gradient-to-r from-purple-200 via-indigo-100 to-purple-200 bg-clip-text text-transparent mb-6 opacity-0 animate fadeInDown">Frequently Asked Questions</h2>
                    <div class="space-y-6">
                        <div class="opacity-0 animate slideInDown">
                            <h3 class="text-xl font-bold text-white mb-2">How long does the branding process take?</h3>
                            <p class="text-purple-100">A basic branding package typically takes 2-3 weeks, while more comprehensive packages can take 4-6 weeks. We'll provide a detailed timeline during our initial consultation.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-200">
                            <h3 class="text-xl font-bold text-white mb-2">How many logo concepts will I receive?</h3>
                            <p class="text-purple-100">For the Basic package, you'll receive 3 initial concepts. The Complete and Brand Evolution packages include 5 concepts with multiple rounds of revisions.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-400">
                            <h3 class="text-xl font-bold text-white mb-2">What's included in the brand guidelines?</h3>
                            <p class="text-purple-100">Brand guidelines include logo usage rules, color specifications, typography guidelines, and examples of how to apply your brand across different mediums.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-600">
                            <h3 class="text-xl font-bold text-white mb-2">Can I make changes after the project is complete?</h3>
                            <p class="text-purple-100">Yes, we offer revision periods for each package. Additional changes can be made through our maintenance services.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-800">
                            <h3 class="text-xl font-bold text-white mb-2">Do you offer brand strategy services?</h3>
                            <p class="text-purple-100">Yes, brand strategy is included in our Complete and Brand Evolution packages. We can also provide it as a standalone service.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-1000">
                            <h3 class="text-xl font-bold text-white mb-2">What file formats will I receive?</h3>
                            <p class="text-purple-100">You'll receive all necessary file formats including vector files (AI, EPS), raster files (PNG, JPG), and web formats. All files are organized and labeled for easy use.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include Animate.css library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- Animation initialization script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.animate');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Get the delay from the class name
                    const delayClass = Array.from(entry.target.classList)
                        .find(className => className.startsWith('animate-delay-'));
                    const delay = delayClass ? parseInt(delayClass.split('-').pop()) : 0;
                    
                    // Add the active class after the specified delay
                    setTimeout(() => {
                        entry.target.classList.add('animate--active');
                    }, delay);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

<style>
    /* Base animate class - hide elements by default */
    .animate {
        opacity: 0;
        will-change: transform, opacity;
        pointer-events: none;
    }

    .animate.animate--active {
        animation-duration: 0.6s;
        animation-fill-mode: both;
        opacity: 1;
        pointer-events: auto;
    }

    /* Animation delays */
    .animate-delay-200 {
        animation-delay: 0.2s;
    }

    .animate-delay-400 {
        animation-delay: 0.4s;
    }

    .animate-delay-600 {
        animation-delay: 0.6s;
    }

    .animate-delay-800 {
        animation-delay: 0.8s;
    }

    .animate-delay-1000 {
        animation-delay: 1s;
    }

    /* Entrance Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -30px, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .animate.animate--active.fadeInDown {
        animation-name: fadeInDown;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .animate.animate--active.slideInDown {
        animation-name: slideInDown;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .animate.animate--active.fadeIn {
        animation-name: fadeIn;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }
</style> 