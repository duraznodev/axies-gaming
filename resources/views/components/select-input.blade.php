@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full py-[13px] text-sm ps-5 bg-transparent border border-[#343444] rounded-[8px]']) !!}>
    <option value="1">Dog</option>
    <option value="2">Cat</option>
    <option value="3">Hamster</option>
    <option value="4">Parrot</option>
    <option value="5">Spider</option>
    <option value="6">Goldfish</option>
</select>
