<header class="bg-white shadow-sm ">
    <!-- Top contact bar -->
    <div class="bg-gray-100 py-2 px-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-sm text-gray-600">
                Contact us on <a href="tel:+14099217898" class="font-semibold hover:text-blue-600">+1 (409) 921 - 7898</a>
            </div>
            <div>
                <a href="mailto:info@jetsettlerserviceinfo.co" class="text-sm text-gray-600 hover:text-blue-600">info@jetsettlerserviceinfo.co</a>
            </div>
        </div>
    </div>

    <!-- Main navigation -->
    <nav class="container mx-auto py-4 px-4">
        <div class="flex justify-between items-center">
            <!-- Logo would go here -->
            <div>
                <x-application-logo />
            </div>

            <!-- Desktop navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">HOME</a>
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">ABOUT</a>

                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">SERVICES</a>
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">PACKAGES</a>
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">CONSULTATION</a>
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">BLOG</a>
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">CONTACT</a>
            </div>
            <!-- Theme toggle -->
            <div class="flex items-center gap-2">
                <x-theme-toggle/>

            </div>


            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu (hidden by default) -->
        <div id="mobile-menu" class="md:hidden hidden py-4">
            <div class="flex flex-col space-y-4">
                <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">HOME</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium">ABOUT</a>

                <a href="/services" class="text-gray-700 hover:text-blue-600 font-medium">SERVICES</a>
                <a href="/packages" class="text-gray-700 hover:text-blue-600 font-medium">PACKAGES</a>
                <a href="/consultation" class="text-gray-700 hover:text-blue-600 font-medium">CONSULTATION</a>
                <a href="/blog" class="text-gray-700 hover:text-blue-600 font-medium">BLOG</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium">CONTACT</a>
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle functionality
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>




