<x-app-layout>
    <x-header name="My Profile"/>
    <div class="max-w-[1410px] mx-auto my-20 ">
        <div class="relative bg-[#313037] h-[354px] p-10 rounded-[12px]">
            <div class="flex justify-between">
                <div class="flex gap-10">
                    <div class="bg-[#7A798A] h-[274px] w-[274px] overflow-hidden rounded-[20px] z-10">
                        @if($user->getFirstMediaUrl('users'))
                            <img src="{{ $user->getFirstMediaUrl('users') }}"
                                 class="w-full h-full object-center bg-cover"/>
                        @endif
                    </div>
                    <div class="flex flex-col mt-[20px] items-start">
                        <h3 class="text-[#EBEBEB] text-lg">Author Profile</h3>
                        <span class="text-4xl font-bold">{{ $user->name }}</span>
                        <p class="max-w-[466px] text-sm text-[#EBEBEB] mt-2">{{ $user->description }}</p>
                        <div class="px-5 py-2 bg-[#EBEBEB] rounded-[50px] mt-6 flex items-center gap-x-[13px]">
                            <span class="text-[13px] text-[#7A798A]">{{ $user->uuid }}</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.60938 1.875H1.67188V16H12.4531V15.0625H2.60938V1.875Z" fill="#7A798A"/>
                                <path d="M12.5669 3.51561L10.8125 1.76123V3.51561H12.5669Z" fill="#7A798A"/>
                                <path
                                    d="M12.9219 4.45312H9.875V1.40625C9.875 0.630844 9.24416 0 8.46875 0H3.54688V14.125H14.3281V5.85938C14.3281 5.08397 13.6973 4.45312 12.9219 4.45312Z"
                                    fill="#7A798A"/>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="flex gap-x-8  items-start">
                    <div class="flex gap-x-3">
                        <div class="bg-[#EBEBEB] p-2 rounded-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6441 6.18054C20.5012 5.64436 21.1425 4.80009 21.4483 3.80535C20.6429 4.30541 19.7618 4.65766 18.8429 4.84687C17.569 3.4367 15.5505 3.09352 13.9155 4.00911C12.2804 4.9247 11.4335 6.87238 11.848 8.76384C8.54901 8.59052 5.47544 6.95985 3.3921 4.27759C2.30485 6.23999 2.86046 8.74861 4.66182 10.0105C4.01043 9.98855 3.37348 9.804 2.80409 9.47219C2.80409 9.4902 2.80409 9.50821 2.80409 9.52622C2.80447 11.5704 4.18125 13.3312 6.09599 13.7363C5.49179 13.9083 4.85802 13.9337 4.24304 13.8104C4.78153 15.5585 6.32121 16.7561 8.07611 16.7919C6.62265 17.9856 4.82769 18.6329 2.98002 18.6298C2.65252 18.6303 2.32528 18.6106 2 18.5707C3.87627 19.8324 6.06002 20.5021 8.29028 20.4997C11.3931 20.522 14.375 19.242 16.569 16.946C18.763 14.6499 19.986 11.5295 19.9644 8.2826C19.9644 8.0965 19.9603 7.91141 19.952 7.72732C20.7556 7.11961 21.4491 6.36679 22 5.5042C21.2514 5.85144 20.4573 6.07941 19.6441 6.18054Z"
                                    fill="#14141F"/>
                            </svg>
                        </div>
                        <div class="bg-[#EBEBEB] p-2 rounded-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6441 6.18054C20.5012 5.64436 21.1425 4.80009 21.4483 3.80535C20.6429 4.30541 19.7618 4.65766 18.8429 4.84687C17.569 3.4367 15.5505 3.09352 13.9155 4.00911C12.2804 4.9247 11.4335 6.87238 11.848 8.76384C8.54901 8.59052 5.47544 6.95985 3.3921 4.27759C2.30485 6.23999 2.86046 8.74861 4.66182 10.0105C4.01043 9.98855 3.37348 9.804 2.80409 9.47219C2.80409 9.4902 2.80409 9.50821 2.80409 9.52622C2.80447 11.5704 4.18125 13.3312 6.09599 13.7363C5.49179 13.9083 4.85802 13.9337 4.24304 13.8104C4.78153 15.5585 6.32121 16.7561 8.07611 16.7919C6.62265 17.9856 4.82769 18.6329 2.98002 18.6298C2.65252 18.6303 2.32528 18.6106 2 18.5707C3.87627 19.8324 6.06002 20.5021 8.29028 20.4997C11.3931 20.522 14.375 19.242 16.569 16.946C18.763 14.6499 19.986 11.5295 19.9644 8.2826C19.9644 8.0965 19.9603 7.91141 19.952 7.72732C20.7556 7.11961 21.4491 6.36679 22 5.5042C21.2514 5.85144 20.4573 6.07941 19.6441 6.18054Z"
                                    fill="#14141F"/>
                            </svg>
                        </div>
                        <div class="bg-[#EBEBEB] p-2 rounded-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6441 6.18054C20.5012 5.64436 21.1425 4.80009 21.4483 3.80535C20.6429 4.30541 19.7618 4.65766 18.8429 4.84687C17.569 3.4367 15.5505 3.09352 13.9155 4.00911C12.2804 4.9247 11.4335 6.87238 11.848 8.76384C8.54901 8.59052 5.47544 6.95985 3.3921 4.27759C2.30485 6.23999 2.86046 8.74861 4.66182 10.0105C4.01043 9.98855 3.37348 9.804 2.80409 9.47219C2.80409 9.4902 2.80409 9.50821 2.80409 9.52622C2.80447 11.5704 4.18125 13.3312 6.09599 13.7363C5.49179 13.9083 4.85802 13.9337 4.24304 13.8104C4.78153 15.5585 6.32121 16.7561 8.07611 16.7919C6.62265 17.9856 4.82769 18.6329 2.98002 18.6298C2.65252 18.6303 2.32528 18.6106 2 18.5707C3.87627 19.8324 6.06002 20.5021 8.29028 20.4997C11.3931 20.522 14.375 19.242 16.569 16.946C18.763 14.6499 19.986 11.5295 19.9644 8.2826C19.9644 8.0965 19.9603 7.91141 19.952 7.72732C20.7556 7.11961 21.4491 6.36679 22 5.5042C21.2514 5.85144 20.4573 6.07941 19.6441 6.18054Z"
                                    fill="#14141F"/>
                            </svg>
                        </div>
                        <div class="bg-[#EBEBEB] p-2 rounded-lg">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6441 6.18054C20.5012 5.64436 21.1425 4.80009 21.4483 3.80535C20.6429 4.30541 19.7618 4.65766 18.8429 4.84687C17.569 3.4367 15.5505 3.09352 13.9155 4.00911C12.2804 4.9247 11.4335 6.87238 11.848 8.76384C8.54901 8.59052 5.47544 6.95985 3.3921 4.27759C2.30485 6.23999 2.86046 8.74861 4.66182 10.0105C4.01043 9.98855 3.37348 9.804 2.80409 9.47219C2.80409 9.4902 2.80409 9.50821 2.80409 9.52622C2.80447 11.5704 4.18125 13.3312 6.09599 13.7363C5.49179 13.9083 4.85802 13.9337 4.24304 13.8104C4.78153 15.5585 6.32121 16.7561 8.07611 16.7919C6.62265 17.9856 4.82769 18.6329 2.98002 18.6298C2.65252 18.6303 2.32528 18.6106 2 18.5707C3.87627 19.8324 6.06002 20.5021 8.29028 20.4997C11.3931 20.522 14.375 19.242 16.569 16.946C18.763 14.6499 19.986 11.5295 19.9644 8.2826C19.9644 8.0965 19.9603 7.91141 19.952 7.72732C20.7556 7.11961 21.4491 6.36679 22 5.5042C21.2514 5.85144 20.4573 6.07941 19.6441 6.18054Z"
                                    fill="#14141F"/>
                            </svg>
                        </div>
                    </div>
                    @if(\Auth::check())
                        <form method="post"
                              action="{{ action([\App\Http\Controllers\AuthorController::class,'follow'],['author'=>$user]) }}">
                            @csrf
                            <x-form.button text="{{ auth()->user()->following->contains($user)?'Unfollow':'Follow' }}"
                                           class="px-7 py-[9px]"/>
                        </form>
                    @endif
                </div>
            </div>
            <div class="absolute bottom-0 left-0 bg-[#343444] w-full flex justify-end rounded-b-[12px]">
                <form class="w-[1087px] flex justify-around py-6">
                    <a href="{{action([\App\Http\Controllers\AuthorController::class,'show'],['author'=>$user])}}"
                       class="font-bold text-xl">ALL</a>
                    @foreach(\App\Models\Category::all() as $category)
                        <span class="font-bold text-xl uppercase relative">
                            <input class="cursor-pointer z-10 w-full absolute opacity-0" type="submit" name="category"
                                   value="{{$category->id}}">{{$category->name}}
                        </span>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>
            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
