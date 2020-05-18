<div>
    <div class="flex flex-col">
    @foreach($category->words as $word)
        <div>
        <a href="{{route('show-word', $word->name)}}">{{$word->name}}</a>
        </div>
    @endforeach
    </div>
</div>
