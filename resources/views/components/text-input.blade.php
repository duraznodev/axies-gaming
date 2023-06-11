@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full py-[13px] text-sm ps-5 bg-transparent border border-[#343444] rounded-[8px]']) !!}>
