<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-blue-200 via-gray-100 via-green-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-blue.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl leading-tight pb-2 opacity-0 animate fadeInDown">
                    Web Design
                </h1>
                <p class="mt-4 text-xl text-purple-900 max-w-2xl mx-auto leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                    Create a stunning online presence that converts visitors into customers. Our web design services combine beautiful aesthetics with strategic functionality to deliver websites that not only look great but drive results.
                </p>
            </div>

            <!-- Transparency Section -->
            <div class="mt-12">
                <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-6 rounded-tr-[2rem] rounded-bl-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown">
                    <h2 class="text-2xl font-extrabold bg-gradient-to-r from-purple-200 via-purple-100 to-indigo-200 bg-clip-text text-transparent mb-4">Design That Converts</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">User-Focused Design</h3>
                                    <p class="text-purple-100">Every element is designed with your users in mind, creating intuitive and engaging experiences.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Mobile-First Approach</h3>
                                    <p class="text-purple-100">Your website will look and perform perfectly on all devices, from smartphones to desktops.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Conversion Optimization</h3>
                                    <p class="text-purple-100">Strategic design elements guide visitors toward your business goals.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Performance Focused</h3>
                                    <p class="text-purple-100">Fast loading times and smooth interactions keep visitors engaged.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- One-Time Services -->
            <div class="mt-12">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent text-center mb-8 opacity-0 animate fadeInDown">One-Time Web Design Services</h2>
                <div class="max-w-3xl mx-auto mb-12">
                    <p class="text-lg text-purple-900 text-center leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                        Perfect for businesses looking to establish or refresh their online presence. Our one-time services provide a solid foundation for your digital journey, whether you're launching a new website or giving your existing site a modern makeover.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Budget Website -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown">
                        <div class="absolute top-0 right-0 bg-rose-500 text-white px-10 py-1 rotate-6 translate-x-1 translate-y-1 w-[180px] text-center rounded-bl-2xl whitespace-nowrap">Budget Friendly</div>
                        <h3 class="text-2xl font-bold text-white mb-4">Budget Website</h3>
                        <div class="text-4xl font-bold text-white mb-6">$500</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">3 Pages</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Mobile Responsive Design</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Contact Form</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic SEO Setup</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">1 Month Free Support</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Basic Website -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-200">
                        <h3 class="text-2xl font-bold text-white mb-4">Basic Website</h3>
                        <div class="text-4xl font-bold text-white mb-6">$900</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">5 Pages</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Mobile Responsive Design</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Contact Form</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic SEO Setup</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">3 Months Free Support</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Business Website -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown animate-delay-400">
                        <div class="absolute top-0 right-0 bg-rose-500 text-white px-12 py-1 rotate-6 translate-x-4 translate-y-1 w-[180px] text-center rounded-bl-2xl">
                            Best Value
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Business Website</h3>
                        <div class="text-4xl font-bold text-white mb-6">$1,800</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">10 Pages</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Mobile Design</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Blog Integration</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced SEO Setup</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">6 Months Free Support</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Performance Optimization</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- E-commerce Website -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-600">
                        <h3 class="text-2xl font-bold text-white mb-4">E-commerce Website</h3>
                        <div class="text-4xl font-bold text-white mb-6">$3,200</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Unlimited Products</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Secure Payment Gateway</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Inventory Management</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced SEO & Marketing</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">1 Year Free Support</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Analytics Setup</span>
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
                            <h3 class="text-xl font-bold text-white mb-2">How long does it take to build a website?</h3>
                            <p class="text-purple-100">A basic website typically takes 2-3 weeks, while more complex sites can take 4-6 weeks. We'll provide a detailed timeline during our initial consultation.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-200">
                            <h3 class="text-xl font-bold text-white mb-2">Do I need to provide content?</h3>
                            <p class="text-purple-100">Yes, you'll need to provide the content for your website. We can help with content creation as an additional service if needed.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-400">
                            <h3 class="text-xl font-bold text-white mb-2">Will my website be mobile-friendly?</h3>
                            <p class="text-purple-100">Absolutely! All our websites are designed with a mobile-first approach, ensuring they look and function perfectly on all devices.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-600">
                            <h3 class="text-xl font-bold text-white mb-2">What happens after the website is launched?</h3>
                            <p class="text-purple-100">We provide 30 days of free support after launch, and we offer maintenance packages to keep your site secure and up-to-date.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-800">
                            <h3 class="text-xl font-bold text-white mb-2">Can I update the website myself?</h3>
                            <p class="text-purple-100">Yes, we build websites with user-friendly content management systems that allow you to make updates easily.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-1000">
                            <h3 class="text-xl font-bold text-white mb-2">Do you offer website hosting?</h3>
                            <p class="text-purple-100">Yes, we offer reliable hosting services with 99.9% uptime guarantee, regular backups, and security monitoring.</p>
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