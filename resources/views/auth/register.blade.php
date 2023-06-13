<x-app-layout>
    <x-header name="Register"/>
    <form enctype="multipart/form-data" class="mt-20 flex flex-col items-center w-[690px] h-[716px] mx-auto" method="POST"
          action="{{ route('register') }}">
        @csrf
        <h4 class="text-4xl font-bold">Signup to NFTs</h4>
        <x-form.heading class="mt-16" text="Or signup with email"/>
        <!-- Name -->
        <div class="flex w-full mt-[30px] gap-y-6 flex-col">
            <x-text-input placeholder="Your Full Name" id="name" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            <!-- Email Address -->
            <x-text-input placeholder="Your Email Address" id="email" type="email" name="email" :value="old('email')"
                          required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            <!-- Password -->
            <x-text-input id="password"
                          type="password"
                          name="password"
                          placeholder="Your Password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            <!-- Confirm Password -->
            <x-text-input id="password_confirmation"
                          type="password"
                          name="password_confirmation"
                          placeholder="Confirm Your Password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>

            <input accept="image/*" type="file" name="user_img"
                   id="input-file"
                   class="cursor-pointer w-full h-full">
            <x-input-error :messages="$errors->get('user_img')" class="mt-2"/>
        </div>
        <div class="w-full flex justify-end mt-8">
            <a class="text-[15px] font-bold"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
        <x-primary-button class="mt-8">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-app-layout>
