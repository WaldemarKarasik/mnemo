<div class="">
    <div class="flex justify-end">
    @livewire('search-dropdown')
    </div>
    @foreach($categories as $category)
    <div class="flex flex-col">
        {{-- @can('create', App\Category::class)
        <div class="flex border-b-2" x-data="{showInput: false, showButton: true}">
            <a class="text-3xl "href="{{route('show-category', $category->name)}}">{{$category->name}}</a>
            <button x-show="showButton"@click="{showInput = !showInput, showButton = false}">Add</button>
            <div class="flex items-center ml-5"x-show="showInput">
                <form wire:submit.prevent="addWord({{$category->id}})">
                <input type="text" wire:model="newWord">
                </form>
            </div>
        </div>
        @endcan --}}
        {{-- @cannot('create', App\Category::class) --}}
        <div class="flex space-x-3">
            <a class="text-3xl font-semibold hover:text-blue-500"href="{{route('show-category', $category->name)}}">{{$category->name}}</a>
        </div>

        {{-- @endcannot --}}
        @livewire('words', compact('category'), key($category->id))

    @endforeach
    </div>
</div>
<script>
    window.livewire.on('reloadRequired', () => {
        // let component = window.livewire.find('EGnfFDoPEgSR0tLa6GxB');
        // console.log(component);
        // var p = component.get('check');
        // console.log(p);
    })
</script>
