<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('assets/src/output.css') }}" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f1ecbb1f89.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title>Maga Trans</title>
    </head>
    <body>
        <nav class="mx-auto mt-[30px] flex max-h-12 w-full max-w-[1130px] items-center justify-between">
            <div class="flex gap-[30px]">
                <div class="h-[46px] w-[137px] shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/logos/maga-portal-logo.png') }}" alt="" />
                </div>
                <div class="h-12 w-px shrink-0 bg-[#E8EBF4]"></div>
            </div>
            <div class="flex gap-3">
                <a href="#">
                    <div class="w-[145px] rounded-full border px-[22px] py-3">
                        <p class="w-full text-nowrap text-center text-base font-semibold"><i class="fas fa-sign-out"></i> DAFTAR</p>
                    </div>
                </a>
                <a href="#">
                    <div class="flex max-w-[149px] gap-[10px] rounded-full bg-maga-orange px-[22px] py-3">
                        <p class="w-full text-center text-base font-semibold text-white"><i class="fas fa-sign-in-alt"></i> MASUK</p>
                    </div>
                </a>
            </div>
        </nav>

        <nav id="categories" class="mx-auto mt-[30px] flex max-h-12 w-full max-w-[1130px] items-center justify-between gap-4">
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/heart-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">OUTLET</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/status-up-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">TENTANG</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/global-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">PEMBAYARAN</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/coffee-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">KONTAK</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/courthouse-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">RESERVASI</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/src/assets/images/icons/cup-black.svg') }}" alt="" />
                    </div>
                    <p class="text-center font-semibold">CEK BOOKING</p>
                </div>
            </a>
        </nav>

        <section id="hero-section" class="relative w-full overflow-hidden flex mx-auto mt-[30px]">
            <div class="swiper-hero w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset('assets/src/assets/images/thumbnails/hero-background.png') }}" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset('assets/src/assets/images/thumbnails/hero-background-2.png') }}" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide relative">
                        <div class="w-full h-[550px] overflow-hidden shrink-0">
                            <img src="{{ asset('assets/src/assets/images/thumbnails/hero-background-3.pn') }}g" class="w-full h-full object-cover object-top" alt="thumbnails" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                        <div class="absolute flex bottom-0 left-0 right-0 items-center justify-between mx-auto max-w-[1280px] px-[75px] pb-[40px]">
                            <div class="flex flex-col gap-[10px] text-white">
                                <p>Featured</p>
                                <div class="w-[507px]">
                                    <a href="#" class="font-bold text-[36px] leading-[45px] hover:underline transition-all duration-300">Generation Z Prefer Remote Working Than Big Salary</a>
                                </div>
                                <p>12 Jun, 2024 • Business</p>
                            </div>
                            <div class="flex gap-4">
                                <button type="button" id="prev-button" class="prev-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-left.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                                <button type="button" id="next-button" class="next-button p-[10px] ring-1 ring-white rounded-full hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/src/assets/images/icons/arrow-right.svg') }}" class="w-[18px] h-[18px]" alt="icons" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="js/swipe.js"></script>
    </body>
</html>
