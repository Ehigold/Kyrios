@section('title', $pageTitle ?? 'Home')
@include('layouts.head')
@include('layouts.navigation')
{{-- <x-notification /> --}}

    <div class="block">
        {{-- Display Error --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    </div>

<!-- Hero Section -->
{{-- <section class="bg-[#1f1a6e] text-white text-center py-20 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
            Skip the Queue<br><span class="text-green-400">Pay in Seconds with Just a Scan</span>
        </h1>
        <p class="text-lg md:text-xl mb-6">The future of fast, secure, and contactless payments. Experience seamless transactions in just a few seconds.</p>
        <div class="flex justify-center">
            <img src="{{ asset('images/phone.png') }}" alt="About Kyrios" class="w-[900px] max-w-md md:max-w-lg transition-transform hover:scale-105 duration-300" />
        </div>
    </div>
</section> --}}

<section class="bg-[#1f1a6e] text-white text-center py-20 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
            Skip the Queue<br><span class="text-green-400">Pay in Seconds with Just a Scan</span>
        </h1>
        <p class="text-lg md:text-xl mb-6">The future of fast, secure, and contactless payments. Experience seamless transactions in just a few seconds.</p>
        <div class="flex justify-center -mb-20 ">
            <img src="{{ asset('images/phone.png') }}" alt="About Kyrios" class="w-[380px] max-[950px] md:max-[950px] transition-transform hover:scale-105 duration-300" />
        </div>
    </div>

</section>

<!-- About Section -->
<section class="py-16 px-4">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-center">
        <img
        src="{{ asset('images/about.png') }}"
        alt="About Kyrios" class="rounded-sm shadow-sm w-full  duration-300  hover:scale-105"/>

        <div>
            <h2 class="text-2xl font-bold mb-4 text-gray-700">About Kyrios</h2>
            <p class="text-gray-700">At Kyrios, we’re revolutionizing the way you pay. Kyrios stands out for its unmatched speed, ensuring your payments are completed instantly and securely. Our commitment to reliability means you never have to worry about downtime or disruptions, while our user-friendly platform makes every transaction straightforward and stress-free. By combining cutting-edge technology with customer-first design, Kyrios redefines what seamless payments should feel like. Eliminate payment delays!</p>
        </div>
    </div>
</section>

<!-- Why Kyrios -->
<section class="bg-green-50 py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-10 text-gray-800">Why Kyrios</h2>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
            @foreach ([
                ['img' => 'Lightning.png', 'title' => 'Speed', 'desc' => 'Complete payments in seconds.'],
                ['img' => 'unlock.png', 'title' => 'Security', 'desc' => 'Safe and encrypted transactions.'],
                ['img' => 'qrcode.png', 'title' => 'Reliability', 'desc' => 'Works even during peak hours.'],
                ['img' => 'scan.png', 'title' => 'Convenience', 'desc' => 'Just scan and pay — that easy.']
            ] as $item)
            <div class="bg-white rounded-lg p-6 shadow text-center">
                <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }} Icon" class="w-20 mx-auto mb-4">
                <h3 class="font-bold text-green-600 mb-2">{{ $item['title'] }}</h3>
                <p class="text-gray-700">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How it Works -->
<section class="py-16 px-4">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">How Kyrios Works</h2>
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="space-y-6 text-gray-700">
                @foreach ([
                    ['text' => 'Scan the KYRIOS QR/Barcode', 'desc' => 'At checkout, the merchant displays a KYRIOS QR code or barcode. Simply open your phone’s camera (or KYRIOS app) and hover over the code.'],
                    ['text' => 'Approve Payment in Seconds', 'desc' => 'The KYRIOS interface pops up instantly, showing the transaction amount and merchant details. Confirm with your PIN, fingerprint, or face ID.'],
                    ['text' => 'Instant Confirmation for Both Sides', 'desc' => 'The merchant’s system gets a real-time success notification. You receive a receipt in-app and via email/SMS.']
                ] as $step)
                <div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/plus.png') }}" alt="Step Icon" class="w-8 h-8">
                        <p class="font-medium">{{ $step['text'] }}</p>
                    </div>
                    <p class="border-l-2 border-gray-800 pl-4 mt-2 ml-4">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
            <img src="{{ asset('images/phonescan.png') }}" alt="Scan QR" class="rounded-lg shadow-lg w-full">
        </div>
    </div>
</section>

<!-- Business Benefits -->
<section class="bg-gray-100 py-16 px-4">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
        <img src="{{ asset('images/iphone.png') }}" alt="Kyrios Business" class="rounded-lg shadow w-full">
        <div>
            <h2 class="text-2xl font-bold mb-4 text-gray-800">KYRIOS helps businesses</h2>
            <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                <li>Cut checkout time by 80% with QR scans.</li>
                <li>Reduce cash-handling costs and errors.</li>
                <li>Offer customers a modern, secure payment experience.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4 text-gray-800">And Customers Enjoy</h2>
            <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                <li>Faster checkouts at retail stores, cinemas, and more.</li>
                <li>One-tap bill payments and subscription management.</li>
                <li>Real-time tracking of all transactions.</li>
            </ul>

            <a href="#waitlistForm" class="inline-block bg-[#00853E] text-white text-sm font-medium px-8 py-3 rounded hover:bg-[#00783A] transition">
                Boost Your Sales – Join as a Partner
            </a>
        </div>
    </div>
</section>



<!-- CTA -->
{{-- <section class="bg-green-700 py-16 text-white text-center px-4">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Why Wait in Line When You Can Skip It?</h2>
        <p class="mb-6">
            Tired of cash hassles, card declines, and endless payment loading screens? KYRIOS is flipping the script—and you’re invited to lead the revolution. Join thousands of innovators already on our waitlist and unlock exclusive early access to Africa’s fastest scan-to-pay technology.
        </p>

        <!-- Input and Button -->
        <form action="{{ route('waitlist.join') }}" method="POST" class="flex flex-col sm:flex-row justify-center items-center gap-4 relative z-50">
            @csrf
            <input type="email" name="email" required
                   placeholder="Enter your email"
                   class="w-full sm:w-auto px-6 py-3 rounded text-gray-800 bg-gray-100 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-300"
            />
            <button type="submit"
                    class="bg-white text-green-700 font-bold px-6 py-3 rounded hover:bg-gray-100 transition">
                Join Waitlist
            </button>
        </form>



    </div>
</section> --}}



<section id="waitlistForm" class="relative text-white text-center py-16 px-4 overflow-hidden">
    <!-- Background Image -->
    <div
        class="absolute inset-0 bg-cover bg-center z-0"
        style="background-image: url('{{ asset('images/background.png') }}');"
    ></div>

    <!-- Overlay -->
    {{-- <div class="absolute inset-0 bg-green-700 opacity-90 z-10"></div> --}}

    <!-- Content -->
    <div class="relative z-20 max-w-3xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Why Wait in Line When You Can Skip It?</h2>
        <p class="mb-6">
            Tired of cash hassles, card declines, and endless payment loading screens? KYRIOS is flipping the script—and you’re invited to lead the revolution. Join thousands of innovators already on our waitlist and unlock exclusive early access to Africa’s fastest scan-to-pay technology.
        </p>

            <!-- Success Message -->
        <div id="success-message" class="hidden text-white font-bold mb-4">
            You’ve joined the waitlist successfully!
        </div>

        <!-- Form -->
        <form id="waitlist-form" action="{{ route('waitlist.join') }}" method="POST" class="flex flex-col sm:flex-row justify-center items-center gap-4 relative z-50">
            @csrf
            <input type="email" name="email" required
                placeholder="Enter your email"
                class="w-full sm:w-auto px-6 py-3 rounded text-gray-800 bg-gray-100 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-300"
            />
            <button type="submit"
                class="bg-white text-green-700 font-bold px-6 py-3 rounded hover:bg-gray-100 transition">
                Join Waitlist
            </button>
        </form>

    </div>
</section>


{{-- <script>
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the actual form from submitting

        // Simulate an async request
        setTimeout(() => {
            // Show success message
            document.getElementById('success-message').style.display = 'block';

            // Optionally clear form
            this.reset();
        }, 1000); // simulate delay
    });
    </script> --}}

    {{-- <script>
        document.querySelector('form').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                });

                if (response.ok) {
                    document.getElementById('success-message').style.display = 'block';
                    form.reset();
                } else {
                    alert('Something went wrong. Please try again.');
                }
            } catch (error) {
                alert('Network error.');
            }
        });
        </script> --}}

        <script>
            document.getElementById('waitlist-form').addEventListener('submit', async function(e) {
                e.preventDefault();

                const form = this;
                const formData = new FormData(form);
                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    if (response.ok) {
                        document.getElementById('success-message').classList.remove('hidden');
                        form.reset();
                    } else {
                        alert('Error: Please try again or email already exists.');
                    }
                } catch (error) {
                    console.error(error);
                    alert('Network error. Please check your connection.');
                }
            });
            </script>




<x-footer-main />
