{{-- Modal HORAIRE --}}
<div class="relative flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Horaire d'Arrivée / de Sortie</h3>

                    <h2 id='clock'
                    class='mx-auto my-3 border-double border-4 w-20 font-black border-stone-800 rounded-md'>
                </h2>

                <form action="{{$id_kid->id}}/updatehoursmatin" method="POST">
                    @csrf
                    @method("PUT")
                    <button value="{{date('TH:i:s')}}" name="arrivalTime" type="submit" class='text-sm border bg-[#D8E2DC] p-2 rounded-md'>ARRIVÉE (matin)</button>
                </form>
                <form action="{{$id_kid->id}}/updatehourssoir" method="POST">
                    @csrf
                    @method("PUT")
                    <button type="submit" value="{{date('TH:i:s')}}" name="departTime" class='text-sm border bg-[#8EC9C1] p-2  rounded-md'>SORTIE (soir)</button></form>

                        <p class='text-xs'><span class='underline'>Guide:</span> Appuyez sur un des 2 boutons pour
                            enregistrer automatiquement l'heure d'arrivée/sortie.</p>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal HUMEUR --}}
<div class="relative flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Humeur en météo</h3>

                    <form action="{{$id_kid->id}}/updatehumeur" method="POST">
                        @csrf
                        @method("PUT")
                        <div class='flex' id='list_weather'>
                            {{-- COLERE --}}
                            <div class='meteo'>
                                <label for="lightning">
                                    <img src="/assets/img/mood/lightning.png" alt="humeur colere eclairs">
                                </label>
                                <input type="radio" name='humeur' value="colere" id="lightning">
                            </div>

                            {{-- TRISTE --}}
                            <div class='meteo'>
                                <label for="rain">
                                    <img src="/assets/img/mood/water.png" alt="humeur triste pluie">
                                </label>
                                <input type="radio" name='humeur' value="triste" id="rain">
                            </div>

                            {{-- AGITE --}}
                            <div class='meteo'>
                                <label for="wind">
                                    <img src="/assets/img/mood/hurricane.png" alt="humeur agite tornade">
                                </label>
                                <input type="radio" name='humeur' value="agite" id="wind">
                            </div>

                            {{-- STRESS --}}
                            <div class='meteo'>
                                <label for="cloud">
                                    <img src="/assets/img/mood/cloudsun.png" alt="humeur distrait stress nuage">
                                </label>
                                <input type="radio" name='humeur' value="distrait" id="cloud">
                            </div>

                            {{-- JOYEUX --}}
                            <div class='meteo'>
                                <label for="sun">
                                    <img src="/assets/img/mood/sun.png" alt="humeur soleil">
                                </label>
                                <input type="radio" name='humeur' value="joyeux" id="sun">
                            </div>

                        </div>

                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>



                </div>

            </div>
        </div>
    </div>
</div>
