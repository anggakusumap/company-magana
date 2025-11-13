@extends('front.layouts.app')

@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar/>
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]" data-aos="fade-down">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">FAQ</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center" data-aos="fade-up" data-aos-delay="100">
                    Frequently Asked Question
                </h2>
            </div>
        </div>
    </div>
    <div id="FAQ" class="bg-[#F6F7FA] w-full pb-20 px-[10px] -mb-20">
        <div class="container max-w-[1000px] mx-auto">
            <div class="flex flex-col lg:flex-row justify-center gap-[50px] sm:gap-[70px] items-center mx-auto">
                <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">
                    <!-- FAQ 1 -->
                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full" data-aos="fade-up" data-aos-delay="100">
                        <button
                            class="accordion-button flex justify-between gap-1 items-center"
                            data-accordion="accordion-faq-1"
                        >
                            <span
                                class="font-bold text-lg leading-[27px] text-left">What products does Magana export?</span>
                            <div class="arrow w-9 h-9 flex shrink-0">
                                <img
                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"
                                    class="transition-all duration-300"
                                    alt="icon"
                                />
                            </div>
                        </button>
                        <div id="accordion-faq-1" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">
                                Magana specializes in exporting premium banana leaves and handcrafted plush toys made by
                                Balinese artisans. All our products are sustainably sourced and meet international
                                export standards.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full" data-aos="fade-up" data-aos-delay="200">
                        <button
                            class="accordion-button flex justify-between gap-1 items-center"
                            data-accordion="accordion-faq-2"
                        >
                            <span class="font-bold text-lg leading-[27px] text-left">Where is Magana based?</span>
                            <div class="arrow w-9 h-9 flex shrink-0">
                                <img
                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"
                                    class="transition-all duration-300"
                                    alt="icon"
                                />
                            </div>
                        </button>
                        <div id="accordion-faq-2" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">
                                We are proudly based in Bali, Indonesia, working directly with local farmers and
                                artisans to ensure authentic, high-quality products that represent Bali's nature and
                                culture.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full" data-aos="fade-up" data-aos-delay="300">
                        <button
                            class="accordion-button flex justify-between gap-1 items-center"
                            data-accordion="accordion-faq-3"
                        >
                            <span class="font-bold text-lg leading-[27px] text-left">Do you provide international shipping?</span>
                            <div class="arrow w-9 h-9 flex shrink-0">
                                <img
                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"
                                    class="transition-all duration-300"
                                    alt="icon"
                                />
                            </div>
                        </button>
                        <div id="accordion-faq-3" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">
                                Yes. We export worldwide through trusted logistics partners. Our packaging and export
                                procedures follow international safety and hygiene regulations, ensuring products
                                arrive fresh and in excellent condition.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full" data-aos="fade-up" data-aos-delay="400">
                        <button
                            class="accordion-button flex justify-between gap-1 items-center"
                            data-accordion="accordion-faq-4"
                        >
                            <span class="font-bold text-lg leading-[27px] text-left">Can I request custom orders or packaging?</span>
                            <div class="arrow w-9 h-9 flex shrink-0">
                                <img
                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"
                                    class="transition-all duration-300"
                                    alt="icon"
                                />
                            </div>
                        </button>
                        <div id="accordion-faq-4" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">
                                Absolutely. We accommodate custom doll designs, branding, and tailored packaging for
                                both banana leaves and crafts, depending on order size and destination requirements.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="flex flex-col p-5 rounded-2xl bg-white w-full" data-aos="fade-up" data-aos-delay="500">
                        <button
                            class="accordion-button flex justify-between gap-1 items-center"
                            data-accordion="accordion-faq-5"
                        >
                            <span class="font-bold text-lg leading-[27px] text-left">How can I become a Magana partner or distributor?</span>
                            <div class="arrow w-9 h-9 flex shrink-0">
                                <img
                                    src="{{asset('assets/icons/arrow-circle-down.svg')}}"
                                    class="transition-all duration-300"
                                    alt="icon"
                                />
                            </div>
                        </button>
                        <div id="accordion-faq-5" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">
                                You can contact us directly via email or WhatsApp to discuss partnership
                                opportunities. Our team will assist you with pricing, shipping, and required export
                                documentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>
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
    <script src="{{asset('js/carousel.js')}}"></script>
    <script src="{{asset('js/accordion.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{asset('js/modal-video.js')}}"></script>

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
