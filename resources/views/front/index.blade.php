@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar/>

            @forelse($hero_sections as $hero)
                <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">
                <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
                    <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit"
                         data-aos="fade-down" data-aos-delay="100">
                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/icons/crown.svg')}}" class="object-contain" alt="icon">
                        </div>
                        <p class="font-semibold text-sm">{{$hero->achievement}}</p>
                    </div>
                    <div class="flex flex-col gap-[10px]" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="font-extrabold text-[50px] leading-[65px] max-w-[536px]">{{$hero->heading}}</h1>
                        <p class="text-cp-light-grey leading-[30px] max-w-[437px]">PT. Magana Dana Mahanta is a trusted
                            Indonesian export company based in Bali, specializing in delivering high-quality banana
                            leaves, tropical fruits, and handmade plush toys to international markets. With a strong
                            commitment to sustainability, quality, and authenticity, we proudly connect Indonesia's
                            natural and creative products with buyers around the world.</p>
                    </div>
                    <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                        <a href=""
                           class="bg-cp-dark-blue p-5 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Explore
                            Now</a>
                        <button
                            class="bg-cp-black p-5 w-fit rounded-xl font-bold text-white flex items-center gap-[10px]"
                            onclick="{modal.show()}">
                            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                                <img src="{{asset('assets/icons/play-circle.svg')}}"
                                     class="w-full h-full object-contain"
                                     alt="icon">
                            </div>
                            <span>Watch Video</span>
                        </button>
                    </div>
                </div>
        </div>
        <div class="absolute w-[43%] h-full top-0 right-0 overflow-hidden z-0" data-aos="fade-left"
             data-aos-delay="100">
            <img src="{{Storage::url($hero->banner)}}" class="object-cover w-full h-full" alt="banner">
        </div>
        @empty
            <p>No hero section yet.</p>
        @endforelse
    </div>

    <div id="WhatWeDo" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between" data-aos="fade-up">
            <div class="flex flex-col gap-[14px]">
                <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    Our Work
                </p>
                <h2 class="font-bold text-4xl leading-[45px]">What We Do</h2>
            </div>
            <a href="{{ route('front.index') }}"
               class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white hover:bg-cp-dark-blue transition-all duration-300">
                Explore More
            </a>
        </div>

        <div
            class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">

            <!-- Card 1 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300"
                data-aos="fade-up" data-aos-delay="100">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Sustainable Agricultural Export</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    We export Indonesia's best tropical fruits and agricultural products, focusing on freshness,
                    quality, and eco-friendly practices.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Handcrafted Doll & Artisan Production</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    Our unique plush toys and crafts are handmade by Balinese artisans, combining creativity and culture
                    for global appreciation.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300"
                data-aos="fade-up" data-aos-delay="300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Quality Control & Packaging</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    We ensure every product meets international standards through careful inspection and sustainable
                    packaging.
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300"
                data-aos="fade-up" data-aos-delay="400">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Global Trade & Partnership</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    Magana connects local producers with worldwide buyers through transparent, reliable, and trusted
                    trade networks.
                </p>
            </div>

        </div>
    </div>

    <div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between" data-aos="fade-up">
            <div class="flex flex-col gap-[14px]">
                <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR PRINCIPLES</p>
                <h2 class="font-bold text-4xl leading-[45px]">Why Choose Us</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit"
             data-aos="fade-right" data-aos-delay="100">
            <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/icons/crown.svg')}}" class="object-contain" alt="icon">
            </div>
            <p class="font-semibold text-sm">At PT. Magana Dana Mahanta, we connect Indonesia's local farmers
                and artisans with the world — exporting fresh tropical fruits, banana leaves, and handmade plush toys
                from the heart of Bali.
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-[30px] justify-center">
            @forelse($principles as $index => $principle)
                <div
                    class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300"
                    data-aos="zoom-in" data-aos-delay="{{ ($index * 100) + 100 }}">
                    <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                        <img src="{{Storage::url($principle->thumbnail)}}"
                             class="object-cover object-center w-full h-full"
                             alt="thumbnails">
                    </div>
                    <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                        <div class="flex flex-col gap-1">
                            <p class="title font-bold text-xl leading-[30px]">{{$principle->name}}</p>
                            <p class="leading-[30px] text-cp-light-grey">{{$principle->subtitle}}</p>
                        </div>
                        <a href="" class="font-semibold text-cp-dark-blue">Learn More</a>
                    </div>
                </div>
            @empty
                <p>No principles data yet.</p>
            @endforelse
        </div>
    </div>

    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
        @forelse($products as $index => $product)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[520px] flex shrink-0 overflow-hidden"
                     data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                    <img src="{{Storage::url($product->thumbnail)}}" class="w-full h-full object-contain"
                         alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[10px] h-fit max-w-[500px]"
                     data-aos="{{ $index % 2 == 0 ? 'fade-left' : 'fade-right' }}" data-aos-delay="100">
                    <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{$product->tagline}}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{$product->name}}</h2>
                        <p class="leading-[30px] text-cp-light-grey">{{$product->about}}</p>
                    </div>
                    <a href="{{route('front.appointment')}}"
                       class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Discover
                        More</a>
                </div>
            </div>
        @empty
            <p>No products data yet.</p>
        @endforelse
    </div>

    <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
        <div class="flex flex-col gap-[14px] items-center" data-aos="fade-up">
            <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                SUCCESS CLIENTS</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Reviews</h2>
        </div>
        <div class="main-carousel w-full" data-aos="fade-up" data-aos-delay="200">
            @forelse($testimonials as $testimonial)
                <div
                    class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="relative pt-[27px] pl-[30px]">
                                <div class="absolute top-0 left-0">
                                    <img src="{{asset('assets/icons/quote.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold text-2xl leading-[46px] relative z-10">{{$testimonial->message}}</p>
                            </div>
                            <div class="flex items-center justify-between pl-[30px]">
                                <div class="flex items-center gap-6">
                                    <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{Storage::url($testimonial->client->avatar)}}"
                                             class="w-full h-full object-cover"
                                             alt="photo">
                                    </div>
                                    <div class="flex flex-col justify-center gap-1">
                                        <p class="font-bold">{{$testimonial->client->name}}</p>
                                        <p class="text-sm text-cp-light-grey">{{$testimonial->client->occupation}}</p>
                                    </div>
                                </div>
                                <div class="flex flex-nowrap">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicator flex items-center justify-center gap-2 h-4 shrink-0">
                        </div>
                    </div>
                    <div class="testimonial-thumbnail w-[470px] h-[550px] overflow-hidden bg-[#D9D9D9]">
                        <img src="{{Storage::url($testimonial->thumbnail)}}"
                             class="w-full h-full object-cover object-center"
                             alt="thumbnail">
                    </div>
                </div>
            @empty
                <p>No testimonials data yet.</p>
            @endforelse
        </div>
    </div>
    <x-footer/>

    <div id="video-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full lg:w-1/2 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white overflow-hidden shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-cp-black">
                        Company Profile Video
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            onclick="{modal.hide()}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="">
                    <!-- video src added from the js script (modal-video.js) to prevent video running in the backgroud -->
                    <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src=""
                            title="Demo Project Laravel Portfolio"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>

    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>

    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{asset('js/modal-video.js')}}"></script>
@endpush
