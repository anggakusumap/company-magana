@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@section('content')
    <div id="header" class="relative bg-surface-secondary overflow-hidden pt-10 pb-32">
        <div class="container relative z-10">
            <x-navbar />
        </div>
    </div>

    <div id="Teams" class="container -mt-20 relative z-20">
        <div class="flex flex-col gap-12 items-center">
            <div class="flex flex-col gap-4 items-center text-center">
                <div class="breadcrumb flex items-center justify-center gap-3 text-sm" data-aos="fade-down">
                    <a href="{{ route('front.index') }}"
                        class="text-text-muted hover:text-primary transition-colors">Home</a>
                    <span class="text-text-muted">/</span>
                    <span class="text-primary font-semibold">Our Team</span>
                </div>
                <h1 class="font-black text-4xl leading-tight text-primary max-w-2xl" data-aos="fade-up"
                    data-aos-delay="100">
                    We're Here to Build <br> Your Awesome Projects
                </h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 w-full justify-center">
                @forelse($teams as $index => $team)
                    <div class="group bg-white flex flex-col items-center p-8 rounded-3xl border border-surface-border shadow-soft hover:shadow-card hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="{{ ($index * 100) + 100 }}">
                        <div
                            class="w-28 h-28 flex shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-accent to-primary p-1 mb-6 group-hover:scale-105 transition-transform duration-300">
                            <div class="w-full h-full rounded-full overflow-hidden border-2 border-white">
                                <img src="{{Storage::url($team->avatar)}}" class="object-cover w-full h-full object-center"
                                    alt="{{$team->name}}">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-center mb-4">
                            <h3 class="font-bold text-xl text-primary">{{$team->name}}</h3>
                            <p class="text-text-muted text-sm font-medium">{{$team->occupation}}</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 mt-auto">
                            <div class="w-5 h-5 flex shrink-0 text-secondary">
                                <img src="{{asset('assets/icons/global.svg')}}" class="w-full h-full" alt="icon">
                            </div>
                            <p class="text-primary font-semibold text-sm">{{$team->location}}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center w-full text-text-muted col-span-full">No team data yet.</p>
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