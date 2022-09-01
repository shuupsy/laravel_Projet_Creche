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
          <p>5</p>
          <p>6</p>
          <p>7</p>
          <p>8</p>
          <p>9</p>
          <p>10</p>
          <p>11</p>
        </div>
        <div class="noShow">
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
    </div>
@endsection
