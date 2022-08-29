@extends('frontend.layout.index')


@section('content')

<div class="drop-shadow-md ml-64 bg-white w-72 mt-16 rounded-lg">
    <div class="flex gap-4 p-4 place-content-around">
        <div>
            <img class="w-12" src="https://www.svgrepo.com/show/38147/moon.svg" alt="">
        </div>
        <div class="flex flex-col">
            <p>{{$data[2]->day}}</p>
            <p>date</p>
        </div>
    </div>

</div>

@endsection
