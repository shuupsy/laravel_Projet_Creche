@extends('backend.layout.index')

@section('content')

    <div class="w-full flex flex-wrap justify-center gap-6">
        @foreach ($kids as $kid)
            <div class="w-64 bg-white drop-shadow-md p-2 my-8 rounded-lg">

                <a class="flex flex-col items-center" href="/kid/{{ $kid -> id }}">
                    <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 -mt-12"
                        src="https://www.svgrepo.com/show/296592/baby.svg" alt="image description">

                    <h1 class="font-extrabold text-4xl">{{ $kid->name }}</h1>
                    <p>section des petits</p>
                </a>

            </div>
        @endforeach
    </div>
@endsection
