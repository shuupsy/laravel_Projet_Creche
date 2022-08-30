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
        <div class='modalFull hidden'>
            <div class="">
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                    <div class='text-center'>

                        <h3 id="modal-title">Horaire d'Arrivée / de Sortie</h3>

                        <h2 id='clock' class='mx-auto my-3 border-double border-4 w-20 font-black border-stone-800 rounded-md'></h2>

                        <button class='text-sm border bg-[#D8E2DC] p-2 rounded-md'>ARRIVÉE (matin)</button>
                        <button class='text-sm border bg-[#8EC9C1] p-2  rounded-md'>SORTIE (soir)</button>
                        <p class='text-xs'><span class='underline'>Guide:</span> Appuyez sur un des 2 boutons pour
                            enregistrer automatiquement l'heure d'arrivée/sortie.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
