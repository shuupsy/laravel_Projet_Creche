@extends('frontend.layout.index')


@section('content')
    <div class="containerCalendrier drop-shadow-md bg-white w-80 mt-16">
        <div class="flex gap-4 p-4 place-content-around items-center">
            <div class="planetes actived">
                <img class="w-12" src="/assets/img/moon.svg" alt="">
            </div>
            <div class="planetes">
                <img src="/assets/img/mars.svg" alt="" class="w-12">
            </div>
            <div class="planetes"><img src="/assets/img/mercury.svg" alt="" class="w-12"></div>
            <div class="planetes"><img src="/assets/img/jupiter-svgrepo-com.svg" alt="" class="w-12"></div>
            <div class="planetes"><img src="/assets/img/venus-svgrepo-com.svg" alt="" class="w-12"></div>
            <div class="planetes"><img src="/assets/img/saturn.svg" alt="" class="w-12"></div>
            <div class="planetes"><img src="/assets/img/sun.svg" alt="" class="w-12"></div>


            <div class="date actived">
                <p>Lundi</p>
                <p>5 Septembre</p>
            </div>
            <div class="date">
                <p>Mardi</p>
                <p>6 Septembre</p>
            </div>
            <div class="date">
                <p>Mercredi</p>
                <p>7 Septembre</p>
            </div>
            <div class="date">
                <p>Jeudi</p>
                <p>8 Septembre</p>
            </div>
            <div class="date">
                <p>Vendredi</p>
                <p>9 Septembre</p>
            </div>
            <div class="date">
                <p>Samedi</p>
                <p>10 Septembre</p>
            </div>
            <div class="date">
                <p>Dimanche</p>
                <p>11 Septembre</p>
            </div>
        </div>
        <div class="week">
            <p>L</p>
            <p>M</p>
            <p>M</p>
            <p>J</p>
            <p>V</p>
            <p>S</p>
            <p>D</p>
        </div>
        <div class="days">
            <p class="liens">5</p>
            <p class="liens">6</p>
            <p class="liens">7</p>
            <p class="liens">8</p>
            <p class="liens">9</p>
            <p class="liens">10</p>
            <p class="liens">11</p>
        </div>

        <div id="lundi" class="contenuJour actived">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">
                        pate a sel
                    </p>
                    <p>
                        09:00 - 10:30
                    </p>
                </div>
            </div>

        </div>

        <div id="mardi" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">
                        musique
                    </p>
                    <p>
                        09.00 - 11.00
                    </p>
                </div>
            </div>

        </div>

        <div id="mercredi" class="contenuJour">
            <div class="heures">
                <p class="my-10">10h</p>
                <p class="my-10">12h</p>
                <p class="my-10">14h</p>
                <p class="my-10">16h</p>
            </div>
            <div>
                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          arrivé:  {{ $data->arrivalTime }} heures

                    </div>
                </div>

                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          activité:  {{ $data->activity }}
                        <p>
                            09.00 - 11.00
                        </p>
                    </div>
                </div>
                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          temperature:  {{ $data->temperature }}
                        <p>
                            12.30
                        </p>
                    </div>
                </div>

                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          repas:  {{ $data->eat }}
                        <p>
                            12.00 - 13.00
                        </p>
                    </div>
                </div>


                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          heures dormie:  {{ $data->sleep }}
                        <p>
                            13.00 - 16.00
                        </p>
                    </div>
                </div>

                <div class="activitesContainer my-5">
                    <div class="activites">
                        <p class="titre">
                          temperature:  {{ $data->temperature }}
                        <p>
                            13.00 - 16.00
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div id="jeudi" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">

                    </p>
                    <p>
                        00.00 - 00.00
                    </p>
                </div>
            </div>

        </div>

        <div id="vendredi" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">

                    </p>
                    <p>
                        00.00 - 00.00
                    </p>
                </div>
            </div>

        </div>

        <div id="samedi" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">
                        samedi
                    </p>
                    <p>
                        fermé
                    </p>
                </div>
            </div>

        </div>

        <div id="dimanche" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">
                        dimanche
                    </p>
                    <p>
                        fermé
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
