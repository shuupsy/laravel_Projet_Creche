@extends("frontend.layout.index")
@section("content")

<div class="flex flex-col h-full w-full justify-center items-center">
    <div class="flex flex-col items-center messagerieContent bg-zinc-400 my-5">
        @foreach ($data as $item)

        <div class="h-14 w-3/4 bg-zinc-600 mt-2">{{$item->message}}</div>
        @endforeach
    </div>
    <div class="flex justify-center items-center messagerieEnvoi bg-zinc-600">
        <form  action="/createMessagerie" method="POST">
            @csrf
            <textarea  name="message" id="" cols="30" rows="10"></textarea>
            <button type="submit">envoyer</button>
        </form>
    </div>
</div>

@endsection
