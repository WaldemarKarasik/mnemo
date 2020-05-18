<div class="flex flex-col items-center justify-evenly h-screen">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 border-b-2">Words from {{$category->name}} category</div>
          <div class="flex flex-col font-semibold">
          @foreach($category->words as $word)
          <div class="flex">
          <p class="text-lg">
              {{$word->name}}
          </p>
        <a href="{{route('show-word', $word->name)}}" class="ml-1 text-green-500"><i class="fas fa-eye"></i></a>
        </div>
          @endforeach
        </div>
        </div>
      </div>
      <div class="invisible">
        dfd
      </div>
      <div class="invisible">
        dfd
      </div>
      <div class="invisible">
        dfd
      </div>
</div>
