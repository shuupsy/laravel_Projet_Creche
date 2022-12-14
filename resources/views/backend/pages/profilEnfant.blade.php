@extends('backend.layout.index')

@section('content')
    <div class="icones">

        {{-- HORAIRE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/clock.svg" alt="svg clock time">
            </button>
            <p class='text-sm'>Heure</p>
        </div>

        {{-- HUMEUR --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/baby.svg" alt="svg baby mood">
            </button>
            <p class='text-sm'>Humeur</p>
        </div>

        {{-- ACTIVITE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/cubes.svg" alt="svg cubes activity">
            </button>
            <p class='text-sm'>Activité</p>
        </div>

        {{-- REPAS --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/feeding-bottle.svg" alt="svg food feeding bottle milk">
            </button>
            <p class='text-sm'>Repas</p>
        </div>

        {{-- SOMMEIL --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/zzz.svg" alt="svg sleep">
            </button>
            <p class='text-sm'>Sommeil</p>
        </div>

        {{-- CHANGE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/diaper.svg" alt="svg diaper change">
            </button>
            <p class='text-sm'>Change</p>
        </div>

        {{-- DIARRHEE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/poo.svg" alt="svg poo diarrhea">
            </button>
            <p class='text-sm'>Diarrhée</p>
        </div>

        {{-- FIEVRE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/thermometer.svg" alt="svg thermometer sick">
            </button>
            <p class='text-sm'>Fièvre</p>
        </div>

        {{-- BLESSURE --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/first-aid-kit.svg" alt="svg accident first aid kit">
            </button>
            <p class='text-sm'>Blessure</p>
        </div>

        {{-- ALLERGIES --}}
        <div class="rounded-lg border border-zinc-800 text-center">
            <button class="buttonModal">
                <img src="/assets/img/medical.svg" alt="svg allergy medical">
            </button>
            <p class='text-sm'>Santé</p>
        </div>

    </div> {{-- FIN ICONES --}}

    @include('backend.partials.modal')

@endsection
