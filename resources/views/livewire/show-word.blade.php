<div class="flex flex-col items-center justify-evenly h-screen">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="md:w-2/6 rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 border-b-2">{{$word->name}} - {{$word->definition}}</div>
          <div class="flex flex-col font-semibold">

          <div class="flex flex-col space-y-2">
          <p class="text-lg">
              Key: {{$word->word_key}}
          </p>
          <p class="text-lg">
            Link: {{$word->link_sentence}}
          </p>
          <div class="font-bold text-xl mb-2 border-b-2">Other words from this category</div>
          @foreach($wordCategory->words as $word)
            @if($wordName == $word->name)
                <?php continue;?>
            @endif
            {{$word->name}}
          @endforeach
          <div class="flex justify-center">
          <button wire:click="back">Back</button>
          </div>
        {{-- <a href="{{route('show-word', $word->name)}}" lass="ml-1">View</a> --}}
        </div>

        </div>
        </div>
      </div>
</div>
