<div class="p-5 bg-[#343444] rounded-[10px] min-w-[450px] max-w-[450px]">
    <div class="grid grid-cols-6 gap-[10px]">
        @foreach([0,1,2,3,4] as $index)
            @if($collection->items->count() > $index)
                <a href="{{ action([\App\Http\Controllers\AuthorItemController::class,'show'],['author'=>$collection->author,'item'=>$collection->items[$index]]) }}"
                   class="bg-[#7A798A] rounded-[10px] {{ $index<2? "col-span-3":"col-span-2" }} h-[131px]">
                    <img class="w-full h-full rounded-[10px] object-cover"
                         src="{{$collection->items[$index]->getFirstMediaUrl('items')}}"/>
                </a>
            @else
                <div
                    class="bg-[#7A798A] rounded-[10px] {{ $index<2? "col-span-3":"col-span-2" }} h-[131px] w-full "></div>
            @endif
        @endforeach
    </div>
    <div class="mt-[15px] flex justify-between items-start">
        <div class="flex gap-x-2.5 items-center">
            <div class="relative bg-[#7A798A] rounded-[21px] w-16 h-16">
                @if($collection->author->getFirstMediaUrl('users'))
                    <a href="{{ action([\App\Http\Controllers\AuthorController::class,'show'],['author'=>$collection->author]) }}"
                       class="bg-[#7A798A] rounded-[10px] {{ $index<2? "col-span-3":"col-span-2" }} h-[131px]">
                        <img src="{{ $collection->author->getFirstMediaUrl('users') }}"
                             class="rounded-[21px] w-full h-full object-center bg-cover"/>
                    </a>
                @endif
                <svg class="absolute bottom-0 right-0" width="18" height="18"
                     viewBox="0 0 18 18"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9" cy="9" r="9" fill="#5142FC"/>
                    <path
                        d="M7.8095 12.6978C7.7124 12.7954 7.58 12.8499 7.4424 12.8499C7.30481 12.8499 7.1724 12.7954 7.07531 12.6978L4.14373 9.76571C3.83946 9.46144 3.83946 8.96817 4.14373 8.66442L4.51083 8.29732C4.81509 7.99305 5.30784 7.99305 5.61211 8.29732L7.4424 10.1276L12.3881 5.18194C12.6923 4.87767 13.1856 4.87767 13.4894 5.18194L13.8565 5.54903C14.1607 5.8533 14.1607 6.34657 13.8565 6.65032L7.8095 12.6978Z"
                        fill="white"/>
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold">{{ $collection->name }}</span>
                <p class="flex gap-x-1.5">
                    <span class="text-[#8A8AA0] text-[13px] ">Created by</span>
                    <a href="{{ action([\App\Http\Controllers\AuthorController::class,'show'],['author'=>$collection->author]) }}">
                        <span class="text-[15px] font-bold">{{$collection->author->name}}</span>
                    </a>
                </p>
            </div>
        </div>
        <button id="collection-like_{{$collection->id}}">
            <x-likes :number="$collection->likes_count"/>
        </button>
    </div>
</div>
<script>
    document.querySelector('#collection-like_{{$collection->id}}').addEventListener("click", function (e) {
        fetch("{{ action([\App\Http\Controllers\CollectionController::class,'like'],compact('collection')) }}",
            {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    _token: "{{ csrf_token() }}"
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === "Unauthenticated.") {
                    return alert('You need to login to like this item')
                }
            });
    })
</script>
