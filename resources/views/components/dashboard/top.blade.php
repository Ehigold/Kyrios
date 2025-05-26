<section class="fixed top-0 left-0 right-0 z-50 w-full bg-white">
    <div class="flex flex-col items-center justify-between p-2 px-4 md:flex-row md:px-8">
        {{-- Logo Section --}}
        <div class="flex items-center justify-between w-full md:w-auto">
            <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                class="p-2 text-gray-600 rounded cursor-pointer lg:hidden">
                <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="#bb2127" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="w-[150px] md:w-[250px] justify-center text-center">
                <img id="image-preview" src="{{ getLogo('logo')->large }}" alt="Image preview"
                    class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
        </div> <img id="image-preview" src="{{ getLogo('logo')->large }}" alt="Image preview"
            class="w-full h-48 object-cover rounded-lg shadow-md">

        {{-- Search Bar --}}
        <form action="" method="GET" class="relative w-full my-4 md:max-w-md md:my-0">
            <input type="text" name="query" placeholder="Quick Search"
                class="block w-full p-2 pl-10 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                style="border: none;" />
            <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5" fill="none" stroke="#bb2127" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 17a6 6 0 100-12 6 6 0 000 12zm0 0l6 6m-6-6h6" />
                </svg>
            </button>
        </form>

        {{-- Icons Section --}}
        <div class="flex items-center space-x-4">
            {{-- Notification --}}
            <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2">
                <div class="relative">
                    <div class="absolute top-0 w-2 h-2 bg-red-500 rounded-full -right-1"></div>
                    <svg class="w-6 h-6" fill="blue" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </div>
            </button>

            {{-- User Profile --}}
            <div class="flex items-center space-x-3">
                <div class="hidden font-medium text-black md:block dark:text-gray-200 font-roboto">
                    {{ Auth::user()->first_name }}
                </div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full" id="user-menu-button-2">
                    {{-- <img class="w-8 h-8 rounded-full"
                        src="{{ Auth::user()->media->path ?? asset('images/default/default-avarter.svg') }}"
                        alt="user photo"> --}}
                </button>
            </div>
        </div>
    </div>
</section>
