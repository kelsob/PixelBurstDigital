<x-app-layout>
    <div class="pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Let's Work Together
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Have a project in mind? We'd love to hear about it.
                </p>
            </div>

            <div class="mt-20 lg:grid lg:grid-cols-3 lg:gap-8">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <div class="space-y-8">
                        <!-- Email -->
                        <div>
                            <h3 class="text-lg font-medium text-white">Email</h3>
                            <div class="mt-3 text-gray-300">
                                <a href="mailto:hello@pixelcraft.studio" class="hover:text-blue-400">
                                    hello@pixelcraft.studio
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <h3 class="text-lg font-medium text-white">Phone</h3>
                            <div class="mt-3 text-gray-300">
                                <a href="tel:+1234567890" class="hover:text-blue-400">
                                    (123) 456-7890
                                </a>
                            </div>
                        </div>

                        <!-- Office -->
                        <div>
                            <h3 class="text-lg font-medium text-white">Office</h3>
                            <div class="mt-3 text-gray-300">
                                <p>123 Design Street</p>
                                <p>Creative District</p>
                                <p>San Francisco, CA 94103</p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div>
                            <h3 class="text-lg font-medium text-white">Follow Us</h3>
                            <div class="mt-4 flex space-x-6">
                                <a href="#" class="text-gray-400 hover:text-blue-400">
                                    <span class="sr-only">Twitter</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-blue-400">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-blue-400">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="mt-12 lg:mt-0 lg:col-span-2">
                    <div class="bg-gray-800 rounded-lg p-8">
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-white">Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" 
                                           class="block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:ring-blue-400 focus:border-blue-400"
                                           required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-white">Email</label>
                                <div class="mt-1">
                                    <input type="email" name="email" id="email" 
                                           class="block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:ring-blue-400 focus:border-blue-400"
                                           required>
                                </div>
                            </div>

                            <!-- Project Type -->
                            <div>
                                <label for="project_type" class="block text-sm font-medium text-white">Project Type</label>
                                <div class="mt-1">
                                    <select name="project_type" id="project_type" 
                                            class="block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:ring-blue-400 focus:border-blue-400">
                                        <option value="web_development">Web Development</option>
                                        <option value="branding">Branding & Identity</option>
                                        <option value="product_design">Product Design</option>
                                        <option value="content_marketing">Content Marketing</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Budget Range -->
                            <div>
                                <label for="budget" class="block text-sm font-medium text-white">Budget Range</label>
                                <div class="mt-1">
                                    <select name="budget" id="budget" 
                                            class="block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:ring-blue-400 focus:border-blue-400">
                                        <option value="5k-10k">$5,000 - $10,000</option>
                                        <option value="10k-25k">$10,000 - $25,000</option>
                                        <option value="25k-50k">$25,000 - $50,000</option>
                                        <option value="50k+">$50,000+</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-white">Project Details</label>
                                <div class="mt-1">
                                    <textarea name="message" id="message" rows="4" 
                                              class="block w-full bg-gray-700 border-gray-600 rounded-md shadow-sm py-2 px-3 text-white focus:ring-blue-400 focus:border-blue-400"
                                              required></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" 
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-blue-400 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 