@extends('frontend.layout.index')


@section('content')

<div class="drop-shadow-md bg-white w-64 mt-16 rounded-lg">
    <div class="flex gap-4 p-4 place-content-around">
        <div>
            <img class="w-12" src="https://www.svgrepo.com/show/108654/mercury.svg" alt="">
        </div>
        <div class="flex flex-col">
            <p>{{$data[2]->day}}</p>
            <p>{{$data[2]->dateDay}} septembre</p>
        </div>
    </div>

</div>

@endsection
