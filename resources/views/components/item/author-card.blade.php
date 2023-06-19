<a href="{{ action([\App\Http\Controllers\AuthorController::class,'show'],['author'=>$author]) }}" class="flex items-center gap-4">
    <div class="relative">
        <div class="bg-[#7A798A] w-[100px] h-[100px] rounded-[34px]"></div>
        <div
            class="bg-[#5142FC] w-[26px] h-[26px] absolute bottom-0 right-0 rounded-full py-[7px] px-[5px]">
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.2799 11.3407C6.13965 11.4817 5.9484 11.5604 5.74965 11.5604C5.5509 11.5604 5.35965 11.4817 5.2194 11.3407L0.984898 7.10541C0.545398 6.66591 0.545398 5.95341 0.984898 5.51466L1.51515 4.98441C1.95465 4.54491 2.6664 4.54491 3.1059 4.98441L5.74965 7.62816L12.8934 0.48441C13.3329 0.0449102 14.0454 0.0449102 14.4841 0.48441L15.0144 1.01466C15.4539 1.45416 15.4539 2.16666 15.0144 2.60541L6.2799 11.3407Z"
                    fill="white"></path>
            </svg>
        </div>
    </div>
    <div>
        <h4 class="text-4 font-bold leading-[26px] text-white">{{$author->name}}</h4>
        <h5 class="text-white text-14px leading-[22px] font-bold">214.2 ETH</h5>
    </div>
</a>
