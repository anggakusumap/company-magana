@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@section('content')
    <div id="header" class="relative bg-surface-secondary overflow-hidden pt-10 pb-32">
        <div class="container relative z-10">
            <x-navbar />
        </div>
    </div>

    <div id="Contents" class="container relative z-20 -mt-20">
        <div class="flex flex-col gap-12 items-center">
            <div class="flex flex-col gap-4 items-center text-center">
                <div class="breadcrumb flex items-center justify-center gap-3 text-sm" data-aos="fade-down">
                    <a href="{{ route('front.index') }}"
                        class="text-text-muted hover:text-primary transition-colors">Home</a>
                    <span class="text-text-muted">/</span>
                    <span class="text-primary font-semibold">About Us</span>
                </div>
                <h1 class="font-black text-4xl leading-tight text-primary max-w-2xl" data-aos="fade-up"
                    data-aos-delay="100">
                    Since Beginning We Only <br> Want to Make World Better
                </h1>
            </div>

            <div class="flex flex-col gap-20 mt-10 w-full">
                @forelse($abouts as $index => $about)
                    <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20 even:lg:flex-row-reverse group">
                        <div class="w-full lg:w-5/12 aspect-[4/5] rounded-3xl overflow-hidden shadow-card border-4 border-white transform transition-transform duration-500 group-hover:scale-[1.02]"
                            data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                            <img src="{{Storage::url($about->thumbnail)}}" class="w-full h-full object-cover"
                                alt="{{$about->name}}">
                        </div>
                        <div class="w-full lg:w-6/12 flex flex-col gap-6"
                            data-aos="{{ $index % 2 == 0 ? 'fade-left' : 'fade-right' }}" data-aos-delay="100">

                            <span
                                class="inline-block py-2 px-4 rounded-full bg-accent/10 text-accent font-bold text-sm tracking-wider uppercase w-fit">
                                OUR {{$about->type}}
                            </span>

                            <h2 class="font-bold text-4xl text-primary leading-tight">{{$about->name}}</h2>

                            <div class="flex flex-col gap-4">
                                @forelse($about->keypoints as $kIndex => $keypoint)
                                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-surface-secondary transition-colors duration-300"
                                        data-aos="fade-up" data-aos-delay="{{ ($kIndex * 100) + 200 }}">
                                        <div class="w-6 h-6 flex shrink-0 text-secondary mt-1">
                                            <img src="{{asset('assets/icons/tick-circle.svg')}}" class="w-full h-full" alt="icon">
                                        </div>
                                        <p class="leading-relaxed text-text-main font-medium">{{$keypoint->keypoint}}</p>
                                    </div>
                                @empty
                                    <p class="text-text-muted">No keypoints available.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center w-full text-text-muted">No about data yet.</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="pb-20"></div> {{-- Spacer --}}

    <x-footer />
@endsection

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>
@endpush