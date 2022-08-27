@extends('frontend.layout.index')

@section('content')
    <div class="w-full flex flex-wrap justify-center gap-6">
        @foreach ($kids as $kid)
            <div class="w-96 bg-white drop-shadow-md p-2 flex flex-col items-center my-8 rounded-lg">

                <img class="bg-[#CDD3DF] w-36 h-36 rounded-full p-4 -mt-14" src="https://www.svgrepo.com/show/296610/baby-girl.svg"
                    alt="image description">

                <h1 class="font-extrabold text-4xl">{{ $kid->name }}</h1>
                <p>haha</p>
            </div>
        @endforeach
    </div>
@endsection
