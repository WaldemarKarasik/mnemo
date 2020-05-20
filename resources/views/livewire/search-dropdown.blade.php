<div x-data="{isOpen: true}" @click.away="isOpen = false">
    {{-- Do your work, then step back. --}}
    <input @focus="isOpen = true" class="w-64 focus:outline-none border-2 border-blue-500 rounded-full px-4" type="text" placeholder="Search a word" wire:model="search">
    @if(strlen($search) > 2)
    <div x-show="isOpen" class="absolute rounded w-64">
        <ul class="mt-1">
        @if(!empty($words))
        @if($words->count() > 0)
        @foreach($words as $word)

            <li class="py-3 bg-gray-500 hover:bg-blue-400 text-white">
                <a class="block" href="{{route('show-word', $word->name)}}">{{$word->name}}</a>
            </li>

        @endforeach
        @else
            <li class="py-3 border-2 rounded">
            <p class="block">No words found</p>
            </li>
        @endif
         @endif
        </ul>
    </div>
    @endif
</div>
