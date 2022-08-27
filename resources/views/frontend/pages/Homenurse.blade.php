@extends('frontend.layout.index')

@section('content')

<div class="w-7/12 mx-auto flex justify-center my-8 divide-y border-b-2 border-[#CDD3DF]">
    <h1 class="font-extrabold text-6xl text-[#CDD3DF]"> Bébés </h1>
</div>
    <div class="w-full flex flex-wrap justify-center gap-6">
        @foreach ($kids as $kid)
            <div class="w-80 bg-white drop-shadow-md p-2 flex flex-col items-center my-8 rounded-lg">

                <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 -mt-12" src="https://www.svgrepo.com/show/296592/baby.svg"
                    alt="image description">

                <h1 class="font-extrabold text-4xl">{{ $kid->name }}</h1>
                <p>haha</p>
            </div>
        @endforeach
    </div>
@endsection
