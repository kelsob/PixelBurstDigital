<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-blue-200 via-gray-100 via-green-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-purple.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl leading-tight pb-2 opacity-0 animate fadeInDown">
                    Search Engine Optimization
                </h1>
                <p class="mt-4 text-xl text-purple-900 max-w-2xl mx-auto leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                    Boost your online visibility and drive organic traffic with our comprehensive SEO services. We combine technical expertise with strategic content optimization to help your business rank higher in search results.
                </p>
            </div>

            <!-- Transparency Section -->
            <div class="mt-12">
                <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-6 rounded-tr-[2rem] rounded-bl-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown">
                    <h2 class="text-2xl font-extrabold bg-gradient-to-r from-purple-200 via-purple-100 to-indigo-200 bg-clip-text text-transparent mb-4">No SEO Jargon, Just Results</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Clear Communication</h3>
                                    <p class="text-purple-100">We explain everything in plain English. No confusing technical terms or industry jargon.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Detailed Documentation</h3>
                                    <p class="text-purple-100">Every change and improvement is thoroughly documented and explained in your monthly reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Transparent Process</h3>
                                    <p class="text-purple-100">We show you exactly what we're doing and why, with regular updates on progress and results.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-white">Measurable Results</h3>
                                    <p class="text-purple-100">Track your progress with clear metrics and regular performance reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- One-Time Services -->
            <div class="mt-12">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent text-center mb-8 opacity-0 animate fadeInDown">One-Time SEO Services</h2>
                <div class="max-w-3xl mx-auto mb-12">
                    <p class="text-lg text-purple-900 text-center leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                        Perfect for businesses looking to understand their current SEO status or make immediate improvements. Our one-time services provide a solid foundation for your SEO journey, whether you're just starting out or need a fresh perspective on your existing strategy. While these services offer valuable insights and improvements, remember that SEO is an ongoing process that requires consistent attention to maintain and improve rankings.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Basic SEO Audit -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown">
                        <h3 class="text-2xl font-bold text-white mb-4">Basic SEO Audit</h3>
                        <div class="text-4xl font-bold text-white mb-6">$250</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Essential Technical Checks</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Keyword Analysis</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Meta Tag Review</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Quick Action Plan</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Comprehensive SEO Audit -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-200">
                        <h3 class="text-2xl font-bold text-white mb-4">Comprehensive SEO Audit</h3>
                        <div class="text-4xl font-bold text-white mb-6">$500</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Detailed Technical Analysis</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Content Quality Assessment</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Competitor Analysis</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Actionable Recommendations</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- SEO Cleanup -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 opacity-0 animate slideInDown animate-delay-400">
                        <h3 class="text-2xl font-bold text-white mb-4">SEO Cleanup</h3>
                        <div class="text-4xl font-bold text-white mb-6">$800</div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Technical SEO Fixes</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Meta Tag Optimization</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">URL Structure Cleanup</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Detailed Implementation Report</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>

            <!-- Monthly Service Packages -->
            <div class="mt-12">
                <h2 class="text-3xl font-extrabold bg-gradient-to-br from-purple-800 to-indigo-600 bg-clip-text text-transparent text-center mb-8 opacity-0 animate fadeInDown">Monthly SEO Packages</h2>
                <div class="max-w-3xl mx-auto mb-12">
                    <p class="text-lg text-purple-900 text-center leading-relaxed opacity-0 animate fadeIn animate-delay-400">
                        SEO is not a one-time fix but an ongoing process that requires consistent attention and adaptation. Search engines regularly update their algorithms, competitors are constantly optimizing their content, and market trends evolve. Our monthly packages provide continuous optimization, regular content updates, and ongoing strategy adjustments to help your business maintain and improve its search rankings over time. Choose the package that best fits your business size, goals, and budget.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Budget Package -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown">
                        <div class="absolute top-0 right-0 bg-rose-500 text-white px-10 py-1 rotate-6 translate-x-1 translate-y-1 w-[180px] text-center rounded-bl-2xl whitespace-nowrap">Budget Friendly</div>
                        <h3 class="text-2xl font-bold text-white mb-4">SEO Starter</h3>
                        <div class="text-4xl font-bold text-white mb-6">$500<span class="text-lg">/month</span></div>
                        <p class="text-purple-100 mb-6">Ideal for small businesses and startups looking to establish their online presence. Perfect for those who need basic SEO optimization while keeping costs manageable.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic SEO Audit</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Keyword Research (5 Keywords)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic On-Page Optimization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Monthly Performance Report</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Basic Package -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown animate-delay-200">
                        <h3 class="text-2xl font-bold text-white mb-4">SEO Essentials</h3>
                        <div class="text-4xl font-bold text-white mb-6">$800<span class="text-lg">/month</span></div>
                        <p class="text-purple-100 mb-6">Perfect for growing businesses that need a comprehensive SEO strategy. Best for companies looking to expand their online reach and compete more effectively in their market.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Keyword Research (10 Keywords)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">1 Blog Post Monthly</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">On-Page Optimization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Competitor Research</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Local SEO</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Monthly Performance Report</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Professional Package -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown animate-delay-400">
                        <div class="absolute top-0 right-0 bg-rose-500 text-white px-12 py-1 rotate-6 translate-x-4 translate-y-1 w-[180px] text-center rounded-bl-2xl">
                            Best Value
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">SEO Growth</h3>
                        <div class="text-4xl font-bold text-white mb-6">$1,500<span class="text-lg">/month</span></div>
                        <p class="text-purple-100 mb-6">Designed for established businesses seeking significant growth in competitive markets. Ideal for companies ready to invest in comprehensive SEO strategies and content marketing.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Everything in Essentials, plus:</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Keyword Research (25 Keywords)</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">2 Blog Posts Monthly</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Local SEO</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Competitor Research</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Basic Backlink Building</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Bi-weekly Performance Reports</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Get Started
                        </a>
                    </div>

                    <!-- Enterprise Package -->
                    <div class="relative bg-gradient-to-br from-purple-800 to-indigo-600 p-8 rounded-[2rem] shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-700/20 overflow-hidden opacity-0 animate slideInDown animate-delay-600">
                        <h3 class="text-2xl font-bold text-white mb-4">SEO Enterprise</h3>
                        <div class="text-4xl font-bold text-white mb-6">$4,000<span class="text-lg">/month</span></div>
                        <p class="text-purple-100 mb-6">Tailored for large organizations and market leaders requiring maximum visibility and comprehensive optimization. Perfect for businesses operating in highly competitive industries with multiple locations or service areas.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Everything in Growth, plus:</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Unlimited Keyword Research</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">4 Blog Posts Monthly</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Technical SEO Optimization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Comprehensive Competitor Analysis</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Advanced Backlink Building</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-6 w-6 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-purple-100">Weekly Performance Reports</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-white text-purple-600 font-bold rounded-xl hover:bg-purple-50 transition-colors duration-300">
                            Contact for Quote
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
                            <h3 class="text-xl font-bold text-white mb-2">How long until I see results?</h3>
                            <p class="text-purple-100">SEO is a long-term strategy, and results typically start appearing within 3-6 months. However, some technical improvements may show results sooner. We'll provide regular reports to track progress and ensure you're always informed about your site's performance.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-200">
                            <h3 class="text-xl font-bold text-white mb-2">What happens if I need to pause my subscription?</h3>
                            <p class="text-purple-100">All our SEO contracts are cancellable at any time with no obligation. We understand that business needs can change, and we want to make sure you're comfortable with the commitment. There are no long-term contracts or cancellation fees.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-400">
                            <h3 class="text-xl font-bold text-white mb-2">What makes your SEO approach different?</h3>
                            <p class="text-purple-100">We believe in complete transparency and clear communication. You'll never be left wondering what we're doing or why. Every action we take is documented and explained in plain English, not technical jargon. We're always available to answer questions and provide updates. Our goal is to make SEO understandable and accessible, ensuring you're fully informed about your investment.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-600">
                            <h3 class="text-xl font-bold text-white mb-2">Do you guarantee rankings?</h3>
                            <p class="text-purple-100">While we can't guarantee specific rankings (as search engines don't allow this), we do guarantee our work and commitment to improving your site's visibility through proven SEO strategies.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-800">
                            <h3 class="text-xl font-bold text-white mb-2">What's included in the monthly reports?</h3>
                            <p class="text-purple-100">Our reports include keyword rankings, organic traffic growth, conversion metrics, technical SEO improvements, content performance, and actionable recommendations for further optimization.</p>
                        </div>
                        <div class="opacity-0 animate slideInDown animate-delay-1000">
                            <h3 class="text-xl font-bold text-white mb-2">Can I cancel my subscription?</h3>
                            <p class="text-purple-100">Yes, you can cancel your subscription at any time. However, we recommend maintaining SEO services for at least 3-6 months to begin seeing meaningful results from our optimization efforts.</p>
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