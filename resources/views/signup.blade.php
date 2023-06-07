<x-layout :name="$name">
    <form class="mt-20 flex flex-col items-center w-[690px] h-[716px] mx-auto">
        <h4 class="text-4xl font-bold">Signup to NFTs</h4>
        <x-form.heading class="mt-16" text="Or signup with email"/>
        <div class="flex w-full mt-[30px] gap-y-6 flex-col">
            <x-form.input class="w-full" placeholder="Your Full Name" name="email" type="email"/>
            <x-form.input class="w-full" placeholder="Your Email Address" name="email" type="email"/>
            <x-form.input class="w-full" placeholder="Your Password" name="password" type="password"/>
        </div>
        <div class="w-full flex justify-between mt-8">
            <div class="flex items-center gap-x-2 ">
                <input type="checkbox" class=" rounded bg-transparent w-5 h-5 border border-[#343444]">
                <span class="text-sm">Remember me</span>
            </div>
            <a href="#" class="text-[15px] font-bold">Forgot Password ?</a>
        </div>
        <x-form.button class="mt-[34px]" text="Signup"/>
    </form>
</x-layout>

