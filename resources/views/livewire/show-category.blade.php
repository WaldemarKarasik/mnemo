<div class="flex flex-col items-center justify-evenly h-screen">
    <div class="max-w-sm rounded shadow-lg">
        <div class="px-6 py-4" x-data="{showInput: false, showButton: true, showHideButton: false}">
          <div class="font-bold mb-2 border-b-2">Words from {{$category->name}} category
          @can('create', App\Category::class)
                <button x-show="showButton" @click="{showInput = !showInput, showButton = false, showHideButton = true}">Add</button>
                <button x-show="showHideButton" @click="{showInput = !showInput, showHideButton = !showHideButton, showButton = true}">Hide</button>
                <div x-show="showInput" class="">
                <div>@error('newWordName') {{$message}}@enderror</div>
                <input class="{{($errorN) ? 'border-2 border-red-500' : 'border-2 border-blue-500'}} "wire:model = "newWordName" type="text" placeholder="Name">
                <input class="{{($errorD) ? 'border-2 border-red-500' : 'border-2 border-blue-500'}}  mt-2"wire:model = "definition" type="text" placeholder="Definition">
                <input class="{{($errorK) ? 'border-2 border-red-500' : 'border-2 border-blue-500'}}  mt-2"wire:model = "key" type="text" placeholder="Key">
                <input class="{{($errorL) ? 'border-2 border-red-500' : 'border-2 border-blue-500'}}  mt-2"wire:model = "link" type="text" placeholder="Link sentence">
                <button @click=""  wire:click="addWord" type="submit">ok</button>
                </div>
          @endcan
        </div>
          <div class="flex flex-col font-semibold">
          @foreach($words as $word)
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
