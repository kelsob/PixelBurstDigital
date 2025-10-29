<x-app-layout>
    @include('layouts.navigation')
    <div class="fixed inset-0 -z-10 h-screen font-sans antialiased bg-gradient-to-br from-green-200 via-gray-100 via-red-200"></div>

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4 pt-12 min-h-screen flex items-center justify-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Success Animation Container -->
            <div class="mb-8 flex justify-center">
                <div class="relative">
                    <!-- Animated checkmark circle -->
                    <div class="check-circle w-32 h-32 mx-auto mb-8 rounded-full bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center shadow-[6px_6px_0px_0px_rgba(34,197,94,0.3)] animate-bounce-once">
                        <svg class="w-16 h-16 text-white animate-check-draw" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="check-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    
                    <!-- Floating celebration elements -->
                    <div class="absolute -top-4 -left-4 animate-float-celebration">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div class="absolute -top-2 -right-6 animate-float-celebration" style="animation-delay: 0.2s;">
                        <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="12"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -left-6 animate-float-celebration" style="animation-delay: 0.4s;">
                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Main Thank You Content -->
            <div class="relative bg-gradient-to-br from-green-600 to-blue-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[6px_6px_0px_0px_rgba(34,197,94,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 animate-slide-up">
                <div class="bg-gradient-to-br from-green-900 to-blue-900 p-8 md:p-12 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                    <h1 class="text-4xl md:text-6xl font-extrabold bg-gradient-to-br from-green-200 to-blue-200 bg-clip-text text-transparent mb-6 animate-text-glow">
                        Thank You!
                    </h1>
                    
                    <div class="space-y-6 text-green-100">
                        <p class="text-xl md:text-2xl font-semibold">
                            🎉 Your message has been successfully sent!
                        </p>
                        
                        <p class="text-lg md:text-xl max-w-2xl mx-auto">
                            We're excited to hear from you and will get back to you within 24 hours. 
                            Our team is already reviewing your inquiry and preparing a personalized response.
                        </p>
                        
                        <div class="bg-gradient-to-r from-green-500/20 to-blue-500/20 rounded-lg p-6 border border-green-400/30">
                            <h3 class="text-lg font-semibold text-green-200 mb-2">What happens next?</h3>
                            <ul class="text-left space-y-2 max-w-md mx-auto">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    We'll review your project requirements
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Prepare a customized proposal for you
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Reach out with next steps
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Redirect Timer -->
                    <div class="mt-8 p-4 bg-blue-500/20 rounded-lg border border-blue-400/30">
                        <p class="text-blue-200 text-sm">
                            Redirecting to our portfolio in <span id="countdown" class="font-bold text-blue-100">8</span> seconds...
                        </p>
                        <div class="mt-2 w-full bg-blue-800/50 rounded-full h-2">
                            <div id="progress-bar" class="bg-gradient-to-r from-blue-400 to-green-400 h-2 rounded-full transition-all duration-1000 ease-linear" style="width: 0%"></div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('portfolio') }}" 
                           class="group relative flex items-center justify-center px-8 py-3 text-lg font-medium rounded-bl-lg rounded-tr-lg text-green-50 overflow-hidden transition-all duration-300 shadow-[4px_4px_0px_0px_rgba(34,197,94,0.3)] hover:shadow-[6px_6px_0px_0px_rgba(59,130,246,0.4)] transform hover:-translate-x-0.5 hover:-translate-y-0.5">
                            <span class="absolute inset-0 bg-gradient-to-br from-green-500 to-blue-500"></span>
                            <span class="absolute inset-0 bg-gradient-to-br from-green-400 to-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <span class="relative">View Our Work</span>
                        </a>
                        
                        <a href="{{ route('home') }}" 
                           class="group relative flex items-center justify-center px-8 py-3 text-lg font-medium rounded-tr-lg rounded-bl-lg text-blue-100 overflow-hidden transition-all duration-300 border-2 border-blue-400/50 hover:border-green-400/50 transform hover:translate-x-0.5 hover:-translate-y-0.5">
                            <span class="relative">Return Home</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes bounce-once {
            0%, 20%, 53%, 80%, 100% {
                transform: translate3d(0,0,0);
            }
            40%, 43% {
                transform: translate3d(0,-15px,0);
            }
            70% {
                transform: translate3d(0,-7px,0);
            }
            90% {
                transform: translate3d(0,-2px,0);
            }
        }

        @keyframes check-draw {
            0% {
                stroke-dasharray: 0 50;
                stroke-dashoffset: 0;
            }
            100% {
                stroke-dasharray: 50 0;
                stroke-dashoffset: 0;
            }
        }

        @keyframes float-celebration {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg) scale(1); 
            }
            25% { 
                transform: translateY(-8px) rotate(90deg) scale(1.1); 
            }
            50% { 
                transform: translateY(-16px) rotate(180deg) scale(1.2); 
            }
            75% { 
                transform: translateY(-8px) rotate(270deg) scale(1.1); 
            }
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes text-glow {
            0%, 100% {
                text-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
            }
            50% {
                text-shadow: 0 0 30px rgba(34, 197, 94, 0.6), 0 0 40px rgba(59, 130, 246, 0.3);
            }
        }

        .animate-bounce-once {
            animation: bounce-once 2s ease-in-out;
        }

        .animate-check-draw {
            animation: check-draw 1s ease-in-out 0.5s forwards;
        }

        .check-path {
            stroke-dasharray: 50;
            stroke-dashoffset: 50;
        }

        .animate-float-celebration {
            animation: float-celebration 3s ease-in-out infinite;
        }

        .animate-slide-up {
            animation: slide-up 0.8s ease-out 0.3s both;
        }

        .animate-text-glow {
            animation: text-glow 2s ease-in-out infinite;
        }
    </style>

    <!-- Auto-redirect Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let timeLeft = 8;
            const countdownElement = document.getElementById('countdown');
            const progressBar = document.getElementById('progress-bar');
            
            // Update progress bar immediately
            progressBar.style.width = '0%';
            
            const timer = setInterval(function() {
                timeLeft--;
                countdownElement.textContent = timeLeft;
                
                // Update progress bar
                const progressPercentage = ((8 - timeLeft) / 8) * 100;
                progressBar.style.width = progressPercentage + '%';
                
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    window.location.href = "{{ route('portfolio') }}";
                }
            }, 1000);
            
            // Allow users to cancel auto-redirect by interacting with the page
            let userInteracted = false;
            const cancelAutoRedirect = function() {
                if (!userInteracted) {
                    userInteracted = true;
                    clearInterval(timer);
                    countdownElement.parentElement.innerHTML = '<p class="text-blue-200 text-sm">Auto-redirect cancelled. Feel free to browse at your own pace!</p>';
                }
            };
            
            // Cancel auto-redirect on any user interaction
            document.addEventListener('click', cancelAutoRedirect);
            document.addEventListener('keydown', cancelAutoRedirect);
            document.addEventListener('scroll', cancelAutoRedirect);
        });
    </script>
</x-app-layout>

