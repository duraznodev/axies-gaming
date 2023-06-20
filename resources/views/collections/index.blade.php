<x-app-layout>
    <x-header name="{{ $collections[0]->author->name}} Collections"/>
    <div class="max-w-[1410px] mx-auto my-20 ">
        <div class="mt-[60px] flex flex-wrap gap-[30px]">
            @foreach($collections as $collection)
                <x-item.collection :collection="$collection"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
