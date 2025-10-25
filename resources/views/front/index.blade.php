@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@section('content')
    <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar/>

            @forelse($hero_sections as $hero)
                <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">
                <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
                    <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit">
                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img src="{{asset('assets/icons/crown.svg')}}" class="object-contain" alt="icon">
                        </div>
                        <p class="font-semibold text-sm">{{$hero->achievement}}</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h1 class="font-extrabold text-[50px] leading-[65px] max-w-[536px]">{{$hero->heading}}</h1>
                        <p class="text-cp-light-grey leading-[30px] max-w-[437px]">PT. Magana Dana Mahanta is a trusted
                            Indonesian export company based in Bali, specializing in delivering high-quality banana
                            leaves, tropical fruits, and handmade dolls to international markets. With a strong
                            commitment to sustainability, quality, and authenticity, we proudly connect Indonesia’s
                            natural and creative products with buyers around the world.</p>
                    </div>
                    <div class="flex items-center gap-4">
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
        <div class="absolute w-[43%] h-full top-0 right-0 overflow-hidden z-0">
            <img src="{{Storage::url($hero->banner)}}" class="object-cover w-full h-full" alt="banner">
        </div>
        @empty
            <p>No hero section yet.</p>
        @endforelse
    </div>

    <div id="WhatWeDo" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
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
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Sustainable Banana Leaf Export</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    We export fresh, high-quality banana leaves sourced from Bali’s local farmers, ensuring eco-friendly
                    harvesting, consistent quality, and reliable global delivery.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Handcrafted Doll Production</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    Each doll is uniquely handcrafted by Balinese artisans, blending tradition, creativity, and
                    sustainable materials to share Bali’s cultural artistry with the world.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Quality Control & Packaging</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    Our team ensures every product meets export standards with strict quality checks, sustainable
                    packaging, and preservation methods that protect freshness and authenticity.
                </p>
            </div>

            <!-- Card 4 -->
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Global Trade & Partnership</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">
                    We collaborate with distributors and importers worldwide, providing transparent trade processes,
                    reliable logistics, and flexible partnership opportunities rooted in integrity.
                </p>
            </div>

        </div>
    </div>

    <div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR PRINCIPLES</p>
                <h2 class="font-bold text-4xl leading-[45px]">We Might Best Choice <br> For Your Company</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div class="flex flex-wrap items-center gap-[30px] justify-center">
            @forelse($principles as $principle)
                <div
                    class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
                    <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                        <img src="{{Storage::url($principle->thumbnail)}}"
                             class="object-cover object-center w-full h-full"
                             alt="thumbnails">
                    </div>
                    <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{Storage::url($principle->icon)}}" class="w-full h-full object-contain"
                                 alt="icon">
                        </div>
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
        @forelse($products as $product)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[520px] flex shrink-0 overflow-hidden">
                    <img src="{{Storage::url($product->thumbnail)}}" class="w-full h-full object-contain"
                         alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[10px] h-fit max-w-[500px]">
                    <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{$product->tagline}}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{$product->name}}</h2>
                        <p class="leading-[30px] text-cp-light-grey">{{$product->about}}</p>
                    </div>
                    <a href="{{route('front.appointment')}}"
                       class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book
                        Appointment</a>
                </div>
            </div>
        @empty
            <p>No products data yet.</p>
        @endforelse
    </div>

    <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                SUCCESS CLIENTS</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company
            </h2>
        </div>
        <div class="main-carousel w-full">
            @forelse($testimonials as $testimonial)
                <div
                    class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="h-9 overflow-hidden">
                                <img src="{{asset('assets/logo/logo-54.svg')}}" class="object-contain"
                                     alt="icon">
                            </div>
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
                    <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
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

    {{--    <div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-[10px] mt-20 -mb-20">--}}
    {{--        <div class="container max-w-[1000px] mx-auto">--}}
    {{--            <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-center">--}}
    {{--                <div class="flex flex-col gap-[30px]">--}}
    {{--                    <div class="flex flex-col gap-[10px]">--}}
    {{--                        <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>--}}
    {{--                    </div>--}}
    {{--                    <a--}}
    {{--                        href="{{route('front.appointment')}}"--}}
    {{--                        class="p-5 bg-cp-black rounded-xl text-white w-fit font-bold"--}}
    {{--                    >Contact Us</a--}}
    {{--                    >--}}
    {{--                </div>--}}

    {{--                <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">--}}
    {{--                    <!-- FAQ 1 -->--}}
    {{--                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full">--}}
    {{--                        <button--}}
    {{--                            class="accordion-button flex justify-between gap-1 items-center"--}}
    {{--                            data-accordion="accordion-faq-1"--}}
    {{--                        >--}}
    {{--            <span class="font-bold text-lg leading-[27px] text-left"--}}
    {{--            >What products does Magana export?</span--}}
    {{--            >--}}
    {{--                            <div class="arrow w-9 h-9 flex shrink-0">--}}
    {{--                                <img--}}
    {{--                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"--}}
    {{--                                    class="transition-all duration-300"--}}
    {{--                                    alt="icon"--}}
    {{--                                />--}}
    {{--                            </div>--}}
    {{--                        </button>--}}
    {{--                        <div id="accordion-faq-1" class="accordion-content hide">--}}
    {{--                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">--}}
    {{--                                Magana specializes in exporting premium banana leaves and handcrafted dolls made by--}}
    {{--                                Balinese artisans. All our products are sustainably sourced and meet international--}}
    {{--                                export standards.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <!-- FAQ 2 -->--}}
    {{--                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full">--}}
    {{--                        <button--}}
    {{--                            class="accordion-button flex justify-between gap-1 items-center"--}}
    {{--                            data-accordion="accordion-faq-2"--}}
    {{--                        >--}}
    {{--            <span class="font-bold text-lg leading-[27px] text-left"--}}
    {{--            >Where is Magana based?</span--}}
    {{--            >--}}
    {{--                            <div class="arrow w-9 h-9 flex shrink-0">--}}
    {{--                                <img--}}
    {{--                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"--}}
    {{--                                    class="transition-all duration-300"--}}
    {{--                                    alt="icon"--}}
    {{--                                />--}}
    {{--                            </div>--}}
    {{--                        </button>--}}
    {{--                        <div id="accordion-faq-2" class="accordion-content hide">--}}
    {{--                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">--}}
    {{--                                We are proudly based in Bali, Indonesia, working directly with local farmers and--}}
    {{--                                artisans to ensure authentic, high-quality products that represent Bali’s nature and--}}
    {{--                                culture.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <!-- FAQ 3 -->--}}
    {{--                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full">--}}
    {{--                        <button--}}
    {{--                            class="accordion-button flex justify-between gap-1 items-center"--}}
    {{--                            data-accordion="accordion-faq-3"--}}
    {{--                        >--}}
    {{--            <span class="font-bold text-lg leading-[27px] text-left"--}}
    {{--            >Do you provide international shipping?</span--}}
    {{--            >--}}
    {{--                            <div class="arrow w-9 h-9 flex shrink-0">--}}
    {{--                                <img--}}
    {{--                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"--}}
    {{--                                    class="transition-all duration-300"--}}
    {{--                                    alt="icon"--}}
    {{--                                />--}}
    {{--                            </div>--}}
    {{--                        </button>--}}
    {{--                        <div id="accordion-faq-3" class="accordion-content hide">--}}
    {{--                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">--}}
    {{--                                Yes. We export worldwide through trusted logistics partners. Our packaging and export--}}
    {{--                                procedures follow international safety and hygiene regulations, ensuring products--}}
    {{--                                arrive fresh and in excellent condition.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <!-- FAQ 4 -->--}}
    {{--                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full">--}}
    {{--                        <button--}}
    {{--                            class="accordion-button flex justify-between gap-1 items-center"--}}
    {{--                            data-accordion="accordion-faq-4"--}}
    {{--                        >--}}
    {{--            <span class="font-bold text-lg leading-[27px] text-left"--}}
    {{--            >Can I request custom orders or packaging?</span--}}
    {{--            >--}}
    {{--                            <div class="arrow w-9 h-9 flex shrink-0">--}}
    {{--                                <img--}}
    {{--                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"--}}
    {{--                                    class="transition-all duration-300"--}}
    {{--                                    alt="icon"--}}
    {{--                                />--}}
    {{--                            </div>--}}
    {{--                        </button>--}}
    {{--                        <div id="accordion-faq-4" class="accordion-content hide">--}}
    {{--                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">--}}
    {{--                                Absolutely. We accommodate custom doll designs, branding, and tailored packaging for--}}
    {{--                                both banana leaves and crafts, depending on order size and destination requirements.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <!-- FAQ 5 -->--}}
    {{--                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full">--}}
    {{--                        <button--}}
    {{--                            class="accordion-button flex justify-between gap-1 items-center"--}}
    {{--                            data-accordion="accordion-faq-5"--}}
    {{--                        >--}}
    {{--            <span class="font-bold text-lg leading-[27px] text-left"--}}
    {{--            >How can I become a Magana partner or distributor?</span--}}
    {{--            >--}}
    {{--                            <div class="arrow w-9 h-9 flex shrink-0">--}}
    {{--                                <img--}}
    {{--                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"--}}
    {{--                                    class="transition-all duration-300"--}}
    {{--                                    alt="icon"--}}
    {{--                                />--}}
    {{--                            </div>--}}
    {{--                        </button>--}}
    {{--                        <div id="accordion-faq-5" class="accordion-content hide">--}}
    {{--                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">--}}
    {{--                                You can contact us directly via email or WhatsApp to discuss partnership--}}
    {{--                                opportunities. Our team will assist you with pricing, shipping, and required export--}}
    {{--                                documentation.--}}
    {{--                            </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    --}}
    <x-footer/>

    <div id="video-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full lg:w-1/2 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-[20px] overflow-hidden shadow">
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

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{asset('js/modal-video.js')}}"></script>
@endpush
