<x-app-layout>
    <x-header name="Item Details {{ $item->id }}"/>
    <div class="py-20 max-w-[1410px] mx-auto">
        <div class="flex gap-x-[100px]">
            <div class="bg-[#7A798A] rounded-[10px] w-[690px] h-[690px]">
            </div>
            <div class="max-w-[620px]">
                <div>
                    <span class="text-4xl font-bold">{{ $item->title }}</span>
                    <div class="flex justify-between mt-4">
                        <div class="bg-[#343444] rounded-[40px] py-2 px-[14px] flex gap-x-1.5 items-center">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z"
                                    fill="white"/>
                            </svg>
                            <span class="text-sm font-bold">100</span>
                        </div>
                        <div class="flex gap-x-3">
                            <div class="bg-[#343444] rounded-full w-9 h-9 flex justify-center items-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.3241 0.675199C14.7473 0.0984059 13.9309 -0.127994 13.1391 0.0705603L2.38028 2.76004C0.946096 3.11858 -0.0105779 4.35261 8.82884e-05 5.83111C0.0107545 7.3096 0.983839 8.52957 2.42295 8.86842L6.23487 9.76522L7.13166 13.5771C7.47052 15.0162 8.69054 15.9893 10.169 16C10.1772 16 10.1846 16 10.1928 16C11.6606 16 12.8832 15.0458 13.2401 13.6198L15.9296 2.86099C16.1273 2.06842 15.9009 1.25199 15.3241 0.675199ZM14.735 2.56063L12.0455 13.3195C11.7756 14.396 10.8673 14.7562 10.1772 14.7685C9.48394 14.7636 8.58387 14.3747 8.32952 13.2941L7.42372 9.44602L10.896 5.97383C11.1364 5.73343 11.1364 5.34368 10.896 5.10328C10.6556 4.86288 10.2659 4.86288 10.0255 5.10328L6.55322 8.57557L2.70519 7.66976C1.62462 7.41542 1.23572 6.51529 1.2308 5.82199C1.22588 5.12787 1.60247 4.22291 2.67975 3.95379L13.4378 1.26431C13.5256 1.24216 13.6142 1.23146 13.7012 1.23146C13.9801 1.23146 14.2493 1.34147 14.4536 1.54495C14.7219 1.81325 14.8269 2.19306 14.735 2.56063Z"
                                        fill="white"/>
                                </svg>
                            </div>
                            <div class="bg-[#343444] rounded-full w-9 h-9 flex justify-center items-center">
                                <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="white"/>
                                    <circle cx="8" cy="2" r="2" fill="white"/>
                                    <circle cx="14" cy="2" r="2" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 bg-[#343444] rounded-2xl p-3 flex gap-x-3 w-3/6">
                    <div class="bg-[#7A798A] h-11 w-11 rounded-2xl">
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-[13px] text-[#8A8AA0]">Created By</span>
                        <span class="text-[15px] font-bold">{{ $item->author->name }}</span>
                    </div>
                </div>
                <p class="mt-4 text-sm leading-relaxed">{{ $item->description  }}</p>
                <div class="mt-4 bg-[#343444] rounded-lg w-3/6 py-3 px-6 flex items-center justify-between">
                    <span class="text-lg font-semibold">Price</span><span class="font-bold text-lg">{{ $item->price }} BCS <span
                            class="text-[13px] text-[#8A8AA0]">= $12.246</span></span>
                </div>
            </div>
        </div>
        <div class="mt-16">
            <x-home.section-header title="More From This Author" link="#"/>
            <div class="mt-10">
                <div class="grid grid-cols-4 gap-[30px]">
                    @foreach($item->author->items as $item)
                        <x-item.card :item="$item"/>
                    @endforeach
                </div>
            </div>
            <div class="flex items-center justify-center mt-8">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="flex gap-x-4 mx-[22px]">
                    <div class="relative flex justify-center items-center">
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="4" cy="4" r="4" fill="white"></circle>
                        </svg>
                        <svg class="absolute " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="8" cy="8" r="7.5" stroke="white"></circle>
                        </svg>
                    </div>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"></circle>
                    </svg>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"></circle>
                    </svg>
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="3.5" stroke="white"></circle>
                    </svg>
                </div>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>
