@extends('frontend.layout.index')

@section('content')
    <section id='admin'>
        <div class="admin-title text-center">
            <h1>ADMINISTRATION</h1>
        </div>

        <div class="">
            <button
                class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 text-xs mt-2">
                UPLOAD CM
            </button>
        </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        section:{{ $data->section }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        contrat:{{ $data->contrat }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        permission photo:{{ $data->picturePermission }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        permission sortie:{{ $data->exitPermission }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        nbr jours présence:{{ $data->presence }}
                    </p>
                </div>
            </div>

            <div class="flex items-center">
                <div>
                    <a href="">
                        <div class="flex justify-center items-center h-28 w-28 bg-red-500 rounded-full my-5">
                            <i class='bx bxs-file text-5xl'></i>
                        </div>
                    </a>
                </div>
                <div class="ml-10">
                    <p>
                        jour de présence:{{ $data->dayOfPresence }}
                    </p>
                </div>
            </div>

        </div>

    </section>
@endsection
