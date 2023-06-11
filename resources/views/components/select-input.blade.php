@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full py-[13px] text-sm ps-5 bg-transparent border border-[#343444] rounded-[8px]']) !!}>
    @foreach($options as $option)
        <option class="bg-[#14141f]" value="{{$option->id}}">{{ $option->name }}</option>
    @endforeach
</select>
