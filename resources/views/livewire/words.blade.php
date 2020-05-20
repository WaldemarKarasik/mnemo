<div>
    <div class="flex flex-col">
    @foreach($words as $word)
        <div class="flex justify-between py-2 text-lg">
        <div class="w-3/6 md:w-1/6">
        <a href="{{route('show-word', $word->name)}}">{{$word->name}}</a>
        </div>
        @can('delete', App\Word::class)
            <div class="w-11/12 flex justify-start">
                <button wire:click="deleteWord({{$word->id}})"><i class="fas fa-trash text-green-500"></i></button>
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
