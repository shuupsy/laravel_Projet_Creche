@extends('backend.layout.index')


@section('content')
    <div class="containerCalendrier drop-shadow-md bg-white w-80 mt-16">
        <div class="flex gap-4 p-4 place-content-around items-center">
            <div>
                <img class="w-12" src="https://www.svgrepo.com/show/108654/mercury.svg" alt="">
            </div>
            <div class="flex flex-col">

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
                        lundi
                    </p>
                    <p>
                        00.00 - 00.00
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
                        mardi
                    </p>
                    <p>
                        00.00 - 00.00
                    </p>
                </div>
            </div>

        </div>

        <div id="mercredi" class="contenuJour">
            <div class="heures">
                <p>10h</p>
                <p>12h</p>
                <p>14h</p>
                <p>16h</p>
            </div>
            <div class="activitesContainer">
                <div class="activites">
                    <p class="titre">
                        mercredi
                    </p>
                    <p>
                        00.00 - 00.00
                    </p>
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
                        jeudi
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
                        vendredi
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
                        00.00 - 00.00
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
                        00.00 - 00.00
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
