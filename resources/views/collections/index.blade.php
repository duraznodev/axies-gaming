<x-app-layout>
    <x-header name="My Collections"/>
    <div class="max-w-[1410px] mx-auto my-20 ">
        <div class="mt-[60px] flex flex-wrap">
            @foreach($collections as $collection)
                <div class="p-5 bg-[#343444] rounded-[10px] min-w-[450px] max-w-[450px]">
                    <div class="grid grid-cols-6 gap-[10px] ">
                        <div class="bg-[#7A798A] rounded-[10px] h-[131px] col-span-3 "></div>
                        <div class="bg-[#7A798A] rounded-[10px] h-[131px] col-span-3 "></div>
                        <div class="bg-[#7A798A] rounded-[10px] h-[131px] col-span-2 "></div>
                        <div class="bg-[#7A798A] rounded-[10px] h-[131px] col-span-2 "></div>
                        <div class="bg-[#7A798A] rounded-[10px] h-[131px] col-span-2 "></div>
                    </div>
                    <div class="mt-[15px] flex justify-between items-start">
                        <div class="flex gap-x-2.5 items-center">
                            <div class="relative bg-[#7A798A] rounded-[21px] w-16 h-16">
                                <svg class="absolute bottom-0 right-0" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#5142FC"></circle>
                                    <path d="M7.8095 12.6978C7.7124 12.7954 7.58 12.8499 7.4424 12.8499C7.30481 12.8499 7.1724 12.7954 7.07531 12.6978L4.14373 9.76571C3.83946 9.46144 3.83946 8.96817 4.14373 8.66442L4.51083 8.29732C4.81509 7.99305 5.30784 7.99305 5.61211 8.29732L7.4424 10.1276L12.3881 5.18194C12.6923 4.87767 13.1856 4.87767 13.4894 5.18194L13.8565 5.54903C14.1607 5.8533 14.1607 6.34657 13.8565 6.65032L7.8095 12.6978Z" fill="white"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold">{{ $collection->name }}</span>
                                <p class="flex gap-x-1.5 items-center">
                                    <span class="text-[#8A8AA0] text-[13px] ">Created by</span>
                                    <span class="text-[15px] font-bold">{{ $collection->author->name }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="py-[6px] px-2.5 bg-[#14141F] rounded-lg flex items-center gap-x-[5px]">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7145 1.64647C12.9744 -0.0931851 10.1436 -0.0931851 8.40393 1.64647L7.99986 2.05031L7.59603 1.64647C5.85637 -0.0934206 3.02531 -0.0934206 1.28565 1.64647C-0.418689 3.35081 -0.429756 6.05236 1.25998 7.93072C2.80114 9.64329 7.34643 13.3432 7.53928 13.4998C7.6702 13.6063 7.82773 13.6581 7.98432 13.6581C7.9895 13.6581 7.99468 13.6581 7.99963 13.6578C8.16163 13.6654 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64329 14.7402 7.93048C16.4297 6.05236 16.4186 3.35081 14.7145 1.64647ZM13.69 6.98554C12.4884 8.32042 9.18546 11.0735 7.99963 12.0505C6.8138 11.0738 3.51155 8.32089 2.31018 6.98577C1.13142 5.67561 1.12035 3.80974 2.28452 2.64558C2.87908 2.05125 3.6599 1.75385 4.44072 1.75385C5.22154 1.75385 6.00236 2.05101 6.59693 2.64558L7.48512 3.53377C7.59085 3.6395 7.72412 3.7026 7.86399 3.72474C8.09099 3.77348 8.33729 3.71014 8.51389 3.53401L9.40256 2.64558C10.5919 1.45668 12.5266 1.45692 13.7152 2.64558C14.8794 3.80974 14.8683 5.67561 13.69 6.98554Z" fill="white"></path>
                            </svg>
                            <span class="leading-none">100</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
