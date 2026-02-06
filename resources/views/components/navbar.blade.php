<nav
    class="sticky top-0 z-50 flex flex-wrap items-center justify-between bg-white/90 backdrop-blur-md border-b border-surface-border py-4 px-6 md:px-8 gap-y-3 transition-all duration-300">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="{{asset('assets/logo/logo-color.png')}}" class="object-contain w-full h-full" alt="logo">
        </div>
    </div>
    <ul class="flex flex-wrap items-center gap-8 hidden md:flex">
        <li
            class="{{request()->routeIs('front.index') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.index')}}">Home</a>
        </li>
        <li
            class="{{request()->routeIs('front.product') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.product')}}">Products</a>
        </li>
        <li
            class="{{request()->routeIs('front.team') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.team')}}">Our Team</a>
        </li>
        <li
            class="{{request()->routeIs('front.about') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.about')}}">About</a>
        </li>
        <li
            class="{{request()->routeIs('front.faq') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.faq')}}">FAQ</a>
        </li>
        <li
            class="{{request()->routeIs('front.appointment') ? 'text-secondary font-bold' : 'text-text-main font-medium'}} hover:text-secondary transition-colors duration-300">
            <a href="{{route('front.appointment')}}">Contact Us</a>
        </li>
    </ul>
    <div class="flex items-center gap-4">
        <!-- Mobile Menu Button (Hamburger) - can be implemented with Alpine.js later if needed in full interaction -->
        <a href="{{route('front.appointment')}}"
            class="bg-secondary text-white px-6 py-3 rounded-full hover:bg-secondary-hover shadow-lg hover:shadow-orange-500/30 transition-all duration-300 font-bold text-sm">
            Get a Quote
        </a>
    </div>
</nav>
