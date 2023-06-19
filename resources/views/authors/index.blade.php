<x-app-layout>
    <x-header name="Authors"/>
    <div class="max-w-[1410px] mx-auto my-20 ">
        <div class="mt-[60px] flex flex-wrap gap-[30px]">
            @foreach($authors as $author)
                <x-item.author-card :author="$author"/>
            @endforeach
        </div>
    </div>
</x-app-layout>
