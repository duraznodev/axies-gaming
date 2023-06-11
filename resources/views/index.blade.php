<x-guest-layout>
    <div class="pt-[197px] bg-no-repeat" style="background-image: url({{ asset('assets/Graphic.svg') }})">
        <div class="max-w-[1410px] mx-auto">
            <div>
                <div>
                    <p class="text-[56px] font-bold flex flex-col">
                        <span class="leading-[68px]">Discover, and collect</span>
                        <span class="leading-[68px]">extraordinary</span>
                        <span class="leading-[68px]">
                            <span style="background-image: linear-gradient(216.56deg, #E250E5 5.32%, #4B50E6 94.32%);"
                                  class="text-transparent bg-clip-text">Monster</span> <span>NFTs</span>
                        </span>
                    </p>
                    <p class="mt-[30px] text-[20px]">Marketplace for monster character collections non-fungible token
                        NFTs</p>
                </div>
                <div class="mt-9 flex gap-x-4">
                    <x-ui.icon-button text="Explore"/>
                    <x-ui.icon-button text="Explore" class="bg-white text-[#343444]"/>
                </div>
            </div>
            <div class="mt-[230px] flex gap-x-[39px]">
                <div class="flex flex-col items-center flex-1">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1 pb-20">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[771px] bg-[#0D0D11] pt-[60px]">
        <x-home.section-header title="Live Auctions" link="#"/>
        <div class="mt-10 flex gap-x-[30px] overflow-x-scroll">
            @foreach(\App\Models\Item::all() as $item)
                <x-item.card :item="$item"/>
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-8">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="flex gap-x-4 mx-[22px]">
                <div class="relative flex justify-center items-center">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="white"/>
                    </svg>
                    <svg class="absolute " width="16" height="16" viewBox="0 0 16 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="7.5" stroke="white"/>
                    </svg>
                </div>
                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="3.5" stroke="white"/>
                </svg>
                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="3.5" stroke="white"/>
                </svg>
                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="3.5" stroke="white"/>
                </svg>
            </div>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    <div class="max-w-[1410px] mx-auto  flex flex-col gap-y-20">
        <div class="mt-[80px]">
            <x-home.section-header title="Popular Collection" link="#"/>
            <div class="flex gap-x-[30px] mt-[38px]">
                <div class="p-5 bg-[#343444] rounded-[10px] flex-1">
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
                                <svg class="absolute bottom-0 right-0" width="18" height="18" viewBox="0 0 18 18"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#5142FC"/>
                                    <path
                                        d="M7.8095 12.6978C7.7124 12.7954 7.58 12.8499 7.4424 12.8499C7.30481 12.8499 7.1724 12.7954 7.07531 12.6978L4.14373 9.76571C3.83946 9.46144 3.83946 8.96817 4.14373 8.66442L4.51083 8.29732C4.81509 7.99305 5.30784 7.99305 5.61211 8.29732L7.4424 10.1276L12.3881 5.18194C12.6923 4.87767 13.1856 4.87767 13.4894 5.18194L13.8565 5.54903C14.1607 5.8533 14.1607 6.34657 13.8565 6.65032L7.8095 12.6978Z"
                                        fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold">Creative Art Collection</span>
                                <p class="flex gap-x-1.5">
                                    <span class="text-[#8A8AA0] text-[13px] ">Created by</span>
                                    <span class="text-[15px] font-bold">Ralph Garraway</span>
                                </p>
                            </div>
                        </div>
                        <x-likes number="100"/>
                    </div>
                </div>
                <div class="p-5 bg-[#343444] rounded-[10px] flex-1">
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
                                <svg class="absolute bottom-0 right-0" width="18" height="18" viewBox="0 0 18 18"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#5142FC"/>
                                    <path
                                        d="M7.8095 12.6978C7.7124 12.7954 7.58 12.8499 7.4424 12.8499C7.30481 12.8499 7.1724 12.7954 7.07531 12.6978L4.14373 9.76571C3.83946 9.46144 3.83946 8.96817 4.14373 8.66442L4.51083 8.29732C4.81509 7.99305 5.30784 7.99305 5.61211 8.29732L7.4424 10.1276L12.3881 5.18194C12.6923 4.87767 13.1856 4.87767 13.4894 5.18194L13.8565 5.54903C14.1607 5.8533 14.1607 6.34657 13.8565 6.65032L7.8095 12.6978Z"
                                        fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold">Creative Art Collection</span>
                                <p class="flex gap-x-1.5">
                                    <span class="text-[#8A8AA0] text-[13px] ">Created by</span>
                                    <span class="text-[15px] font-bold">Ralph Garraway</span>
                                </p>
                            </div>
                        </div>
                        <x-likes number="100"/>
                    </div>
                </div>
                <div class="p-5 bg-[#343444] rounded-[10px] flex-1">
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
                                <svg class="absolute bottom-0 right-0" width="18" height="18" viewBox="0 0 18 18"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#5142FC"/>
                                    <path
                                        d="M7.8095 12.6978C7.7124 12.7954 7.58 12.8499 7.4424 12.8499C7.30481 12.8499 7.1724 12.7954 7.07531 12.6978L4.14373 9.76571C3.83946 9.46144 3.83946 8.96817 4.14373 8.66442L4.51083 8.29732C4.81509 7.99305 5.30784 7.99305 5.61211 8.29732L7.4424 10.1276L12.3881 5.18194C12.6923 4.87767 13.1856 4.87767 13.4894 5.18194L13.8565 5.54903C14.1607 5.8533 14.1607 6.34657 13.8565 6.65032L7.8095 12.6978Z"
                                        fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold">Creative Art Collection</span>
                                <p class="flex gap-x-1.5">
                                    <span class="text-[#8A8AA0] text-[13px] ">Created by</span>
                                    <span class="text-[15px] font-bold">Ralph Garraway</span>
                                </p>
                            </div>
                        </div>
                        <x-likes number="100"/>
                    </div>
                </div>

            </div>
        </div>

    </div>

</x-guest-layout>
