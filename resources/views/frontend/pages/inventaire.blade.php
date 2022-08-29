
@extends('frontend.layout.index')


@section('content')
    <div class="grid lg:grid-cols-3 gap-16 mt-36">
        @foreach ($inventaire as $item)
            <div class="w-56 flex flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <img class="w-1/4 -mt-8" src="https://www.svgrepo.com/show/296614/diaper.svg" alt="">
                <div>Quantité restante: {{ $item->quantity }}</div>
                <div>{{ $item->name }}</div>
            </div>
        @endforeach


    </div>
@endsection
