<x-app-layout>
    <x-header name="Explore"/>
    <div class="max-w-[1410px] my-20 mx-auto flex justify-between">
        <div class="w-[280px] flex flex-col gap-y-6">
            <div>
                <div class="flex justify-between ">
                    <span class="text-xl font-bold">Categories</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.2902 9.30966C17.1977 9.21695 17.0878 9.1434 16.9668 9.09322C16.8459 9.04304 16.7162 9.01721 16.5852 9.01721C16.4543 9.01721 16.3246 9.04304 16.2036 9.09322C16.0826 9.1434 15.9727 9.21695 15.8802 9.30966L12.0002 13.1897L8.12022 9.30966C7.93324 9.12268 7.67965 9.01763 7.41522 9.01763C7.1508 9.01763 6.8972 9.12268 6.71022 9.30966C6.52324 9.49663 6.4182 9.75023 6.4182 10.0147C6.4182 10.2791 6.52324 10.5327 6.71022 10.7197L11.3002 15.3097C11.3927 15.4024 11.5026 15.4759 11.6236 15.5261C11.7446 15.5763 11.8743 15.6021 12.0052 15.6021C12.1362 15.6021 12.2659 15.5763 12.3868 15.5261C12.5078 15.4759 12.6177 15.4024 12.7102 15.3097L17.3002 10.7197C17.6802 10.3397 17.6802 9.69966 17.2902 9.30966Z"
                            fill="white"/>
                    </svg>
                </div>
                <div class="flex flex-col mt-2.5 gap-y-2">
                    @foreach($categories as $category)
                        <div class="flex items-center gap-x-2 ">
                            <input class="w-4 h-4 rounded" type="checkbox" id="{{$category->id}}">
                            <label class="text-[13px]" for="{{$category->id}}">{{ $category->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="h-[1px] bg-[#343444]"></div>
            <div>
                <div class="flex justify-between ">
                    <span class="text-xl font-bold">Collections</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.2902 9.30966C17.1977 9.21695 17.0878 9.1434 16.9668 9.09322C16.8459 9.04304 16.7162 9.01721 16.5852 9.01721C16.4543 9.01721 16.3246 9.04304 16.2036 9.09322C16.0826 9.1434 15.9727 9.21695 15.8802 9.30966L12.0002 13.1897L8.12022 9.30966C7.93324 9.12268 7.67965 9.01763 7.41522 9.01763C7.1508 9.01763 6.8972 9.12268 6.71022 9.30966C6.52324 9.49663 6.4182 9.75023 6.4182 10.0147C6.4182 10.2791 6.52324 10.5327 6.71022 10.7197L11.3002 15.3097C11.3927 15.4024 11.5026 15.4759 11.6236 15.5261C11.7446 15.5763 11.8743 15.6021 12.0052 15.6021C12.1362 15.6021 12.2659 15.5763 12.3868 15.5261C12.5078 15.4759 12.6177 15.4024 12.7102 15.3097L17.3002 10.7197C17.6802 10.3397 17.6802 9.69966 17.2902 9.30966Z"
                            fill="white"/>
                    </svg>
                </div>
                <div class="flex flex-col mt-2.5 gap-y-2">
                    @if(isset($collections))
                        @foreach($collections as $collection)
                            <div class="flex items-center gap-x-2 ">
                                <input class="w-4 h-4 rounded" type="checkbox" id="{{$collection->id}}">
                                <label class="text-[13px]" for="{{$collection->id}}">{{ $collection->name }}</label>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 w-[1070px] gap-9">
            @foreach($items as $item)
                <x-item.card :item="$item"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
