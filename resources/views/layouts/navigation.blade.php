<nav x-data="{ open: false }"
     class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-blue-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left Section -->
            <div class="flex items-center space-x-8">

                <!-- App Name (Pengganti Logo) -->
                <a href="{{ route('dashboard') }}"
                   class="text-xl font-bold text-blue-900 tracking-wide">
                    {{ config('app.name', 'MyApp') }}
                </a>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden sm:flex items-center space-x-6">

                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="text-blue-800 hover:text-blue-900">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link
                        :href="route('admin.informasi-klien.index')"
                        :active="request()->routeIs('admin.informasi-klien.*')"
                        class="text-blue-800 hover:text-blue-900">
                        Klien
                    </x-nav-link>

                    <!-- Button Tambah -->
                    <a href="{{ route('admin.informasi-klien.create') }}"
                       class="inline-flex items-center gap-1.5 px-4 py-2
                              bg-gradient-to-r from-blue-600 to-indigo-600
                              text-white text-sm font-semibold rounded-xl
                              shadow hover:shadow-lg hover:scale-[1.02]
                              transition">
                        + Tambah
                    </a>

                </div>
            </div>

            <!-- Right Section -->
            <div class="hidden sm:flex items-center">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center gap-2 px-4 py-2
                                   bg-blue-50 text-blue-900 rounded-xl
                                   hover:bg-blue-100 transition">

                            <span class="font-medium">
                                {{ Auth::user()->name }}
                            </span>

                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>

            </div>

            <!-- Hamburger (Mobile) -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                        class="p-2 rounded-lg text-blue-700 hover:bg-blue-100 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}"
                              class="inline-flex"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}"
                              class="hidden"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="sm:hidden bg-white border-t border-blue-100">
        <div class="px-4 py-4 space-y-2">

            <x-responsive-nav-link :href="route('dashboard')">
                Dashboard
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('admin.informasi-klien.index')">
                Klien
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('admin.informasi-klien.create')">
                Tambah Klien
            </x-responsive-nav-link>

            <div class="border-t pt-3">
                <div class="text-sm font-medium text-blue-900">
                    {{ Auth::user()->name }}
                </div>
                <div class="text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>
            </div>

            <x-responsive-nav-link :href="route('profile.edit')">
                Profile
            </x-responsive-nav-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link
                    :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Log Out
                </x-responsive-nav-link>
            </form>

        </div>
    </div>
</nav>
