<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <x-nav-link :href="url('/')">
                        {{ __('U1') }}
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @can('isAdmin', auth()->user())
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard ') }}
                        </x-nav-link>

                        <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                            {{ __('Admin ') }}
                        </x-nav-link>
                    @endcan
                    <x-nav-link :href="route('raffles.index')" :active="request()->routeIs('raffles.index')">
                        {{ __('Raffles ') }}
                    </x-nav-link>
                    <x-nav-link :href="route('tickets.index')" :active="request()->routeIs('tickets.index')">
                        {{ __('My Raffles') }}
                    </x-nav-link>
                    <x-nav-link :href="route('winners.index')" :active="request()->routeIs('winners.index')">
                        {{ __('Winners') }}
                    </x-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div>
                    <span class="text-black">Tickets: {{ Auth::user()->number_of_tickets ?? 0 }}</span>
                    <a href="{{ url('/buy-tickets') }}">
                        <x-primary-button class="ml-3">
                            {{ __('Buy Tickets') }}
                        </x-primary-button>
                    </a>
                </div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name ?? '' }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.show')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <!-- Avatar -->
                <div class="ml-4">
                    @auth
                        @if (Auth::user()->image_path)
                            <img class="h-12 w-12 rounded-full object-cover"
                                src="{{ asset('storage/' . Auth::user()->image_path) }}" alt="{{ Auth::user()->name }}"
                                width="56px">
                        @else
                            <img class="h-12 w-12 rounded-full object-cover"
                                src="{{ asset('assets/images/elements/team-obj.png') }}"
                                alt="{{ Auth::user()->name ?? 'name' }}" width="56px">
                        @endif
                    @endauth
                </div>
            </div>


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            {{-- <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link> --}}
            <x-responsive-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                {{ __('Admin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('raffles.index')" :active="request()->routeIs('raffles.index')">
                {{ __('Raffles') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                {{ __('My Raffles') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'purchase-tickets-modal')">
                {{ __('Buy Tickets') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name ?? '' }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email ?? '' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>
