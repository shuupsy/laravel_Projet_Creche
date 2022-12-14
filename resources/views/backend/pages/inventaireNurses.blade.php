@extends('backend.layout.index')


@section('content')
    <div class="grid lg:grid-cols-3 gap-16">

        @foreach ($inventaire as $item)
            <div class="w-56 flex flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <img class="w-1/4 -mt-8" src="/assets/img/{{$item->img}}" alt="">
                <div>quantité restante: {{ $item->quantity }}</div>
                <div class="flex gap-4">
                <form action="/InventaireNurses/{{$item->id}}/moins" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" onclick="moins('{{ $item->id }}')">-</button>
                </form>
                <span>{{ $item->quantity }}</span>
                <form action="/InventaireNurses/{{$item->id}}/plus" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" onclick="plus('{{ $item->id }}')">+</button>
                </form>
            </div>
                <div>{{ $item->name }}</div>
            </div>
        @endforeach


    </div>
@endsection
