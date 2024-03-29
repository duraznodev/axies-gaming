<x-app-layout>
    <x-header name="My Items"/>
    <div class="max-w-[1410px] mx-auto my-20 ">
        <div class="mt-[60px] flex flex-wrap gap-[30px]">
            @foreach($items as $item)
                <x-item.card :item="$item"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
