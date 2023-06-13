@props(['anchor'=>$anchor ?? null])
<div class="absolute top-0 w-full flex justify-center border-b border-[#8A8AA0]">
    <div class="max-w-[1410px] w-[1410px] flex justify-between items-center ">
        <a href="{{ route('index') }}" class="flex items-center  gap-x-[10px] py-3">
            <svg class="-translate-y-1" width="30" height="41" viewBox="0 0 30 41" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.75 0C10.2255 5.0344 11.25 19.2187 11.25 19.2187C11.25 19.2187 7.5 17.9375 7.5 12.1719C3.02601 14.831 0 19.9421 0 25.625C0 34.1164 6.71572 41 15 41C23.2843 41 30 34.1164 30 25.625C29.9999 13.1328 18.75 10.5703 18.75 0V0ZM16.3176 35.7023C13.3034 36.4725 10.2505 34.5924 9.49887 31.5027C8.74736 28.4131 10.5816 25.2838 13.596 24.5135C20.8732 22.6538 21.7852 18.4592 21.7852 18.4592C21.7852 18.4592 25.4141 33.3775 16.3176 35.7023Z"
                    fill="url(#paint0_linear_161_67)"/>
                <defs>
                    <linearGradient id="paint0_linear_161_67" x1="26.25" y1="-1.74884e-06" x2="-5.52352" y2="31.3469"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E250E5"/>
                        <stop offset="1" stop-color="#4B50E6"/>
                    </linearGradient>
                </defs>
            </svg>
            <span class="font-bold text-[36px]">Axies</span>
        </a>
        <div class="flex items-center gap-x-[105px]">
            <ul class="flex gap-x-10">
                <li class="">
                    <a href="{{ route('index') }}" class="font-bold text-[18px]">Home</a>
                </li>
                <li class="">
                    <a href="{{ route('explore') }}" class="font-bold text-[18px] flex gap-x-1.5 items-baseline ">Explore
                    </a>
                </li>
                <li class="">
                    <a href="#" class="font-bold text-[18px] flex gap-x-1.5 items-baseline ">Activity
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_609_1640)">
                                <path
                                    d="M4.99997 7.85012C4.82075 7.85012 4.64155 7.78169 4.50492 7.64512L0.205141 3.3453C-0.0683805 3.07178 -0.0683805 2.62831 0.205141 2.3549C0.478553 2.08149 0.921933 2.08149 1.19548 2.3549L4.99997 6.15962L8.80449 2.35503C9.07801 2.08162 9.52135 2.08162 9.79474 2.35503C10.0684 2.62844 10.0684 3.07191 9.79474 3.34543L5.49503 7.64525C5.35832 7.78185 5.17913 7.85012 4.99997 7.85012Z"
                                    fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_609_1640">
                                    <rect width="10" height="10" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="font-bold text-[18px] flex gap-x-1.5 items-baseline ">Community
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_609_1640)">
                                <path
                                    d="M4.99997 7.85012C4.82075 7.85012 4.64155 7.78169 4.50492 7.64512L0.205141 3.3453C-0.0683805 3.07178 -0.0683805 2.62831 0.205141 2.3549C0.478553 2.08149 0.921933 2.08149 1.19548 2.3549L4.99997 6.15962L8.80449 2.35503C9.07801 2.08162 9.52135 2.08162 9.79474 2.35503C10.0684 2.62844 10.0684 3.07191 9.79474 3.34543L5.49503 7.64525C5.35832 7.78185 5.17913 7.85012 4.99997 7.85012Z"
                                    fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_609_1640">
                                    <rect width="10" height="10" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li class="">
                    <x-dropdown align="bottom">
                        <x-slot:trigger>
                            <button href="#" class="font-bold text-[18px] flex gap-x-1.5 items-baseline ">Pages
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_609_1640)">
                                        <path
                                            d="M4.99997 7.85012C4.82075 7.85012 4.64155 7.78169 4.50492 7.64512L0.205141 3.3453C-0.0683805 3.07178 -0.0683805 2.62831 0.205141 2.3549C0.478553 2.08149 0.921933 2.08149 1.19548 2.3549L4.99997 6.15962L8.80449 2.35503C9.07801 2.08162 9.52135 2.08162 9.79474 2.35503C10.0684 2.62844 10.0684 3.07191 9.79474 3.34543L5.49503 7.64525C5.35832 7.78185 5.17913 7.85012 4.99997 7.85012Z"
                                            fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_609_1640">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </x-slot:trigger>
                        <x-slot name="content">
                            <x-dropdown-link>
                                Create
                            </x-dropdown-link>
                            <x-dropdown-link>
                                Author
                            </x-dropdown-link>
                            <x-dropdown-link>
                                Authors
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>


                </li>
                <li class="">
                    <a href="#" class="font-bold text-[18px] flex gap-x-1.5 items-baseline ">Contact
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_609_1640)">
                                <path
                                    d="M4.99997 7.85012C4.82075 7.85012 4.64155 7.78169 4.50492 7.64512L0.205141 3.3453C-0.0683805 3.07178 -0.0683805 2.62831 0.205141 2.3549C0.478553 2.08149 0.921933 2.08149 1.19548 2.3549L4.99997 6.15962L8.80449 2.35503C9.07801 2.08162 9.52135 2.08162 9.79474 2.35503C10.0684 2.62844 10.0684 3.07191 9.79474 3.34543L5.49503 7.64525C5.35832 7.78185 5.17913 7.85012 4.99997 7.85012Z"
                                    fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_609_1640">
                                    <rect width="10" height="10" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="flex gap-x-9">
                <button class="">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Icon Search">
                            <g id="Search">
                                <g id="Group 3">
                                    <mask id="mask0_53_1273" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                          x="1"
                                          y="1" width="18" height="17">
                                        <path id="Clip 2" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M1.6665 1.66666H17.6857V17.3322H1.6665V1.66666Z" fill="white"
                                              stroke="white"/>
                                    </mask>
                                    <g mask="url(#mask0_53_1273)">
                                        <g id="Fill 1">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M9.67662 2.87312C5.94011 2.87312 2.90023 5.84505 2.90023 9.49903C2.90023 13.153 5.94011 16.1257 9.67662 16.1257C13.4123 16.1257 16.4522 13.153 16.4522 9.49903C16.4522 5.84505 13.4123 2.87312 9.67662 2.87312ZM9.6766 17.3322C5.2599 17.3322 1.6665 13.8182 1.6665 9.49902C1.6665 5.17988 5.2599 1.66666 9.6766 1.66666C14.0933 1.66666 17.6859 5.17988 17.6859 9.49902C17.6859 13.8182 14.0933 17.3322 9.6766 17.3322Z"
                                                  fill="white"/>
                                            <path
                                                d="M9.67662 2.37312C5.67463 2.37312 2.40023 5.55836 2.40023 9.49903H3.40023C3.40023 6.13174 6.20558 3.37312 9.67662 3.37312V2.37312ZM2.40023 9.49903C2.40023 13.4396 5.67455 16.6257 9.67662 16.6257V15.6257C6.20566 15.6257 3.40023 12.8664 3.40023 9.49903H2.40023ZM9.67662 16.6257C13.6779 16.6257 16.9522 13.4396 16.9522 9.49903H15.9522C15.9522 12.8664 13.1467 15.6257 9.67662 15.6257V16.6257ZM16.9522 9.49903C16.9522 5.5584 13.6778 2.37312 9.67662 2.37312V3.37312C13.1468 3.37312 15.9522 6.1317 15.9522 9.49903H16.9522ZM9.6766 16.8322C5.52546 16.8322 2.1665 13.5316 2.1665 9.49902H1.1665C1.1665 14.1048 4.99435 17.8322 9.6766 17.8322V16.8322ZM2.1665 9.49902C2.1665 5.46656 5.52539 2.16666 9.6766 2.16666V1.16666C4.99442 1.16666 1.1665 4.8932 1.1665 9.49902H2.1665ZM9.6766 2.16666C13.8277 2.16666 17.1859 5.46649 17.1859 9.49902H18.1859C18.1859 4.89327 14.3589 1.16666 9.6766 1.16666V2.16666ZM17.1859 9.49902C17.1859 13.5316 13.8277 16.8322 9.6766 16.8322V17.8322C14.3589 17.8322 18.1859 14.1047 18.1859 9.49902H17.1859Z"
                                                fill="white"/>
                                        </g>
                                    </g>
                                </g>
                                <g id="Group 6">
                                    <mask id="mask1_53_1273" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                          x="13"
                                          y="13" width="6" height="6">
                                        <path id="Clip 5" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.2012 14.2999H18.3333V18.3333H14.2012V14.2999Z" fill="white"
                                              stroke="white"/>
                                    </mask>
                                    <g mask="url(#mask1_53_1273)">
                                        <g id="Fill 4">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17.7166 18.3333C17.5596 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3308C14.1413 15.0952 14.1405 14.7131 14.3815 14.4774C14.6217 14.2402 15.0123 14.2418 15.2541 14.4758L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333Z"
                                                  fill="white"/>
                                            <path
                                                d="M17.7166 18.3333C17.5595 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3308C14.1413 15.0952 14.1405 14.7131 14.3815 14.4774C14.6217 14.2402 15.0123 14.2418 15.2541 14.4758L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333"
                                                stroke="white"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
                {{ $anchor }}
            </div>
        </div>
    </div>
</div>
