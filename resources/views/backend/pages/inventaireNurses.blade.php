@extends('frontend.layout.index')


@section('content')
    <div class="grid lg:grid-cols-3 gap-16 mt-64">

        @foreach ($inventaire as $item)
            <div class="w-56 flex flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <img class="w-1/4 -mt-8" src="https://www.svgrepo.com/show/296614/diaper.svg" alt="">
                <div>quantité restante: {{ $item->quantity }}</div>
                <form action="/InventaireNurses/{{$item->id}}/update" method="POST">
                    @csrf
                    @method('PATCH')
                    <button>-</button>
                    <input class="w-6 text-center" type="number" value={{$item->quantity}} name="quantity">
                    <button type="submit" onclick="plus('{{$item->id}}')">+</button>
                </form>
                <div>{{ $item->name }}</div>
            </div>
        @endforeach


    </div>
@endsection
