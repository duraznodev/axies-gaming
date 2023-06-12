<div {{ $attributes->merge(['class'=>"min-w-[330px] w-[330px] bg-[#343444] rounded-[20px] px-5"]) }}>
    <div class="py-5">
        <div class="h-[290px] bg-[#7A798A] overflow-hidden rounded-[20px]">
            @if($item->getFirstMediaUrl($item->author->name))
                <img src="{{ $item->getFirstMediaUrl($item->author->name) }}"  class="w-full h-full object-center bg-cover"/>
            @endif
        </div>
        <a href="{{ $mine?route('items.show',compact('item')):action([\App\Http\Controllers\AuthorItemController::class,'show'],['author'=>$item->author,'item'=>$item]) }}"
           class="mt-5 text-lg font-bold block">{{ strlen($item->title)>28?substr($item->title,0,29)."...":$item->title }}</a>
        <div class="flex justify-between items-center mt-[14px]">
            <a
                href="{{ $mine?route('profile.edit'):action([\App\Http\Controllers\AuthorController::class,'show'],['author'=>$item->author]) }}"
                class="flex gap-x-3 items-center block">
                <div class="h-11 w-11 bg-[#7A798A] rounded-[15px]"></div>
                <div class="flex flex-col justify-center">
                    <sEpan class="text-[13px] text-[#8A8AA0]">Creator</sEpan>
                    <span class="text-[15px] font-bold">{{ $item->author->name }}</span>
                </div>
            </a>
            <div class="text-xs font-bold py-[2px] px-3 bg-[#5142FC] rounded-lg">BSC</div>
        </div>
    </div>
    <div>
        <div class="bg-[#14141F] h-[1px]"></div>
        <div class="pt-[15px] pb-[11px] flex items-center justify-between">
            <div class="flex flex-col">
                <span class="text-[13px] text-[#8A8AA0]">Current Bid</span>
                <span class="font-bold text-lg">{{ $item->price }} BCS <span
                        class="text-[13px] text-[#8A8AA0]">= $12.246</span></span>
            </div>
            <x-likes number="100"/>
        </div>
    </div>
</div>
