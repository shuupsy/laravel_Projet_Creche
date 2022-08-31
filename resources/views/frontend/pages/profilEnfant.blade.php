@extends('frontend.layout.index')

@section('content')
    <div class="contenuProfil">

        <div class="infosGen">
            <p class="prenom">{{ $profil[0]->name }}</p>
            <p> <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 my-4" src="https://www.svgrepo.com/show/296592/baby.svg"
                    alt=""></p>
            <div class="presences">
                <p class="donneesPresence">
                    <span class="jour">{{ $profil[0]->presence }}</span>
                    <span class="joursPresence">Jours
                        <span class="semaine">par semaine</span>
                    </span>
                </p>
                <p class="jsemaines">{{ $profil[0]->dayOfPresence }}</p>
            </div>
        </div>


    </div>
@endsection
