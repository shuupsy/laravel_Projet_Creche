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
        <div class="timeline">
            <div class="container left">
                <div class="content">
                    <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/203133/ruler.svg" alt="">
                  <p>{{ $profil[0]->size }}</p>
                </div>
              </div>
              <div class="container right">
                <div class="content">
                    <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/229297/scale-weight.svg" alt="">
                  <p>{{ $profil[0]->weight}}</p>
                </div>
              </div>
              <div class="container left">
                <div class="content">
                    <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/385146/emergency-health-healthcare-hospital-kit-medical.svg" alt="">
                  <p>{{ $profil[0]->allergy }}</p>
                </div>
              </div>
              <div class="container right">
                <div class="content">
                  <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/385145/dental-dentist-health-healthcare-medical-teeth.svg" alt="">
                  <p>{{ $profil[0]->teething }}</p>
                </div>
              </div>
              <div class="container left">
                <div class="content">
                    <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/267696/baby-food.svg" alt="">
                  <p>{{ $profil[0]->nutritional }}</p>
                </div>
              </div>
              <div class="container right">
                <div class="content">
                    <img class="w-16 h-16 p-4 bg-[#D8E2DC] rounded-full"src="https://www.svgrepo.com/show/6666/photo-camera.svg" alt="">
                  <p>{{ $profil[0]->picturePermission }}
                   </p>
                </div>
              </div>
        </div>

    </div>
@endsection
