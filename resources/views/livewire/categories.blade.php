<div class="">
    @foreach($categories as $category)
    <div class="flex flex-col">
        @can('create', App\Category::class)
        <div class="flex border-b-2" x-data="{showInput: false, showButton: true}">
            <a class="text-3xl "href="{{route('show-category', $category->name)}}">{{$category->name}}</a>
            <button x-show="showButton"@click="{showInput = !showInput, showButton = false}">Add</button>
            <div class="flex items-center ml-5"x-show="showInput">
                <form wire:submit.prevent="addWord">
                <input type="text">
                </form>
            </div>
        </div>
        @endcan
        @cannot('create', App\Category::class)
            <a class="text-3xl "href="{{route('show-category', $category->name)}}">{{$category->name}}</a>

        @endcannot
        @livewire('words', compact('category'), key($category->id))
    @endforeach
    </div>
</div>
