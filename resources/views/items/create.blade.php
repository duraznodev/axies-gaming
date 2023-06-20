<x-app-layout>
    @push('scripts')
        @vite('resources/js/previewCard.js')
    @endpush
    <x-header name="Create Item"/>
    <div class="max-w-[1410px] mx-auto flex gap-x-20 my-20 ">
        <div>
            <p class="text-xl font-bold">Preview Item</p>
            <x-item.preview-card class="mt-5"/>
            <div class="mt-8">
                <a class="border justify-center py-[14px] rounded-[30px] border-[#5142FC] flex items-center" href="{{action([\App\Http\Controllers\CollectionController::class,'create'])}}">Make New Collection</a>
            </div>
        </div>
        <form method="post" action="{{ action([\App\Http\Controllers\ItemController::class,'store']) }}"
              class="flex flex-col gap-y-6 w-full" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Upload File"/>
                <div class="relative border border-[#343444] rounded-lg py-[27px] px-[60px]">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-[#8A8AA0]">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</span>
                        <x-form.button class="hover:scale-105 as" text="Upload File"/>
                    </div>
                    <input accept="image/*" type="file" name="image"
                           id="input-file"
                           class="cursor-pointer opacity-0 absolute top-0 left-0 w-full h-full">
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
                <x-text-input value="{{ old('price') }}" name="price" placeholder="Enter price for one item (ETH)"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Title"/>
                <x-text-input value="{{ old('title') }}" name="title" placeholder="Item Name"/>
            </div>
            <div class="flex flex-col gap-y-5">
                <x-input-label value="Description"/>
                <x-text-area-input name="description"
                                   placeholder="e.g. “This is very limited item”"></x-text-area-input>
            </div>
            <div class="flex gap-x-5">
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Royalties"/>
                    <x-text-input value="{{ old('royalties') }}" type="number" step="0.01" name="royalties"
                                  placeholder="5%"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Size"/>
                    <x-text-input type="number" min="0" name="size"
                                  value="{{ old('_size') }}"
                                  placeholder="e.g. “size”"/>
                </div>

            </div>
            <div class="flex gap-x-5">
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Category"/>
                    <x-select-input :options="\App\Models\Category::all()"
                                    name="category_id"/>
                </div>
                <div class="flex flex-col gap-y-5 flex-1">
                    <x-input-label value="Collection"/>
                    <x-select-input :options="$author->collections"
                                    name="collection_id"/>
                </div>
            </div>
            <x-form.button text="Create Item"/>
        </form>
    </div>
</x-app-layout>
