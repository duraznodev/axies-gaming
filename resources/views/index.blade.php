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
                <div class="flex gap-4 mt-9">
                    <a href="{{ route('explore') }}"
                       class="border w-[154px] justify-center py-[14px] rounded-[30px] border-[#5142FC] flex items-center">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_201_1114)">
                                <path
                                    d="M15.5018 18.208L16.7719 16.0081C19.6056 11.1 19.241 6.93672 18.9644 5.41039C18.9351 5.24485 18.8342 5.10183 18.6899 5.01705C18.5447 4.93251 18.3707 4.916 18.2117 4.97134C16.7383 5.48437 12.9081 7.22727 10.0719 12.1398L8.80142 14.3403L8.23711 14.3794C7.14896 14.4556 6.16906 15.0678 5.6233 16.0131L4.10734 18.6388C4.01756 18.7943 4.02037 18.9876 4.11469 19.1409C4.20988 19.294 4.38135 19.3818 4.56086 19.3695L6.38816 19.2526C6.90103 19.2202 7.41204 19.3391 7.85737 19.5962L8.82773 20.1565L8.09308 21.4289C7.95793 21.663 8.03802 21.9619 8.27155 22.0968L9.04851 22.5453C9.28205 22.6802 9.58096 22.6001 9.71611 22.366L10.4508 21.0935L11.4206 21.6535C11.8659 21.9106 12.2256 22.2929 12.4536 22.7552L13.2651 24.395C13.3443 24.5566 13.5061 24.6611 13.6862 24.6671C13.8661 24.6721 14.035 24.5779 14.1248 24.4223L15.6407 21.7966C16.1858 20.8525 16.2255 19.6974 15.7486 18.7162L15.5018 18.208ZM14.142 12.8273C13.336 12.362 13.0592 11.3304 13.5245 10.5245C13.9901 9.718 15.0216 9.44256 15.8275 9.90787C16.6329 10.3729 16.9101 11.4039 16.4445 12.2104C15.9792 13.0163 14.9474 13.2923 14.142 12.8273Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_201_1114">
                                    <rect width="20" height="20" fill="white"
                                          transform="translate(10) rotate(30)"></rect>
                                </clipPath>
                            </defs>
                        </svg>

                        <span class="text-15px font-bold leading-[22px] text-white">Explore</span>
                    </a>
                    <a class="w-[154px] text-black justify-center py-[14px] rounded-[30px] bg-white flex gap-2 items-center"
                       href="{{ action([\App\Http\Controllers\ItemController::class,'create']) }}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_201_1122)">
                                <path
                                    d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z"
                                    fill="#5142FC"></path>
                                <path
                                    d="M3.13295 0.00947192C2.97955 -0.0183796 2.82127 0.0159954 2.69326 0.105058C2.56529 0.194159 2.47807 0.330605 2.451 0.484199L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947192Z"
                                    fill="#5142FC"></path>
                                <path
                                    d="M19.991 16.8704L17.549 3.02157C17.4928 2.7029 17.189 2.49024 16.8702 2.5463L3.02141 4.98821C2.70274 5.04438 2.48993 5.34829 2.5461 5.66696L4.98801 19.5158C5.015 19.6689 5.10168 19.8049 5.22899 19.8941C5.32817 19.9635 5.44563 20 5.56508 20C5.59895 20 5.63301 19.9971 5.6668 19.9911L19.5156 17.5492C19.6687 17.5223 19.8047 17.4356 19.8939 17.3083C19.983 17.181 20.0179 17.0235 19.991 16.8704ZM5.66821 9.8763C5.61203 9.55763 5.82485 9.25372 6.14352 9.19755L15.3761 7.56958C15.6951 7.51341 15.9987 7.72618 16.0549 8.04485C16.1111 8.36353 15.8983 8.66743 15.5796 8.7236L6.34699 10.3516C6.31258 10.3577 6.27832 10.3606 6.24457 10.3606C5.96555 10.3606 5.71832 10.1606 5.66821 9.8763ZM13.316 13.8826L7.16098 14.9679C7.12656 14.974 7.09231 14.9769 7.05856 14.9769C6.77953 14.9769 6.53231 14.7769 6.48219 14.4926C6.42602 14.1739 6.63883 13.87 6.9575 13.8138L13.1125 12.7285C13.4314 12.6723 13.7351 12.8851 13.7913 13.2038C13.8475 13.5225 13.6347 13.8264 13.316 13.8826ZM15.9865 11.0318L6.75395 12.6597C6.71953 12.6658 6.68528 12.6687 6.65153 12.6687C6.3725 12.6687 6.12528 12.4687 6.07516 12.1844C6.01899 11.8658 6.2318 11.5618 6.55047 11.5057L15.7831 9.8777C16.102 9.82153 16.4057 10.0343 16.4619 10.353C16.518 10.6717 16.3052 10.9756 15.9865 11.0318Z"
                                    fill="#5142FC"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_201_1122">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>

                        <span class="text-15px font-bold leading-[22px]">Create</span>
                    </a>
                </div>
            </div>
            <div class="flex gap-x-[38px] mt-[230px] pb-20">
                <div class="flex flex-col items-center justify-center">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="16" fill="#5142FC"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M34.9227 26.0178H39.104C39.5988 26.0178 40 26.3981 40 26.8671V29.8195C39.9942 30.2862 39.5964 30.6633 39.104 30.6688H35.0187C33.8257 30.684 32.7826 29.9098 32.512 28.8084C32.3765 28.1247 32.5667 27.4192 33.0317 26.8809C33.4966 26.3427 34.1888 26.0268 34.9227 26.0178ZM35.1039 29.1219H35.4986C36.0052 29.1219 36.4159 28.7326 36.4159 28.2524C36.4159 27.7722 36.0052 27.3829 35.4986 27.3829H35.1039C34.8616 27.3802 34.6282 27.4695 34.4559 27.631C34.2835 27.7924 34.1866 28.0126 34.1866 28.2423C34.1865 28.7242 34.5956 29.1164 35.1039 29.1219Z"
                              fill="#F9F9FA" fill-opacity="0.4"></path>
                        <path
                            d="M34.9227 24.2788H40C40 20.3154 37.5573 18 33.4187 18H22.5813C18.4427 18 16 20.3154 16 24.2282V32.7718C16 36.6846 18.4427 39 22.5813 39H33.4187C37.5573 39 40 36.6846 40 32.7718V32.4078H34.9227C32.5662 32.4078 30.656 30.5971 30.656 28.3635C30.656 26.1299 32.5662 24.3192 34.9227 24.3192V24.2788Z"
                            fill="white"></path>
                        <path
                            d="M28.4587 24.2788H21.6854C21.177 24.2733 20.768 23.8811 20.7681 23.3992C20.7739 22.9229 21.1829 22.5398 21.6854 22.5398H28.4587C28.9654 22.5398 29.3761 22.9291 29.3761 23.4093C29.3761 23.8895 28.9654 24.2788 28.4587 24.2788Z"
                            fill="#948BFB"></path>
                    </svg>
                    <h3 class="text-white text-2xl leading-[30px] mt-6 mb-[10px] font-bold">Set up your wallet</h3>
                    <p class="text-white font-normal text-center leading-[22px] text-14px">Once you’ve set up your
                        wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right
                        corner.</p>
                </div>
                <div class="flex flex-col items-center justify-center ms-[1px]">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="16" fill="#47A432"></rect>
                        <path
                            d="M23.104 16H19.048C17.368 16 16 17.38 16 19.0732V23.164C16 24.868 17.368 26.2359 19.048 26.2359H23.104C24.796 26.2359 26.1519 24.868 26.1519 23.164V19.0732C26.1519 17.38 24.796 16 23.104 16Z"
                            fill="white"></path>
                        <path
                            d="M23.104 29.7637H19.048C17.368 29.7637 16 31.1329 16 32.8369V36.9276C16 38.6196 17.368 39.9996 19.048 39.9996H23.104C24.796 39.9996 26.1519 38.6196 26.1519 36.9276V32.8369C26.1519 31.1329 24.796 29.7637 23.104 29.7637Z"
                            fill="white"></path>
                        <path
                            d="M36.9521 16H32.8961C31.2041 16 29.8481 17.38 29.8481 19.0732V23.164C29.8481 24.868 31.2041 26.2359 32.8961 26.2359H36.9521C38.6321 26.2359 40.0001 24.868 40.0001 23.164V19.0732C40.0001 17.38 38.6321 16 36.9521 16Z"
                            fill="white" fill-opacity="0.4"></path>
                        <path
                            d="M36.9521 29.7637H32.8961C31.2041 29.7637 29.8481 31.1329 29.8481 32.8369V36.9276C29.8481 38.6196 31.2041 39.9996 32.8961 39.9996H36.9521C38.6321 39.9996 40.0001 38.6196 40.0001 36.9276V32.8369C40.0001 31.1329 38.6321 29.7637 36.9521 29.7637Z"
                            fill="white"></path>
                    </svg>
                    <h3 class="text-white text-2xl leading-[30px] mt-6 mb-[10px] font-bold">Create your collection</h3>
                    <p class="text-white font-normal text-center leading-[22px] text-14px">Click Create and set up your
                        collection. Add social links, a description, profile &amp; banner images, and set a secondary
                        sales fee.</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="16" fill="#9835FB"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.3955 23.8885C19.3955 21.1625 21.0605 19.3955 23.6375 19.3955H32.3535C34.9395 19.3955 36.6045 21.1625 36.6045 23.8885V29.1905C36.1585 28.8125 34.8115 27.8715 34.6235 27.7595C33.2235 26.9195 31.5435 27.2995 30.4535 28.7195C30.3585 28.8445 28.7815 31.1445 28.2235 31.4885C28.0945 31.5685 27.9585 31.6115 27.8135 31.6315C27.4635 31.6615 27.1265 31.4815 26.5535 31.0985C26.2235 30.8885 25.8635 30.6495 25.4535 30.4795C23.7485 29.7665 22.4495 30.9445 21.7575 31.7345C21.7485 31.7425 19.8115 34.1045 19.7805 34.1415C19.5375 33.5505 19.3955 32.8675 19.3955 32.1025V23.8885ZM37.9995 23.8885C37.9995 20.3625 35.7305 18.0005 32.3535 18.0005H23.6375C20.2705 18.0005 17.9995 20.3625 17.9995 23.8885V32.1025C17.9995 33.6745 18.4465 35.0135 19.2375 36.0095C19.2465 36.0185 19.2465 36.0285 19.2555 36.0285C20.0425 37.0135 21.1655 37.6665 22.5185 37.8995C22.5305 37.9015 22.5425 37.9035 22.5555 37.9055C22.9025 37.9625 23.2615 38.0005 23.6375 38.0005H32.3535C32.5345 38.0005 32.6995 37.9665 32.8735 37.9535C33.0775 37.9365 33.2885 37.9325 33.4825 37.8985C33.7395 37.8545 33.9755 37.7775 34.2145 37.7035C34.3185 37.6705 34.4295 37.6505 34.5295 37.6125C34.7725 37.5205 34.9955 37.4015 35.2165 37.2795C35.2965 37.2355 35.3825 37.1995 35.4605 37.1505C35.6775 37.0145 35.8745 36.8555 36.0675 36.6895C36.1315 36.6345 36.2005 36.5845 36.2615 36.5265C36.4495 36.3475 36.6155 36.1505 36.7745 35.9445C36.8235 35.8795 36.8755 35.8195 36.9225 35.7525C37.0755 35.5345 37.2075 35.2995 37.3295 35.0545C37.3635 34.9835 37.3995 34.9145 37.4325 34.8425C37.5455 34.5855 37.6395 34.3165 37.7195 34.0345C37.7405 33.9585 37.7615 33.8835 37.7795 33.8055C37.8505 33.5145 37.9015 33.2145 37.9345 32.9005C37.9385 32.8625 37.9495 32.8275 37.9535 32.7895C37.9605 32.7045 37.9595 32.6195 37.9645 32.5345C37.9725 32.3885 37.9995 32.2535 37.9995 32.1025V23.8885Z"
                              fill="white"></path>
                        <path
                            d="M24.5048 27.0001C25.8663 27.0001 27 25.87 27 24.5151C27 23.8356 26.7151 23.2132 26.2607 22.7615C25.8081 22.2935 25.1764 22.0001 24.4787 22.0001C23.1085 22.0001 22 23.1041 22 24.4687C22 24.6492 22.0213 24.8239 22.0591 24.9937C22.2878 26.1257 23.3081 27.0001 24.5048 27.0001Z"
                            fill="white" fill-opacity="0.4"></path>
                    </svg>
                    <h3 class="text-white text-2xl leading-[30px] mt-6 mb-[10px] font-bold">Add your NFTs</h3>
                    <p class="text-white font-normal text-center leading-[22px] text-14px">Upload your work (image,
                        video, audio, or 3D art), add a title and description, and customize your NFTs with properties,
                        stats</p>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="16" fill="#DF4949"></rect>
                        <rect x="21" y="22" width="13" height="4" fill="white" fill-opacity="0.4"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M24.125 16H31.8375C35.225 16 37.9625 17.284 38 20.5478V38.7631C38 38.9671 37.95 39.1711 37.85 39.3511C37.6875 39.6391 37.4125 39.8551 37.075 39.9511C36.75 40.0471 36.3875 39.9991 36.0875 39.8311L27.9875 35.9432L19.875 39.8311C19.6888 39.9259 19.475 39.9871 19.2625 39.9871C18.5625 39.9871 18 39.4351 18 38.7631V20.5478C18 17.284 20.75 16 24.125 16ZM23.2753 25.1437H32.6878C33.2253 25.1437 33.6628 24.7225 33.6628 24.1958C33.6628 23.6678 33.2253 23.2478 32.6878 23.2478H23.2753C22.7378 23.2478 22.3003 23.6678 22.3003 24.1958C22.3003 24.7225 22.7378 25.1437 23.2753 25.1437Z"
                              fill="white"></path>
                    </svg>
                    <h3 class="text-white text-2xl leading-[30px] mt-6 mb-[10px] font-bold">List them for sale</h3>
                    <p class="text-white font-normal text-center leading-[22px] text-14px">Choose between auctions,
                        fixed-price listings, and declining-price listings. You choose how you want to sell your
                        NFTs!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="h-[771px] bg-[#0D0D11] pt-[60px]">
        <x-home.section-header title="Today's Picks" link="#"/>
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
        <div class="my-[80px]">
            <x-home.section-header title="Top Seller" link="#"/>
            <div class="flex flex-wrap mt-10 gap-x-[68px] grid grid-cols-5 gap-y-7">
                @foreach(\App\Models\User::all()->take(10) as $author)
                    <x-item.author-card :author="$author"/>
                @endforeach
            </div>
        </div>
        {{--        <div class="mt-[80px]">--}}
        {{--            <x-home.section-header title="Today's Picks" link="#"/>--}}
        {{--            <div class="flex gap-x-[30px] gap-y-10 flex-wrap mt-10">--}}
        {{--                <div class="mt-10 flex gap-x-[30px] flex-wrap">--}}
        {{--                    @foreach($items as $item)--}}
        {{--                        <x-item.card :item="$item"/>--}}
        {{--                    @endforeach--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <button class="mt-[38px] mb-20 font-bold py-4 px-10 rounded-[30px] border border-white mx-auto">Load More</button>--}}
    </div>
</x-app-layout>
