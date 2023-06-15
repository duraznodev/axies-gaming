<x-app-layout>
    <x-header name="Login"/>
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <form class="mt-20 flex flex-col items-center w-[690px] h-[716px] mx-auto" method="POST"
          action="{{ route('login') }}">
        @csrf
        <h4 class="text-4xl font-bold">Login to NFTs</h4>
        <x-form.heading class="mt-16" text="Or login with email"/>
        <!-- Email Address -->
        <div class="flex w-full mt-[30px] gap-y-6 flex-col">
            <x-text-input id="email" type="email" name="email" :value="old('email')" required
                          autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            <!-- Password -->
            <x-text-input id="password" type="password" name="password"
                          required autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>
        <!-- Remember Me -->
        <div class="w-full flex justify-between mt-8">
            <label for="remember_me" class="flex items-center gap-x-2">
                <input id="remember_me" type="checkbox" class="rounded bg-transparent w-5 h-5 border border-[#343444]"
                       name="remember">
                <span class="text-sm">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-[15px] font-bold"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password ?') }}
                </a>
            @endif
        </div>
        <div class="w-full flex justify-end mt-8">
            <a class="text-[15px] font-bold"
               href="{{ route('register') }}">
                {{ __('Not register yet?') }}
            </a>
        </div>
        <x-primary-button class="mt-[34px]">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-app-layout>
