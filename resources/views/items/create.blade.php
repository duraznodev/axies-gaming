<x-app-layout>
    <x-header name="Create Item"/>
    <div class="max-w-[1410px] mx-auto flex gap-x-20 my-20 ">
        <div>
            <span class="text-xl font-bold">Preview Item</span>
            <x-item.card class="w-[330px] mt-5"/>
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
                    class="flex font-bold text-[15px] gap-x-2 items-center justify-center py-[13px] px-[35px] border border-[#5142FC] rounded-3xl bg-white text-[#5142FC]">Fixed Price</div>
                <input type="hidden" name="method" value="fixed_price">
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Price"/>
                <x-text-input name="price" placeholder="Enter price for one item (ETH)"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Title"/>
                <x-text-input name="title" placeholder="Item Name"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Description"/>
                <x-text-area-input name="description"
                                   placeholder="e.g. “This is very limited item”"></x-text-area-input>
            </div>
            <div class="flex gap-x-5">
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Royalties"/>
                    <x-text-input type="number" step="0.01" name="royalties" placeholder="5%"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Size"/>
                    <x-text-input type="number" min="0" name="size”" placeholder="e.g. “size”"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Collection"/>
                    <x-select-input name="collection"/>
                </div>
            </div>
            <x-form.button text="Create Item"/>
        </form>
    </div>
</x-app-layout>
