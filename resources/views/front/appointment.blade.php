@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.layouts.app')

@section('content')
    <div id="header" class="relative bg-surface-secondary overflow-hidden pt-10 pb-32">
        <div class="container relative z-10">
            <x-navbar/>
        </div>
    </div>

    <div id="Contact" class="container -mt-20 relative z-20">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
            <!-- Left Side: Contact Info -->
            <div class="lg:w-1/3 flex flex-col gap-10">
                <div class="breadcrumb flex items-center gap-3 text-sm" data-aos="fade-down">
                    <a href="{{ route('front.index') }}" class="text-text-muted hover:text-primary transition-colors">Home</a>
                    <span class="text-text-muted">/</span>
                    <span class="text-primary font-semibold">Contact us</span>
                </div>
                
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="font-black text-4xl leading-tight text-primary">Get in touch</h1>
                    <p class="text-text-muted leading-relaxed">
                        We fit your needs. Tell us what you want and we will provide the best solution for you.
                    </p>
                </div>

                <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm border border-surface-border text-secondary">
                            <img src="{{asset('assets/icons/global.svg')}}" class="w-5 h-5" alt="icon">
                        </div>
                        <div>
                            <p class="text-text-muted text-xs font-bold uppercase tracking-wider mb-1">Office</p>
                            <p class="text-primary font-bold">Jl. Antasura No. 65, Denpasar, Bali – Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm border border-surface-border text-secondary">
                            <img src="{{asset('assets/icons/call.svg')}}" class="w-5 h-5" alt="icon">
                        </div>
                        <div>
                            <p class="text-text-muted text-xs font-bold uppercase tracking-wider mb-1">Phone</p>
                            <p class="text-primary font-bold">(0361) 444234</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm border border-surface-border text-secondary">
                            <img src="{{asset('assets/icons/monitor-mobbile.svg')}}" class="w-5 h-5" alt="icon">
                        </div>
                        <div>
                             <p class="text-text-muted text-xs font-bold uppercase tracking-wider mb-1">Contact Person</p>
                            <p class="text-primary font-bold">Ayu Putry Magitha Anindia Amilia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div action="{{route('front.appointment_store')}}" method="POST"
                  class="lg:w-2/3 bg-white p-8 md:p-10 rounded-3xl border border-surface-border shadow-card"
                  data-aos="fade-left" data-aos-delay="100">
                <form action="{{route('front.appointment_store')}}" method="POST" class="flex flex-col gap-6">
                    @csrf
                    @method('POST')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="font-bold text-primary">Complete Name</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/profile.svg')}}" alt="icon">
                                </span>
                                <input type="text" name="name" id="name"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold placeholder:font-normal placeholder:text-gray-400"
                                       placeholder="Write your complete name" required>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="email" class="font-bold text-primary">Email Address</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/sms.svg')}}" alt="icon">
                                </span>
                                <input type="email" name="email" id="email"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold placeholder:font-normal placeholder:text-gray-400"
                                       placeholder="Write your email address" required>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div class="flex flex-col gap-2">
                            <label for="phone_number" class="font-bold text-primary">Phone Number</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/call-black.svg')}}" alt="icon">
                                </span>
                                <input type="tel" name="phone_number" id="phone_number"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold placeholder:font-normal placeholder:text-gray-400"
                                       placeholder="Write your phone number" required>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="dateInput" class="font-bold text-primary">Meeting Date</label>
                            <div class="relative group">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/calendar.svg')}}" alt="icon">
                                </span>
                                <!-- Simplified date input interaction -->
                                <input type="date" name="meeting_at" id="dateInput"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold text-primary cursor-pointer"
                                       required>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="product_id" class="font-bold text-primary">Your Interest</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/building-4-black.svg')}}" alt="icon">
                                </span>
                                <select name="product_id" id="product_id"
                                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold bg-white appearance-none cursor-pointer"
                                        required>
                                    <option value="" hidden>Choose a project</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </div>
                        </div>
                         <div class="flex flex-col gap-2">
                            <label for="budget" class="font-bold text-primary">Budget Available</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 flex items-center justify-center pointer-events-none">
                                    <img src="{{asset('assets/icons/dollar-square.svg')}}" alt="icon">
                                </span>
                                <input type="number" name="budget" id="budget"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold placeholder:font-normal placeholder:text-gray-400"
                                       placeholder="What is your budget" required>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="brief" class="font-bold text-primary">Project Brief</label>
                        <div class="relative">
                            <span class="absolute left-4 top-4 w-5 h-5 flex items-center justify-center pointer-events-none">
                                <img src="{{asset('assets/icons/message-text.svg')}}" alt="icon">
                            </span>
                            <textarea name="brief" id="brief" rows="4"
                                      class="w-full pl-12 pr-4 py-3 rounded-xl border border-surface-border focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all font-semibold placeholder:font-normal placeholder:text-gray-400 resize-none"
                                      placeholder="Tell us the project brief"></textarea>
                        </div>
                    </div>

                    <button type="submit"
                            class="bg-secondary text-white w-full py-4 rounded-xl hover:bg-secondary-hover shadow-lg hover:shadow-orange-500/30 transition-all duration-300 font-bold text-lg mt-2">
                        Submit Request
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="Testimonials" class="bg-surface-secondary py-20 mt-20 w-full">
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
@endsection

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="{{asset('js/contact-form.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{asset('js/carousel.js')}}"></script>

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
@endpush
