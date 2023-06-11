<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#14141F] text-white">
<x-navbar>
    <x-slot name="anchor">
{{--        <a href="{{ action([\App\Http\Controllers\Auth\AuthenticatedSessionController::class,'create']) }}" class="flex gap-x-2 items-center justify-center py-[13px] px-[35px] border border-[#5142FC] rounded-3xl ">--}}
{{--            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <g id="Icon Wallet">--}}
{{--                    <g id="Wallet">--}}
{{--                        <path id="Wallet_2" fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                              fill="white"--}}
{{--                              d="M14.8072 6.98483H18.3332C18.3332 4.15383 16.6369 2.5 13.7628 2.5H6.23688C3.3628 2.5 1.6665 4.15383 1.6665 6.94872V13.0513C1.6665 15.8462 3.3628 17.5 6.23688 17.5H13.7628C16.6369 17.5 18.3332 15.8462 18.3332 13.0513V12.7913H14.8072C13.1708 12.7913 11.8443 11.4979 11.8443 9.9025C11.8443 8.30707 13.1708 7.01372 14.8072 7.01372V6.98483ZM14.8072 8.22701H17.711C18.0546 8.22701 18.3332 8.49861 18.3332 8.83365V10.9425C18.3292 11.2759 18.0529 11.5452 17.711 11.5491H14.8739C14.0455 11.56 13.3211 11.007 13.1332 10.2203C13.0391 9.73191 13.1712 9.22797 13.4941 8.84351C13.817 8.45906 14.2976 8.2334 14.8072 8.22701ZM14.9332 10.4441H15.2072C15.5591 10.4441 15.8443 10.1661 15.8443 9.82306C15.8443 9.48004 15.5591 9.20197 15.2072 9.20197H14.9332C14.7649 9.20004 14.6028 9.26387 14.4832 9.3792C14.3635 9.49453 14.2961 9.65177 14.2961 9.81584C14.2961 10.16 14.5802 10.4402 14.9332 10.4441ZM5.61465 6.98483H10.3183C10.6702 6.98483 10.9554 6.70676 10.9554 6.36375C10.9554 6.02073 10.6702 5.74266 10.3183 5.74266H5.61465C5.26569 5.74263 4.98167 6.01633 4.97761 6.35652C4.97759 6.70073 5.26163 6.98088 5.61465 6.98483Z"--}}
{{--                        />--}}
{{--                    </g>--}}
{{--                </g>--}}
{{--            </svg>--}}
{{--            <span class="font-bold text-[15px]">Login</span>--}}
{{--        </a>--}}
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </x-slot>
</x-navbar>

{{ $slot }}
<x-footer/>
</body>
</html>
