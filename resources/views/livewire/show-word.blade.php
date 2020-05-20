<div class="flex flex-col items-center justify-evenly h-screen">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="md:w-2/6 rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 border-b-2">{{$word->name}} - {{$word->definition}}</div>
          <div class="flex flex-col font-semibold">

          <div class="flex flex-col space-y-2">
          <p class="text-lg">
              Key: {{$word->key}}
          </p>
          <p class="text-lg">
            Link: {{$word->link_sentence}}
          </p>
          <div class="font-bold text-xl mb-2 border-b-2">Other words from this category</div>
          <div class="flex flex-col">

          @foreach($words as $word)

                @if($wordName == $word->name)
                    <?php continue;?>
                @endif
            <div class="flex items-center bg-gray-500">
                <div class="w-4/12">{{$word->name}}</div>

                <div class="w-6/12">
                    <a href="{{route('show-word', $word->name)}}"><i class="fas fa-eye text-green-500 ml-1"></i></a>
                </div>
            </div>
          @endforeach
          </div>
          <div class="flex justify-center">
          <button class="border-2 border-green-500 px-3" wire:click="back">Back</button>
          </div>
        {{-- <a href="{{route('show-word', $word->name)}}" lass="ml-1">View</a> --}}
        </div>

        </div>
        </div>
      </div>
</div>
