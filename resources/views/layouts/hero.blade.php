<!-- Hero Section with Swiper -->


 {{-- try --}}
 <section class="relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="relative h-[400px] sm:h-[500px] md:h-[600px]">
                    <div class="h-full bg-center bg-cover" style="background-image: url('{{ asset('images/hero/slider-1-1.png') }}');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                    </div>
                    <!-- Content -->
                    {{-- <div class="absolute inset-0 flex items-center px-4 sm:px-8 md:px-24 lg:px-48">
                        <div class="text-left w-full max-w-3xl mx-auto flex flex-col justify-center h-full sm:block">
                            <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-extrabold text-white leading-tight sm:leading-none">
                                We'll help you
                                <div class="text-white -mt-1 sm:-mt-2">Settle in Canada</div>
                            </h1>
                         
                            <h1 class="text-sm sm:text-md md:text-lg lg:text-2xl font-light text-white leading-relaxed -mt-0 sm:mt-2">
                                Settlement Process in Canada
                            </h1>
                            
                            <button type="button" class="w-[160px] sm:w-auto py-2 sm:py-3.5 sm:mt-4 px-3 sm:px-4 text-xs sm:text-sm font-medium text-white rounded-sm border hover:bg-white hover:text-blue-700 bg-transparent focus:z-10 focus:ring-4 focus:ring-gray-100 block sm:inline-block transition-colors duration-200">READ MORE</button>

                        </div>
                    </div> --}}
                    {{-- content --}}
                    <div class="absolute inset-0 flex items-center px-4 sm:px-8 md:px-24 lg:px-48">
                        <div class="text-center sm:text-left w-full max-w-3xl mx-auto flex flex-col justify-center items-center sm:items-start h-full">
                            <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-extrabold text-white leading-tight sm:leading-none">
                                We'll help you
                                <div class="text-white -mt-1 sm:-mt-2">Settle in Canada</div>
                            </h1>
                         
                            <h1 class="text-sm sm:text-md md:text-lg lg:text-2xl font-light text-white leading-relaxed -mt-0 sm:mt-2">
                                Settlement Process in Canada
                            </h1>
                            
                            <button type="button" class="w-[160px] sm:w-auto py-2 sm:py-3.5 sm:mt-4 px-3 sm:px-4 text-xs sm:text-sm font-medium text-white rounded-sm border hover:bg-white hover:text-blue-700 bg-transparent focus:z-10 focus:ring-4 focus:ring-gray-100 block sm:inline-block transition-colors duration-200">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="relative h-[400px] sm:h-[500px] md:h-[600px]">
                    <div class="h-full bg-center bg-cover" style="background-image: url('{{ asset('images/hero/slider-2-1.png') }}');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                    </div>
                    <!-- Content -->
                    <div class="absolute inset-0 flex items-center px-4 sm:px-8 md:px-24 lg:px-48">
                        <div class="text-center sm:text-left w-full max-w-3xl mx-auto flex flex-col justify-center items-center sm:items-start h-full">
                            <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-extrabold text-white leading-tight sm:leading-none">
                                Airport Pick up
                                <div class="text-white -mt-1 sm:-mt-2">and moving</div>
                            </h1>
                            <h1 class="text-sm sm:text-md md:text-lg lg:text-2xl font-light text-white leading-relaxed -mt-0 sm:mt-2">
                                Settlement Process in Canada
                            </h1>
                            {{-- <button type="submit" class="w-full sm:w-auto px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base text-white rounded-sm bg-transperent border hover:bg-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-[#E01C22] mt-4 sm:mt-6 transition-colors duration-200">
                                READ MORE
                            </button> --}}
                            <button type="button" class="w-[160px] sm:w-auto py-2 sm:py-3.5 sm:mt-4 px-3 sm:px-4 text-xs sm:text-sm font-medium text-white rounded-sm border hover:bg-white hover:text-blue-700 bg-transparent focus:z-10 focus:ring-4 focus:ring-gray-100 block sm:inline-block transition-colors duration-200">READ MORE</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="relative h-[400px] sm:h-[500px] md:h-[600px]">
                    <div class="h-full bg-center bg-cover" style="background-image: url('{{ asset('images/hero/slider-3-1.png') }}');">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                    </div>
                    <!-- Content -->
                    <div class="absolute inset-0 flex items-center px-4 sm:px-8 md:px-24 lg:px-48">
                        <div class="text-center sm:text-left w-full max-w-4xl mx-auto flex flex-col justify-center items-center sm:items-start h-full">
                            <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-7xl xl:text-8xl font-extrabold text-white leading-tight sm:leading-none">
                                We'll help you with
                                <div class="text-white -mt-1 sm:-mt-2">Accomodations</div>
                            </h1>
                            <h1 class="text-sm sm:text-md md:text-lg lg:text-2xl font-light text-white leading-relaxed -mt-0 sm:mt-2">
                                Settlement Process in Canada
                            </h1>
                            {{-- <button type="button" class="w-[200px] mx-auto sm:w-auto px-3 sm:px-2 py-2 sm:py-3 text-xs sm:text-base text-white rounded-sm bg-transperent border hover:bg-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-[#E01C22] mt-4 sm:mt-6 transition-colors duration-200 block sm:inline-block">
                                READ MORE
                            </button> --}}
                            {{-- <button type="button" class="py-3.5 px-4 me-2 mb-2 text-sm font-medium text-white rounded-sm border hover:bg-gray-100 hover:text-blue-700 bg-transparent focus:z-10 focus:ring-4 focus:ring-gray-100">READ MORE</button> --}}
                             <button type="button" class="w-[160px] sm:w-auto py-2 sm:py-3.5 sm:mt-4 px-3 sm:px-4 text-xs sm:text-sm font-medium text-white rounded-sm border hover:bg-white hover:text-blue-700 bg-transparent focus:z-10 focus:ring-4 focus:ring-gray-100 block sm:inline-block transition-colors duration-200">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next hidden sm:flex"></div>
        <div class="swiper-button-prev hidden sm:flex"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>






<!-- Check if user is authenticated in Blade and pass it to Alpine.js -->
<script>
    document.addEventListener('alpine:init', () => {
        // Check if user is authenticated
        const isAuthenticated = @json(auth()->check());

        // Set wishlist based on authentication status
        @auth
            const userWishlists = @json(auth()->user()->wishlists()->pluck('movie_id')->toArray());
        @else
            const userWishlists = [];
        @endauth

        // Create Alpine.js stores
        Alpine.store('wishlist', userWishlists);
        Alpine.store('isAuthenticated', isAuthenticated);

        // Toggle wishlist function
        window.toggleWishlist = function(movieId) {
            if (!Alpine.store('isAuthenticated')) {
                alert('Login to add wishlist');
                return;
            }

            fetch('/wishlist/toggle', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ movie_id: movieId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let wishlist = Alpine.store('wishlist');
                    if (data.added) {
                        wishlist.push(movieId);
                    } else {
                        Alpine.store('wishlist', wishlist.filter(id => id !== movieId));
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        };
    });
</script>




{{-- null end --}}

{{-- <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('wishlist', @json(auth()->user()->wishlists()->pluck('movie_id')->toArray() ?? []));

                window.toggleWishlist = function(movieId) {
            fetch('/wishlist/toggle', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ movie_id: movieId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error === 'User not authenticated') {
                    alert('You must be logged in to add to wishlist!');
                    return;
                }

                if (data.success) {
                    let wishlist = Alpine.store('wishlist');
                    if (data.added) {
                        wishlist.push(movieId);
                    } else {
                        Alpine.store('wishlist', wishlist.filter(id => id !== movieId));
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        };


    });
</script> --}}


