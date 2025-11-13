@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar/>
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]" data-aos="fade-down">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Products</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center" data-aos="fade-up" data-aos-delay="100">
                    Our Products
                </h2>
            </div>
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

    <x-footer/>
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
