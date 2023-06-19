<div {{ $attributes->class(["min-w-[330px] bg-[#343444] rounded-[20px] px-5"]) }}>
    <div class="py-5">
        <div class="h-[290px] bg-[#7A798A] rounded-[20px] overflow-hidden">
            <img id="preview-image" class="w-full h-full object-center bg-cover"/>
        </div>
        <span
            class="mt-5 text-lg font-bold block" id="title">Lorem ipsum</span>
        <div class="flex justify-between items-center mt-[14px]">
            <div
                class="flex gap-x-3 items-center">
                <div class="h-11 w-11 bg-[#7A798A] rounded-[15px] overflow-hidden">
                    @if(Auth::user()->getFirstMediaUrl('users'))
                        <img src="{{  Auth::user()->getFirstMediaUrl('users') }}"
                             class="w-full h-full object-center bg-cover"/>
                    @endif
                </div>
                <div class="flex flex-col justify-center">
                    <span class="text-[13px] text-[#8A8AA0]">Creator</span>
                    <span class="text-[15px] font-bold" id="author">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <div class="text-xs font-bold py-[2px] px-3 bg-[#5142FC] rounded-lg">BSC</div>
        </div>
    </div>
    <div>
        <div class="bg-[#14141F] h-[1px]"></div>
        <div class="pt-[15px] pb-[11px] flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-[13px] text-[#8A8AA0]">Current Bid</span>
                <div>
                    <span class="font-bold text-lg" id="price">123</span>
                    <span>BCS </span>
                    <span class="text-[13px] text-[#8A8AA0]" >= $<span id="price_preview">3126733.80</span> </span></span>
                </div>
            </div>
            <x-likes number="100"/>
        </div>
    </div>
</div>
