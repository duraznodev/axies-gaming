<x-app-layout>
    <x-header name="Edit Item"/>
    <div class="max-w-[1410px] mx-auto flex gap-x-20 my-20 ">
        <div>
            <span class="text-xl font-bold">Preview Item</span>
            <div class="min-w-[330px] bg-[#343444] rounded-[20px] px-5">
                <div class="py-5">
                    <div class="h-[290px] bg-[#7A798A] rounded-[20px]"></div>
                    <span
                        class="mt-5 text-lg font-bold block">{{ strlen($item->title)>28?substr($item->title,0,29)."...":$item->title }}</span>
                    <div class="flex justify-between items-center mt-[14px]">
                        <span
                            class="flex gap-x-3 items-center">
                            <div class="h-11 w-11 bg-[#7A798A] rounded-[15px]"></div>
                            <div class="flex flex-col justify-center">
                                <sEpan class="text-[13px] text-[#8A8AA0]">Creator</sEpan>
                                <span class="text-[15px] font-bold">{{ $item->author->name }}</span>
                            </div>
                        </span>
                        <div class="text-xs font-bold py-[2px] px-3 bg-[#5142FC] rounded-lg">BSC</div>
                    </div>
                </div>
                <div>
                    <div class="bg-[#14141F] h-[1px]"></div>
                    <div class="pt-[15px] pb-[11px] flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-[13px] text-[#8A8AA0]">Current Bid</span>
                            <span class="font-bold text-lg">{{ $item->price }} BCS <span
                                    class="text-[13px] text-[#8A8AA0]">= $12.246</span></span>
                        </div>
                        <x-likes number="100"/>
                    </div>
                </div>
            </div>
        </div>
        <form class="flex flex-col gap-y-6 w-full" enctype="multipart/form-data">
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Upload File"/>
                <div class="relative border border-[#343444] rounded-lg py-[27px] px-[60px]">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-[#8A8AA0]">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</span>
                        <x-form.button class="hover:scale-105 as" text="Upload File"/>
                    </div>
                    <input type="file" class="cursor-pointer opacity-0 absolute top-0 left-0 w-full h-full">
                </div>
            </div>
            <div class="flex flex-col gap-y-5 items-start">
                <x-input-label value="Select Method"/>
                <div
                    class="flex font-bold text-[15px] gap-x-2 items-center justify-center py-[13px] px-[35px] border border-[#5142FC] rounded-3xl bg-white text-[#5142FC]">
                    Fixed Price
                </div>
                <input type="hidden" name="method" value="fixed_price">
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Price"/>
                <x-text-input :value="$item->price" name="price" placeholder="Enter price for one item (ETH)"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Title"/>
                <x-text-input :value="$item->title" name="title" placeholder="Item Name"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Description"/>
                <x-text-area-input name="description"
                                   placeholder="e.g. “This is very limited item”">{{$item->description}}</x-text-area-input>
            </div>
            <div class="flex gap-x-5">
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Royalties"/>
                    <x-text-input :value="$item->royalties" type="number" step="0.01" name="royalties" placeholder="5%"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Size"/>
                    <x-text-input :value="$item->size" type="number" min="0" name="size”" placeholder="e.g. “size”"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Collection"/>
                    <x-select-input :options="\App\Models\Collection::all()" name="collection"/>
                </div>
            </div>
            <x-form.button text="Edit Item"/>
        </form>
    </div>
</x-app-layout>
