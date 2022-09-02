@extends('frontend.layout.index')

@section('content')
    <div class="contenuProfil">

        <div class="infosGen">
            <p class="prenom">{{ $profil[2]->name }}</p>
            <p> <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 my-4" src="/assets/img/{{$profil[2]->imgFace}}"
                    alt=""></p>
            <div class="presences">
                <p class="donneesPresence">
                    <span class="jour">{{ $profil[2]->presence }}</span>
                    <span class="joursPresence">Jours
                        <span class="semaine">par semaine</span>
                    </span>
                </p>
                <p class="jsemaines">{{ $profil[2]->dayOfPresence }}</p>
            </div>
        </div>
        <div class="timeline">
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full"src="https://www.svgrepo.com/show/230359/gender.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">gender</p>
                    <p>{{ $profil[2]->genre }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full"src="https://www.svgrepo.com/show/203133/ruler.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">height</p>
                    <p>{{ $profil[2]->size }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full"src="https://www.svgrepo.com/show/229297/scale-weight.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">weight</p>
                    <p>{{ $profil[2]->weight }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full"src="https://www.svgrepo.com/show/385146/emergency-health-healthcare-hospital-kit-medical.svg"
                            alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">allergies</p>
                    <p>{{ $profil[2]->allergy }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full"src="https://www.svgrepo.com/show/385145/dental-dentist-health-healthcare-medical-teeth.svg"
                            alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">Teething</p>
                    <p>{{ $profil[2]->teething }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full" src="https://www.svgrepo.com/show/267696/baby-food.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">alimentation</p>
                        <p class="text-center">{{ $profil[2]->nutritional }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full" src="https://www.svgrepo.com/show/6666/photo-camera.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">Picture autorisation</p>
                        <p>{{ $profil[2]->picturePermission }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full" src="https://www.svgrepo.com/show/13967/park.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">exit Permission</p>
                        <p class="text-sm">{{ $profil[2]->exitPermission }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="content">
                    <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                        <img class="w-full" src="https://www.svgrepo.com/show/295847/poo.svg" alt="">
                    </div>
                    <div class="texte">
                        <p class="soustitre">Feces observations</p>
                        <p>{{ $profil[2]->surveillanceSelles }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
