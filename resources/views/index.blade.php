<x-app-layout>
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
                    <p class="mt-[30px] text-[20px]">Marketplace for monster character collections
                        non-fungible
                        token
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
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT
                        Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT
                        Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT
                        Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
                <div class="flex flex-col items-center flex-1 pb-20">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl"></div>
                    <span class="font-bold text-2xl mt-6">Set Up Your Wallet</span>
                    <p class="mt-[10px] text-sm text-center">
                        Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT
                        Marketplace
                        in
                        the top right corner.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[771px] bg-[#0D0D11] pt-[60px]">
        <x-home.section-header title="Live Auctions" link="#"/>
        <div class=" h-[552.5px] overflow-y-hidden">
            <div class="mt-10 flex gap-x-[30px] overflow-x-scroll">
                @foreach($items as $item)
                    <x-item.card :item="$item"/>
                @endforeach
            </div>
        </div>
        <div class="flex items-center justify-center mt-8">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
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
                <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    <div class="max-w-[1410px] mx-auto  flex flex-col gap-y-20">
        <div class="mt-[80px]">
            <x-home.section-header title="Popular Collection" link="#"/>
            <div class="flex gap-x-[30px] mt-[38px]">
                @foreach($collections->take(3) as $collection)
                    <x-item.collection :collection="$collection"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
