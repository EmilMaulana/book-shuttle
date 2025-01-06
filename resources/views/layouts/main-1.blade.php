<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Tambahkan CSS Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style-2.css') }}">
    <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>

    <title>{{ $title ?? 'BUDIMAN TRANS' }}</title>
</head>

<body class="bg-gray-50 badan">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-budiman shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <nav>
            </nav>
            <div class="flex items-center text-lg no-underline text-white pr-6">
                <marquee behavior="" direction="" class="mr-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit nisi et repellendus id provident omnis quam amet ratione soluta, neque rem aliquid aliquam natus illum voluptate, reprehenderit odit consequatur error eligendi? Optio doloribus ut hic ad nulla necessitatibus porro sed ea. Dolores atque adipisci repellat veniam tempora id saepe nisi consequatur cupiditate, repudiandae amet commodi incidunt quo harum iure consequuntur?</marquee>
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="bg-white text-budiman">
        <div class="container justify-center mx-auto">
            <div class="flex flex-col items-center py-12">
                <a class="font-bold  uppercase  text-5xl" href="#">
                    <img src="{{ asset('assets/image/budiman-logo.png') }}" alt="" width="200px">
                    {{-- BUDIMAN TRANS --}}
                </a>
            </div>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                MENU <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-semibold uppercase mt-0 px-6 py-2">
                <a href="{{ route('index') }}" 
                    class="my-2 text-base px-5 py-2 rounded-full mx-2 transition-all duration-300 ease-in-out 
                    {{ request()->routeIs('index') ? 'bg-indigo-900 text-white' : 'bg-budiman text-white hover:bg-indigo-900' }}">
                    <i class="fas fa-home"></i> BERANDA
                </a>
                <a href="{{ route('reservasi') }}" 
                    class="my-2 text-base px-5 py-2 rounded-full mx-2 transition-all duration-300 ease-in-out 
                    {{ request()->routeIs('reservasi') ? 'bg-indigo-900 text-white' : 'bg-budiman text-white hover:bg-indigo-900' }}">
                    <i class="fas fa-calendar-alt"></i> RESERVASI
                </a>
                <a href="#" class="bg-budiman my-2 text-white text-base px-5 py-2 rounded-full mx-2 transition-all duration-300 ease-in-out hover:bg-indigo-900">
                    <i class="fas fa-check-circle"></i> CEK BOOKING
                </a>
                <a href="#" class="bg-budiman my-2 text-white text-base px-5 py-2 rounded-full mx-2 transition-all duration-300 ease-in-out hover:bg-indigo-900">
                    <i class="fas fa-sign-in-alt"></i> MASUK
                </a>                
            </div>
        </div>
    </nav>


    <div class="">
        @yield('content')
    </div>

    <footer class="w-full bg-budiman text-white py-5">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="uppercase">&copy; budiman trans</div>
        </div>
    </footer>

    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>
    <!-- Tambahkan JS Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 3000, // Waktu jeda dalam milidetik (3 detik)
                disableOnInteraction: false, // Tetap autoplay meskipun pengguna berinteraksi
            },
            speed: 800, // Durasi transisi (dalam milidetik)
        });
    </script>
    
</body>

</html>