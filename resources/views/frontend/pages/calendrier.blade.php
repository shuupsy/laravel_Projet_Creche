@extends('frontend.layout.index')


@section('content')
    <div class="drop-shadow-md bg-white w-72 mt-16 rounded-lg">
        <div class="flex gap-4 p-4 place-content-around items-center">
            <div>
                <img class="w-12" src="https://www.svgrepo.com/show/108654/mercury.svg" alt="">
            </div>
            <div class="flex flex-col">
                <p>{{ $data[2]->day }}</p>
                <p>{{ $data[2]->dateDay }} septembre</p>
            </div>
        </div>
        <div class="flex flex-wrap gap-4 p-4 place-content-around">
            <p class="lol">5</p>
            <p>6</p>
            <p>7</p>
            <p>8</p>
            <p>9</p>
            <p>10</p>
            <p>11</p>
        </div>
    </div>
@endsection
