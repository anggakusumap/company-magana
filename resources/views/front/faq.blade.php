@extends('front.layouts.app')

@section('content')
    <div id="header" class="relative bg-surface-secondary overflow-hidden pt-10 pb-32">
        <div class="container relative z-10">
            <x-navbar />
        </div>
    </div>

    <div id="FAQ" class="container relative z-20 -mt-20 pb-20">
        <div class="flex flex-col gap-12 items-center">
            <div class="flex flex-col gap-4 items-center text-center">
                <div class="breadcrumb flex items-center justify-center gap-3 text-sm" data-aos="fade-down">
                    <a href="{{ route('front.index') }}"
                        class="text-text-muted hover:text-primary transition-colors">Home</a>
                    <span class="text-text-muted">/</span>
                    <span class="text-primary font-semibold">FAQ</span>
                </div>
                <h1 class="font-black text-4xl leading-tight text-primary" data-aos="fade-up" data-aos-delay="100">
                    Frequently Asked Question
                </h1>
            </div>

            <div class="w-full max-w-3xl flex flex-col gap-6">
                <!-- FAQ 1 -->
                <div class="group bg-white rounded-2xl border border-surface-border p-1" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="accordion-button w-full flex justify-between items-center p-5 text-left"
                        data-accordion="accordion-faq-1">
                        <span class="font-bold text-lg text-primary">What products does Magana export?</span>
                        <div
                            class="w-8 h-8 rounded-full bg-surface-secondary flex items-center justify-center transition-transform duration-300 group-[.active]:rotate-180">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-faq-1" class="accordion-content hidden px-5 pb-5">
                        <p class="text-text-muted leading-relaxed">
                            Magana specializes in exporting premium banana leaves and handcrafted plush toys made by
                            Balinese artisans. All our products are sustainably sourced and meet international
                            export standards.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="group bg-white rounded-2xl border border-surface-border p-1" data-aos="fade-up"
                    data-aos-delay="200">
                    <button class="accordion-button w-full flex justify-between items-center p-5 text-left"
                        data-accordion="accordion-faq-2">
                        <span class="font-bold text-lg text-primary">Where is Magana based?</span>
                        <div
                            class="w-8 h-8 rounded-full bg-surface-secondary flex items-center justify-center transition-transform duration-300 group-[.active]:rotate-180">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-faq-2" class="accordion-content hidden px-5 pb-5">
                        <p class="text-text-muted leading-relaxed">
                            We are proudly based in Bali, Indonesia, working directly with local farmers and
                            artisans to ensure authentic, high-quality products that represent Bali's nature and
                            culture.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="group bg-white rounded-2xl border border-surface-border p-1" data-aos="fade-up"
                    data-aos-delay="300">
                    <button class="accordion-button w-full flex justify-between items-center p-5 text-left"
                        data-accordion="accordion-faq-3">
                        <span class="font-bold text-lg text-primary">Do you provide international shipping?</span>
                        <div
                            class="w-8 h-8 rounded-full bg-surface-secondary flex items-center justify-center transition-transform duration-300 group-[.active]:rotate-180">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-faq-3" class="accordion-content hidden px-5 pb-5">
                        <p class="text-text-muted leading-relaxed">
                            Yes. We export worldwide through trusted logistics partners. Our packaging and export
                            procedures follow international safety and hygiene regulations, ensuring products
                            arrive fresh and in excellent condition.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="group bg-white rounded-2xl border border-surface-border p-1" data-aos="fade-up"
                    data-aos-delay="400">
                    <button class="accordion-button w-full flex justify-between items-center p-5 text-left"
                        data-accordion="accordion-faq-4">
                        <span class="font-bold text-lg text-primary">Can I request custom orders or packaging?</span>
                        <div
                            class="w-8 h-8 rounded-full bg-surface-secondary flex items-center justify-center transition-transform duration-300 group-[.active]:rotate-180">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-faq-4" class="accordion-content hidden px-5 pb-5">
                        <p class="text-text-muted leading-relaxed">
                            Absolutely. We accommodate custom doll designs, branding, and tailored packaging for
                            both banana leaves and crafts, depending on order size and destination requirements.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="group bg-white rounded-2xl border border-surface-border p-1" data-aos="fade-up"
                    data-aos-delay="500">
                    <button class="accordion-button w-full flex justify-between items-center p-5 text-left"
                        data-accordion="accordion-faq-5">
                        <span class="font-bold text-lg text-primary">How can I become a Magana partner or
                            distributor?</span>
                        <div
                            class="w-8 h-8 rounded-full bg-surface-secondary flex items-center justify-center transition-transform duration-300 group-[.active]:rotate-180">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-faq-5" class="accordion-content hidden px-5 pb-5">
                        <p class="text-text-muted leading-relaxed">
                            You can contact us directly via email or WhatsApp to discuss partnership
                            opportunities. Our team will assist you with pricing, shipping, and required export
                            documentation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
@endsection

@push('after-styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Simple Accordion Script
        $(document).ready(function () {
            $('.accordion-button').on('click', function () {
                const targetId = $(this).data('accordion');
                const content = $('#' + targetId);
                const parent = $(this).parent();

                // Toggle active state
                parent.toggleClass('active pb-2 shadow-sm border-secondary/20'); // Add styles when active if needed

                // Toggle visibility
                if (content.hasClass('hidden')) {
                    content.removeClass('hidden').slideDown(300);
                    // Rotate arrow
                    $(this).find('div').addClass('rotate-180 bg-secondary text-white');
                } else {
                    content.slideUp(300, function () {
                        $(this).addClass('hidden');
                    });
                    // Reset arrow
                    $(this).find('div').removeClass('rotate-180 bg-secondary text-white');
                }
            });
        });
    </script>
@endpush