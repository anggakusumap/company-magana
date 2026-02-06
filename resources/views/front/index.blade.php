@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
    <div id="header" class="relative bg-surface-secondary overflow-hidden min-h-[90vh] flex items-center">
        <div class="container relative z-10">
            <x-navbar/>

            @forelse($hero_sections as $hero)
                <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">
                <div id="Hero" class="flex flex-col gap-8 mt-12 pb-20 items-start max-w-2xl relative z-10">
                    <div class="flex items-center bg-white border border-surface-border p-2 pr-4 pl-2 gap-3 rounded-full shadow-sm"
                         data-aos="fade-down" data-aos-delay="100">
                        <div class="w-8 h-8 flex items-center justify-center bg-accent/10 rounded-full shrink-0">
                            <img src="{{asset('assets/icons/crown.svg')}}" class="w-4 h-4 object-contain" alt="icon">
                        </div>
                        <p class="font-semibold text-sm text-text-main">{{$hero->achievement}}</p>
                    </div>
                    
                    <div class="flex flex-col gap-4" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="font-black text-5xl md:text-6xl lg:text-7xl leading-tight text-primary tracking-tight">
                            {{$hero->heading}}
                        </h1>
                        <p class="text-text-muted text-lg leading-relaxed max-w-lg">
                            PT. Magana Dana Mahanta is a trusted Indonesian export company based in Bali, delivering high-quality banana leaves, tropical fruits, and handmade plush toys to international markets.
                        </p>
                    </div>
                    
                    <div class="flex items-center gap-4 mt-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('front.product') }}"
                           class="bg-secondary text-white px-8 py-4 rounded-xl hover:bg-secondary-hover shadow-lg hover:shadow-orange-500/30 transition-all duration-300 font-bold text-lg">
                            Explore Now
                        </a>
                        <button
                            class="flex items-center gap-3 px-6 py-4 rounded-xl font-bold text-primary bg-white border border-surface-border hover:bg-slate-50 transition-all duration-300"
                            onclick="{modal.show()}">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{asset('assets/icons/play-circle.svg')}}" class="w-full h-full object-contain" alt="icon">
                            </div>
                            <span>Watch Video</span>
                        </button>
                    </div>
                </div>
            @empty
                <p>No hero section yet.</p>
            @endforelse
        </div>
        
        <!-- Hero Image Background -->
        <div class="absolute inset-y-0 right-0 w-full lg:w-[50%] z-0" data-aos="fade-left" data-aos-delay="100">
            @if(isset($hero) && $hero->banner)
                <img src="{{Storage::url($hero->banner)}}" class="object-cover w-full h-full lg:rounded-l-[3rem]" alt="banner">
                <div class="absolute inset-0 bg-gradient-to-r from-surface-secondary/90 via-transparent to-transparent lg:from-surface-secondary"></div>
            @endif
        </div>
    </div>

    <!-- Features Section -->
    <div id="WhatWeDo" class="container py-20">
        <div class="flex flex-col md:flex-row items-end justify-between gap-6 mb-12" data-aos="fade-up">
            <div class="flex flex-col gap-3">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">Our Work</span>
                <h2 class="font-bold text-4xl text-primary">What We Do</h2>
            </div>
            <a href="{{ route('front.index') }}"
               class="flex items-center gap-2 text-text-main font-semibold hover:text-secondary transition-colors duration-300 group">
                Explore More
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature Cards -->
            @foreach([
                ['title' => 'Sustainable Agricultural Export', 'desc' => 'We export Indonesia\'s best tropical fruits and agricultural products, focusing on freshness, quality, and eco-friendly practices.'],
                ['title' => 'Handcrafted Doll & Artisan Production', 'desc' => 'Our unique plush toys and crafts are handmade by Balinese artisans, combining creativity and culture for global appreciation.'],
                ['title' => 'Quality Control & Packaging', 'desc' => 'We ensure every product meets international standards through careful inspection and sustainable packaging.'],
                ['title' => 'Global Trade & Partnership', 'desc' => 'Magana connects local producers with worldwide buyers through transparent, reliable, and trusted trade networks.']
            ] as $index => $item)
            <div class="group bg-white p-8 rounded-2xl border border-surface-border hover:border-accent hover:shadow-card transition-all duration-300 flex flex-col gap-6"
                 data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon" class="w-8 h-8 group-hover:brightness-0 group-hover:invert transition-all">
                </div>
                <div class="space-y-4">
                    <h3 class="font-bold text-xl text-primary leading-snug">{{ $item['title'] }}</h3>
                    <div class="h-px w-full bg-surface-border"></div>
                    <p class="text-text-muted leading-relaxed">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Principles Section -->
    <div id="OurPrinciples" class="container py-20">
        <div class="flex flex-col md:flex-row items-end justify-between gap-6 mb-12" data-aos="fade-up">
            <div class="flex flex-col gap-3">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">Our Principles</span>
                <h2 class="font-bold text-4xl text-primary">Why Choose Us</h2>
            </div>
            <a href="#" class="bg-primary text-white px-6 py-3 rounded-full hover:bg-primary-hover transition-colors duration-300 font-bold text-sm">
                Learn More
            </a>
        </div>
        
        <div class="bg-indigo-50 p-6 rounded-2xl max-w-3xl mb-12 flex items-start gap-4" data-aos="fade-right">
             <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center shrink-0 text-indigo-600 font-bold">
                !
             </div>
             <p class="font-medium text-indigo-900 leading-relaxed">
                At PT. Magana Dana Mahanta, we connect Indonesia's local farmers and artisans with the world — exporting fresh tropical fruits, banana leaves, and handmade plush toys from the heart of Bali.
             </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($principles as $principle)
                <div class="bg-white rounded-2xl overflow-hidden border border-surface-border group hover:shadow-card hover:border-secondary transition-all duration-300 flex flex-col"
                     data-aos="zoom-in" data-aos-delay="100">
                    <div class="h-56 overflow-hidden">
                        <img src="{{Storage::url($principle->thumbnail)}}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500" alt="{{$principle->name}}">
                    </div>
                    <div class="p-6 flex flex-col gap-4 flex-grow">
                        <h3 class="font-bold text-2xl text-primary">{{$principle->name}}</h3>
                        <p class="text-text-muted leading-relaxed flex-grow">{{$principle->subtitle}}</p>
                        <a href="#" class="font-semibold text-secondary flex items-center gap-2 group-hover:gap-3 transition-all">
                            Learn More <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10 text-text-muted">No principles data available.</div>
            @endforelse
        </div>
    </div>

    <!-- Products Section -->
    <div id="Products" class="container py-20 space-y-24">
        @forelse($products as $index => $product)
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 {{ $index % 2 == 1 ? 'lg:flex-row-reverse' : '' }}">
                <div class="w-full lg:w-1/2 overflow-hidden rounded-3xl relative group" data-aos="fade-right">
                    <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/5 transition-colors duration-300 z-10"></div>
                     <!-- Placeholder for product image styling improvement -->
                    <img src="{{Storage::url($product->thumbnail)}}" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700" alt="{{$product->name}}">
                </div>
                <div class="w-full lg:w-1/2 flex flex-col gap-6" data-aos="fade-left">
                    <div class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full w-fit font-bold text-xs uppercase tracking-wider">
                        {{$product->tagline}}
                    </div>
                    <h2 class="font-bold text-4xl lg:text-5xl text-primary">{{$product->name}}</h2>
                    <p class="text-text-muted text-lg leading-relaxed">{{$product->about}}</p>
                    <a href="{{route('front.appointment')}}"
                       class="mt-4 bg-primary text-white px-8 py-4 rounded-xl w-fit hover:bg-primary-hover hover:shadow-lg transition-all duration-300 font-bold">
                        Discover More
                    </a>
                </div>
            </div>
        @empty
            <p class="text-center text-text-muted">No products available.</p>
        @endforelse
    </div>

    <!-- Testimonials Section -->
    <div id="Testimonials" class="bg-surface-secondary py-24 mt-12 w-full">
        <div class="container flex flex-col items-center gap-12">
            <div class="text-center space-y-4" data-aos="fade-up">
                <span class="text-secondary font-bold tracking-wider uppercase text-sm">Success Clients</span>
                <h2 class="font-bold text-4xl text-primary">What Our Clients Say</h2>
            </div>

            <div class="main-carousel w-full max-w-5xl" data-aos="fade-up" data-aos-delay="200">
                @forelse($testimonials as $testimonial)
                    <div class="carousel-card w-full flex flex-col md:flex-row items-center gap-10 md:gap-16 px-4">
                        <div class="w-full md:w-1/2 space-y-8">
                             <div class="relative">
                                <img src="{{asset('assets/icons/quote.svg')}}" class="absolute -top-6 -left-6 w-12 opacity-20" alt="quote">
                                <p class="font-medium text-2xl leading-relaxed text-primary relative z-10">
                                    "{{$testimonial->message}}"
                                </p>
                             </div>
                             
                             <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white shadow-md">
                                    <img src="{{Storage::url($testimonial->client->avatar)}}" class="w-full h-full object-cover" alt="{{$testimonial->client->name}}">
                                </div>
                                <div>
                                    <p class="font-bold text-lg text-primary">{{$testimonial->client->name}}</p>
                                    <p class="text-text-muted text-sm">{{$testimonial->client->occupation}}</p>
                                </div>
                                <div class="flex text-yellow-400 gap-1 ml-auto">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                             </div>
                        </div>
                        <div class="w-full md:w-1/2 aspect-[4/5] md:aspect-square bg-gray-200 rounded-3xl overflow-hidden shadow-2xl">
                             <img src="{{Storage::url($testimonial->thumbnail)}}" class="w-full h-full object-cover" alt="Testimonial thumbnail">
                        </div>
                    </div>
                @empty
                    <p class="text-center w-full">No testimonials yet.</p>
                @endforelse
            </div>
        </div>
    </div>

    <x-footer/>

    <!-- Video Modal -->
    <div id="video-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-[60] justify-center items-center w-full h-full bg-black/80 backdrop-blur-sm">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="flex items-center justify-between p-4 border-b border-surface-border">
                    <h3 class="text-xl font-bold text-primary">
                        Company Profile Video
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center transition-colors"
                            onclick="{modal.hide()}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="aspect-video w-full bg-black">
                    <iframe id="videoFrame" class="w-full h-full" src=""
                            title="Company Profile"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
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
            offset: 50
        });
    </script>
    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{asset('js/modal-video.js')}}"></script>
@endpush
