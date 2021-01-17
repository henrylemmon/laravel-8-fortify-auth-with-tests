<div x-data="{ open: false }" class="absolute top-0 left-0 w-full">
    <nav class="bg-gray-800">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    {{--<div class="flex-shrink-0">--}}
                    {{--old empty icon--}}
                    {{--</div>--}}
                    <div class="hidden md:block">
                        <div class="{{--ml-10--}} flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/" class="text-white px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                            @auth
                                <a href="/home" class="text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="/test-password-verify"
                                   class="text-white px-3 py-2 rounded-md text-sm font-medium">Test Password Verify</a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- big Profile dropdown begin -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">

                    @if (Route::has('login'))
                        @auth
                            <!-- Big Heroicon name: bell requires no extra classes -->
                            {{--<x-notification-bell
                                class=""
                            ></x-notification-bell>--}}
                            <!-- Big Heroicon name: bell end -->

                                <!-- big Profile dropdown -->
                                <div class="ml-3 relative">
                                    <div>
                                        <button
                                            class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none{{-- focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white--}} px-2 py-1"
                                            id="user-menu" aria-haspopup="true"
                                        >
                                            <span class="sr-only">Open user menu</span>
                                            <div
                                                @click="open = true"
                                                @click.away="open = false"
                                                x-cloak
                                                class="text-white text-sm hover:underline">
                                                {{ auth()->user()->name }}
                                            </div>
                                        </button>
                                    </div>
                                    <!--
                                      Profile dropdown panel, show/hide based on dropdown state.
                                      Entering: "transition ease-out duration-100"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                      Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"
                                    -->

                                    <div
                                        x-show="open"
                                        x-cloak
                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                    >
                                        {{--begin big logout link--}}
                                        <a
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem"
                                        >
                                            {{ __('Logout') }}
                                        </a>

                                        <form
                                            id="logout-form"
                                            action="{{ route('logout') }}"
                                            method="POST"
                                            class="hidden"
                                        >
                                            @csrf
                                        </form>
                                        {{--end big logout link--}}
                                    </div>
                                </div>
                            @else
                                <div class="ml-3 relative">
                                    <div>
                                        <button
                                            @click="open = true"
                                            @click.away="open = false"
                                            x-cloak
                                            class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none{{-- focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white--}}"
                                            id="user-menu" aria-haspopup="true"
                                        >
                                            <span class="sr-only">Open register login menu</span>
                                            <div class="text-white text-sm">
                                                <span class="underline">Login</span>&nbsp; or &nbsp; <span class="underline">Register</span>
                                            </div>
                                        </button>
                                    </div>

                                    <div
                                        x-show="open"
                                        x-cloak
                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                                    >
                                        <a
                                            href="login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem"
                                        >Login</a>

                                        <a
                                            href="register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem"
                                        >Register</a>
                                    </div>
                                </div>
                            @endauth

                        @endif

                    </div>
                </div>
                <!-- big Profile dropdown end -->

                <!-- Mobile menu button begin -->
                <div class="-mr-2 flex md:hidden">
                    <button
                        class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                    >
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: menu -->
                        <svg
                            @click="open = true" x-show="! open" x-cloak class="block h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <!-- Heroicon name: x -->
                        <svg
                            @click="open = false" x-show="open" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
                {{--Mobile menu button end--}}
            </div>
        </div>

        <!-- Mobile menu, toggle classes based on menu state. -->
        <div x-show="open" @click.away="open = false" x-cloak class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a
                        href="/" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                >Welcome</a>
                @auth
                    <a
                        href="/home" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                    >Home</a>
                    <a
                        href="/test-password-verify" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                    >Test Password Verify</a>
                @endauth
            </div>

            {{--small avatar and dropdown begin--}}
            <div class="pt-4 pb-3 border-t border-gray-400">
                <div class="flex items-center px-2">
                    @if (Route::has('login'))
                        @auth
                            <div class="flex-shrink-0 w-full">
                                <div class="text-white text-lg px-3 py-2">
                                    {{ auth()->user()->name }}
                                </div>
                                {{--begin mobile logout link--}}
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"
                                    class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium w-full"
                                    role="menuitem"
                                >
                                    {{ __('Logout') }}
                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="hidden"
                                >
                                    @csrf
                                </form>
                                {{--end mobile logout link--}}
                            </div>

                        @else
                            <div class="flex-shrink-0 w-full">
                                <a
                                    href="login"
                                    class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                                    role="menuitem"
                                >Login</a>

                                @if(Route::has('register'))
                                    <a
                                        href="register"
                                        class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                                        role="menuitem"
                                    >Register</a>
                                @endif
                            </div>
                    @endauth
                @endif
                <!-- small Heroicon name: bell requires additional classes -->
                {{--<x-notification-bell
                    class="ml-auto flex-shrink-0"
                ></x-notification-bell>--}}
                <!-- small Heroicon name: bell end -->
                </div>

            </div>
            {{--small avatar and dropdown end--}}

        </div>
    </nav>
</div>{{--most outer x data--}}
