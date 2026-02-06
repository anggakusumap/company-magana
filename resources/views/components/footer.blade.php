<footer class="bg-primary text-white w-full relative overflow-hidden mt-20 pb-10">
    <!-- Background Watermark -->
    <div class="absolute -bottom-24 w-full select-none pointer-events-none z-0">
        <p class="font-black text-[12vw] leading-none text-center text-white opacity-[0.03]">MAGANA</p>
    </div>

    <div class="container relative z-10 pt-20 pb-10">
        <div class="flex flex-col md:flex-row justify-between items-start gap-12">
            <!-- Left Section: Logo & Motto -->
            <div class="flex flex-col gap-6 max-w-sm">
                <div class="h-12 w-auto overflow-hidden">
                    <img src="{{asset('assets/logo/logo-white.png')}}" class="object-contain h-full" alt="logo" />
                </div>
                <p class="text-slate-400 leading-relaxed">
                    Delivering Indonesia’s natural and creative products worldwide with quality and sustainability.
                </p>

                <!-- Social Links -->
                <div class="flex items-center gap-4 mt-2">
                    <a href="#" target="_blank" aria-label="YouTube"
                        class="bg-white/10 p-2 rounded-full hover:bg-secondary hover:text-white transition-all duration-300 group">
                        <img src="{{asset('assets/icons/youtube.svg')}}"
                            class="w-5 h-5 group-hover:brightness-0 group-hover:invert transition-all" alt="youtube" />
                    </a>
                    <a href="https://wa.me/62xxxxxxxxxx" target="_blank" aria-label="WhatsApp"
                        class="bg-white/10 p-2 rounded-full hover:bg-secondary hover:text-white transition-all duration-300 group">
                        <img src="{{asset('assets/icons/whatsapp.svg')}}"
                            class="w-5 h-5 group-hover:brightness-0 group-hover:invert transition-all" alt="whatsapp" />
                    </a>
                    <a href="#" target="_blank" aria-label="Facebook"
                        class="bg-white/10 p-2 rounded-full hover:bg-secondary hover:text-white transition-all duration-300 group">
                        <img src="{{asset('assets/icons/facebook.svg')}}"
                            class="w-5 h-5 group-hover:brightness-0 group-hover:invert transition-all" alt="facebook" />
                    </a>
                    <a href="#" target="_blank" aria-label="Instagram"
                        class="bg-white/10 p-2 rounded-full hover:bg-secondary hover:text-white transition-all duration-300 group">
                        <img src="{{asset('assets/icons/instagram.svg')}}"
                            class="w-5 h-5 group-hover:brightness-0 group-hover:invert transition-all"
                            alt="instagram" />
                    </a>
                </div>
            </div>

            <!-- Right Section: Links (Example) -->
            <div class="grid grid-cols-2 gap-10 sm:gap-16">
                <div class="flex flex-col gap-4">
                    <h3 class="font-bold text-lg text-white">Company</h3>
                    <a href="{{route('front.about')}}"
                        class="text-slate-400 hover:text-secondary transition-colors">About Us</a>
                    <a href="{{route('front.team')}}" class="text-slate-400 hover:text-secondary transition-colors">Our
                        Team</a>
                    <a href="{{route('front.product')}}"
                        class="text-slate-400 hover:text-secondary transition-colors">Products</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h3 class="font-bold text-lg text-white">Support</h3>
                    <a href="{{route('front.faq')}}"
                        class="text-slate-400 hover:text-secondary transition-colors">FAQ</a>
                    <a href="{{route('front.appointment')}}"
                        class="text-slate-400 hover:text-secondary transition-colors">Contact Us</a>
                    <a href="#" class="text-slate-400 hover:text-secondary transition-colors">Privacy Policy</a>
                </div>
            </div>
        </div>

        <div class="border-t border-white/10 mt-16 pt-8 text-center text-slate-500 text-sm">
            &copy; {{ date('Y') }} PT. Magana Dana Mahanta. All rights reserved.
        </div>
    </div>
</footer>