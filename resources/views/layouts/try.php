@php
    use App\Enums\UserRole;
@endphp

{{-- <header class="text-white bg-gray-100 border-b shadow dark:bg-gray-900 dark:text-white "> --}}
<header class="text-white bg-white border-b shadow-lg dark:bg-gray-900 dark:text-white dark:border-gray-700">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            {{-- <a href="/" class="text-2xl font-bold text-gray-700 dark:text-gray-100">MovieDb</a> --}}
            <x-application-logo />


            <!-- Mobile Menu Button -->
            {{-- <button id="menu-btn" class="block lg:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button> --}}
             <!-- Mobile Menu Button and Theme Toggle -->
           <div class="flex items-center gap-2 lg:hidden">
            <x-theme-toggle/>
            <button id="menu-btn" class="block focus:outline-none">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        {{-- mobile --}}

            <!-- Navigation -->
            <nav class="hidden space-x-6 lg:flex">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">Home</a>
                <a href="{{ route('movies') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">Movies</a>
                <a href="{{ route('tv-series') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">Series</a>
                {{-- <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">About</a>
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">Blog</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-400 dark:text-gray-100">Contact</a> --}}

        @php
            $pages = \App\Models\Pages::where('status', \App\Enums\PageStatus::Published->value)->get();
        @endphp

        @foreach($pages as $page)
                    <a href="{{ route('page.show', $page->slug) }}"
                    class="text-gray-700 hover:text-gray-400 dark:text-gray-100">
                        {{ $page->title }}
                    </a>
        @endforeach


            </nav>

            <!-- Search & Auth -->
            <div class="items-center hidden space-x-4 text-gray-700 dark:text-gray-100 lg:flex">

                <x-theme-toggle/>

                {{-- try --}}


                @auth
                <div class="relative">
                <button id="userDropdown" data-dropdown-toggle="user-dropdown" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-100 hover:text-red-500">
                {{ Auth::user()->first_name }}
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                </button>

                <div id="user-dropdown" class="absolute right-0 z-10 hidden w-48 py-2 mt-2 bg-gray-100 border border-gray-700 rounded-lg shadow-xl dark:bg-gray-900">
                {{-- <a href="{{ Auth::user()->user_role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="block px-4 py-2 text-sm text-gray-200 dark:text-gray-700 hover:bg-gray-700 hover:text-red-500">
                Dashboard
                </a> --}}

                <a href="{{ Auth::user()->user_role == UserRole::Admin->value ? route('admin.dashboard') : route('user.dashboard') }}"
                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-100 hover:bg-gray-700 hover:text-red-500">
                     Dashboard
                 </a>

                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 dark:text-gray-100 hover:bg-gray-700 hover:text-red-500">
                Logout
                </button>
                </form>
                </div>
                </div>
                @auth
                @else
                <div class="flex items-center gap-2">
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-red-500 dark:text-gray-100">Login</a>
                <span class="text-gray-400">|</span>
                <a href="{{ route('register') }}" class="text-sm font-medium text-gray-700 hover:text-red-500 dark:text-gray-100">Register</a>
                </div>
                @endauth


    {{-- try --}}
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="flex flex-col hidden py-2 space-y-2 border-t border-gray-700 dark:border-gray-100 lg:hidden">
            <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-800 dark:text-gray-100">Home</a>
            <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-800 dark:text-gray-100">Movies</a>
            <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-800 dark:text-gray-100">Series</a>
                @foreach($pages as $page)
                    <a href="{{ route('page.show', $page->slug) }}"
                    class="text-gray-700 hover:text-gray-400 dark:text-gray-100">
                        {{ $page->title }}
                    </a>
        @endforeach
            {{-- <input type="text" placeholder="Search..." class="px-4 py-2 text-white bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-gray-500"> --}}
            @else
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-800 dark:text-gray-100">Login</a>
            <a href="#" class="block px-4 py-2 text-center bg-red-600 rounded hover:bg-red-700">Sign Up</a>
            @endauth

            {{-- try --}}

            {{-- try --}}
        </div>



        {{-- mobile menu --}}

    </div>

</header>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>





<section class="relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="relative h-[500px]">
                        <!-- Background Image -->
                        <div class="h-full bg-center bg-cover" style="background-image: url('{{ asset('images/hero/slider-1-1.png') }}');">
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                        </div>
                        <img src="{{ asset('images/hero/slider-2-1.png') }}"
                        class="object-cover w-full transition-transform duration-300 rounded-lg h-36 group-hover:scale-105">



                        <!-- Content -->
                        <div class="absolute inset-0 flex items-center justify-center px-6">
                            <div class="text-center">
                                <h1 class="mb-4 text-5xl font-extrabold text-white dark:text-white"></h1>
                                <div class="flex items-center justify-center gap-4 mb-4 text-sm">
                                    {{-- <span class="px-3 py-1 bg-gray-700 rounded-md">{{ $movie->types }}</span> --}}
                                </div>

                                {{-- <div class="flex items-center justify-center gap-4">
                                    <button class="px-6 py-3 text-sm font-bold text-white transition bg-red-500 rounded-md hover:bg-red-600">
                                        Watch Now ▶
                                    </button>




                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Navigation -->
       <!-- Navigation -->
<div class="swiper-button-next !text-white"></div>
<div class="swiper-button-prev !text-white"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

</section>



<!-- card -->


<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">Reasons for Choosing Our Consultancy</h2>

      <div class="space-y-8">
        <!-- Benefit 1 -->
        <div class="flex flex-col md:flex-row gap-6 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Tailored Advice and Support</h3>
            <p class="text-gray-600 leading-relaxed">
              We are always available and dedicated to answer any questions you may have and make your journey as enjoyable and hassle-free as possible, so you can focus on what matters most – <span class="font-medium text-blue-600">YOUR TRAVELS</span>.
            </p>
          </div>
        </div>

        <!-- Benefit 2 -->
        <div class="flex flex-col md:flex-row gap-6 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
          <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Flexibility to Serve You Better</h3>
            <p class="text-gray-600 leading-relaxed">
              We understand that everyone's travel plans are different. Whether you're looking for budget-friendly options or luxury accommodations, we'll work with you to create a personalized plan that perfectly meets your needs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- contact -->

  <section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
      <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
        <!-- SVG Illustration -->
        <div class="w-full md:w-1/2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-auto text-blue-500">
            <path fill="currentColor" d="M480 32H32C14.3 32 0 46.3 0 64v384c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32zm-32 320H64v-64h384v64zm0-96H64v-64h384v64zm0-96H64V96h384v64z"/>
            <path fill="currentColor" d="M128 160c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm0 96c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm0 96c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" opacity="0.4"/>
          </svg>
        </div>

        <!-- Text Content -->
        <div class="w-full md:w-1/2">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Assistance with Accommodation</h2>
          <p class="text-lg text-gray-600 mb-6 leading-relaxed">
            We provide comprehensive support to help you find the perfect temporary or permanent housing solution. Our service includes:
          </p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span class="text-gray-700">Personalized property search based on your needs and budget</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span class="text-gray-700">Neighborhood orientation and area information</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-blue-500 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span class="text-gray-700">Lease agreement review and negotiation</span>
            </li>
          </ul>
          <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors duration-300">
            Get Accommodation Help
          </a>
        </div>
      </div>
    </div>
  </section>
