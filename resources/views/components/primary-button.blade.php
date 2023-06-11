<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-[56px] w-full py-4 text-center border border-white bg-transparent text-[15px] font-bold']) }}>
    {{ $slot }}
</button>
