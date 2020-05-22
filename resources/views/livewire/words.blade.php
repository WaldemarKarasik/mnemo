<div>
    <div class="flex flex-col">
    @foreach($words as $word)
        <div x-data="{showUpdate: false, showDeleteButton: true, tab: 'foo'}" class="flex justify-between py-2 text-lg">
        <div  class="w-3/6 md:w-1/6">

        <a class="hover:underline hover:text-blue-500"href="{{route('show-word', $word->name)}}">{{$word->name}}</a>

        </div>
        @can('update', App\Word::class)

            <button @click="{showUpdate = true, $nextTick(()=>$refs.input.focus()) }"><i class="fas fa-edit text-green-300 hover:text-green-500"></i></button>
            <form class="ml-2" wire:submit.prevent="updateWord({{$word->id}})">
            <input class="w-full" x-ref="input" @click.away="showUpdate = false, showDeleteButton = true" {{$word->name}} x-show="showUpdate" wire:model="updatedWord" type="text">
            </form>

        @endcan
        @can('delete', App\Word::class)
            <div x-show="showDeleteButton"class="w-11/12 flex justify-start ml-3">
                <button wire:click="deleteWord({{$word->id}})"><i class="fas fa-trash text-red-500 hover:text-red-300"></i></button>
            </div>
        @endcan
        @cannot('delete', App\Word::class)
            <div class="w-11/12 flex justify-start">
                <a href="{{route('show-word', $word->name)}}"><i class="fas fa-eye text-green-500"></i></a>
            </div>
        @endcannot

        </div>
    @endforeach
    </div>
</div>
