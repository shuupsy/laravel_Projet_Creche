@extends('backend.layout.index')

@section('content')

    <div class="icones">
        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/clock.svg" alt="svg clock time">
            </button>
            <p class='text-sm'>Heure</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/baby.svg" alt="svg baby mood">
            </button>
            <p class='text-sm'>Humeur</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/backpack.svg" alt="svg inventory backpack">
            </button>
            <p class='text-sm'>Inventaire</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/cubes.svg" alt="svg cubes activity">
            </button>
            <p class='text-sm'>Activité</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/feeding-bottle.svg" alt="svg food feeding bottle milk">
            </button>
            <p class='text-sm'>Repas</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/zzz.svg" alt="svg sleep">
            </button>
            <p class='text-sm'>Sommeil</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/diaper.svg" alt="svg diaper change">
            </button>
            <p class='text-sm'>Change</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/poo.svg" alt="svg poo diarrhea">
            </button>
            <p class='text-sm'>Diarrhée</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/thermometer.svg" alt="svg thermometer sick">
            </button>
            <p class='text-sm'>Fièvre</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/first-aid-kit.svg" alt="svg accident first aid kit">
            </button>
            <p class='text-sm'>Blessure</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="/assets/img/medical.svg" alt="svg allergy medical">
            </button>
            <p class='text-sm'>Allergies</p>
        </div>

    </div> {{-- FIN ICONES --}}


    <div class="rounded-lg border border-zinc-800 text-center">
        <button class="modalUn">
            <img src="/assets/img/clock.svg" alt="svg clock time" width="50px">
        </button>
        <p class='text-sm'>Heure</p>
    </div>
    <div class="relative flex justify-center">
        <div class='hidden' id="modalFull">
            <div class="">
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                    <div>
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </div>

                        <div class="mt-2 text-center">
                            <h3 class="text-lg font-medium leading-6 text-gray-800 dark:text-white" id="modal-title">Horaire d'Arrivée / de Sortie</h3>
                            <button>ARRIVEE (matin)</button>
                            <button>SORTIE (soir)</button>
                        </div>
                    </div>

                    <div class="mt-5 sm:flex sm:items-center sm:justify-between">

                        <div class="sm:flex sm:items-center ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
