@extends('backend.layout.index')

@section('content')

    <div class="icones">
        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/clock.svg" alt="svg clock time">
            </button>
            <p class='text-sm'>Heure</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/baby.svg" alt="svg baby mood">
            </button>
            <p class='text-sm'>Humeur</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/backpack.svg" alt="svg inventory backpack">
            </button>
            <p class='text-sm'>Inventaire</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/cubes.svg" alt="svg cubes activity">
            </button>
            <p class='text-sm'>Activité</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/feeding-bottle.svg" alt="svg food feeding bottle milk">
            </button>
            <p class='text-sm'>Repas</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/zzz.svg" alt="svg sleep">
            </button>
            <p class='text-sm'>Sommeil</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/diaper.svg" alt="svg diaper change">
            </button>
            <p class='text-sm'>Change</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/poo.svg" alt="svg poo diarrhea">
            </button>
            <p class='text-sm'>Diarrhée</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/thermometer.svg" alt="svg thermometer sick">
            </button>
            <p class='text-sm'>Température</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/first-aid-kit.svg" alt="svg accident first aid kit">
            </button>
            <p class='text-sm'>Blessure</p>
        </div>

        <div class="rounded-lg border border-zinc-800 text-center">
            <button>
                <img src="assets/img/medical.svg" alt="svg allergy medical">
            </button>
            <p class='text-sm'>Allergies</p>
        </div>

    </div> {{-- FIN ICONES --}}




@endsection
