@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full pt-[13px] pb-[46px] text-sm ps-5 bg-transparent border border-[#343444] rounded-[8px]']) !!}>{{$slot}}</textarea>
