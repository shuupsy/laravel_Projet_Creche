{{-- Modal HORAIRE --}}
<div class="absolute flex justify-center">
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

                    <form action="{{ $id_kid->id }}/updatehoursmatin" method="POST">
                        @csrf
                        @method('PUT')
                        <button value="{{ date('TH:i:s') }}" name="arrivalTime" type="submit"
                            class='text-sm border bg-[#D8E2DC] p-2 rounded-md'>ARRIVÉE (matin)</button>
                    </form>
                    <form action="{{ $id_kid->id }}/updatehourssoir" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" value="{{ date('TH:i:s') }}" name="departTime"
                            class='text-sm border bg-[#8EC9C1] p-2  rounded-md'>SORTIE (soir)</button>
                    </form>

                    <p class='text-xs'><span class='underline'>Guide:</span> Appuyez sur un des 2 boutons pour
                        enregistrer automatiquement l'heure d'arrivée/sortie.</p>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal HUMEUR --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Humeur en météo</h3>

                    <form action="{{ $id_kid->id }}/updatehumeur" method="POST">
                        @csrf
                        @method('PUT')
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

{{-- Modal ACTIVITE --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div>

                    <h3 class='text-center' id="modal-title">ACTIVITÉ</h3>

                    <form action="{{ $id_kid->id }}/updateactivite" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="activity">Description</label>
                        <textarea name="activity" id="activity" cols="30" rows="5"
                            class='placeholder:text-slate-400 bg-white w-full border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-[#8EC9C1] focus:ring-[#8EC9C1] focus:ring-1 sm:text-sm'></textarea>
                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal REPAS --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relativeé inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Comment {{ $id_kid->name }} a mangé aujourd'hui ?</h3>

                    <form action="{{ $id_kid->id }}/updaterepas" method="POST">
                        @csrf
                        @method('PUT')
                        <div class='flex' id='list_weather'>
                            {{-- COLERE --}}
                            <div class='meteo'>
                                <label for="lightning">Pas bien</label>
                                <input type="radio" name='eat' value="PB" id="lightning">
                            </div>

                            {{-- TRISTE --}}
                            <div class='meteo'>
                                <label for="rain">Moyen</label>
                                <input type="radio" name='eat' value="M" id="rain">
                            </div>

                            {{-- AGITE --}}
                            <div class='meteo'>
                                <label for="wind">Bien</label>
                                <input type="radio" name='eat' value="B" id="wind">
                            </div>

                            {{-- STRESS --}}
                            <div class='meteo'>
                                <label for="cloud">Très bien</label>
                                <input type="radio" name='eat' value="TB" id="cloud">
                            </div>


                        </div>

                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal SOMMEIL --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Durée de la sieste</h3>

                    <form action="{{ $id_kid->id }}/updatesommeil" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="sleep" id='sleep_option' class='focus:outline-none' multiple>
                            <option value="0"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>X</option>
                            <option value="0.30"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>0:30</option>
                            <option value="1.30"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>1:00</option>
                            <option value="1.30"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>1:30</option>
                            <option value="2.00"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>2:00</option>
                            <option value="2.30"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>2:30</option>
                            <option value="3.00"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>3:00</option>
                            <option value="3.30"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>3:30</option>
                            <option value=">4.00"
                                class='rounded-lg text-center border border-blue-500 cursor-pointer'>≥ 4:00</option>
                        </select>
                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal CHANGE --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">{{ $id_kid->name }} a été changé.</h3>

                    <form action="{{ $id_kid->id }}/updatechange" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" onclick="updatechange('{{ $id_kid->id }}')">OUI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal DIARRHEE --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">Diarrhée ?</h3>
                    <p class='text-xs'><span class='underline'>Rappel:</span> A 3 diarrhées par jour, l'enfant
                        devra retourner à la maison.</p>
                    <p class='text-xs'>Restant: <span>[...]</span></p>

                    <form action="{{ $id_kid->id }}/updatepoo" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" onclick="plus('{{ $id_kid->id }}')">OUI</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


{{-- Modal FIEVRE --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">TEMPERATURE</h3>
                    <form action="{{ $id_kid->id }}/updatetemperature" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="container_temperature">
                            <div class="range-slider mt-5">
                                <span id="rs-bullet">37°C</span>
                                <input id="rs-range-line" type="range" name="temperature" min="35"
                                    step="0.1" max="40">
                            </div>

                            <div class="box-minmax">
                                <p>Normale [36.5 - 37.5]</p>
                            </div>
                        </div>
                        <button type="submit" class='text-sm border bg-[#8EC9C1] p-2  rounded-md'>VALIDER</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal BLESSURE --}}
<div class="absolute flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div>

                    <h3 class='text-center' id="modal-title">BLESSURE / ACCIDENT</h3>

                    <form action="{{ $id_kid->id }}/updateaccident" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" onclick="updatechange('{{ $id_kid->id }}')">OUI</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>




{{-- Modal FIEVRE --}}
<div class="relative flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div class='text-center'>

                    <h3 id="modal-title">TEMPERATURE</h3>

                    <form action="{{ $id_kid->id }}/updatetemperature" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container_temperature">
                            <div class="range-slider mt-5">
                                <span id="rs-bullet">37°C</span>
                                <input id="rs-range-line" type="range" name="temperature" min="35"
                                    step="0.1" max="40">
                            </div>

                            <div class="box-minmax">
                                <p>Normale [36.5 - 37.5]</p>
                            </div>
                            <button type="submit"
                                class='text-sm border bg-[#8EC9C1] p-2  rounded-md'>VALIDER</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

{{-- Modal BLESSURE --}}
<div class="relative flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div>

                    <h3 class='text-center' id="modal-title">BLESSURE / ACCIDENT</h3>

                    <form action="{{ $id_kid->id }}/updateaccident" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="accident">Description</label>
                        <textarea name="accident" id="accident" cols="30" rows="5"
                            class='placeholder:text-slate-400 bg-white w-full border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-[#8EC9C1] focus:ring-[#8EC9C1] focus:ring-1 sm:text-sm'></textarea>
                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</div>


{{-- Modal allergie --}}
<div class="relative flex justify-center">
    <div class='modalFull hidden'>
        <div class="">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">

                <div>

                    <h3 class='text-center' id="modal-title">BLESSURE / ACCIDENT</h3>

                    <form action="{{ $id_kid->id }}/updateaccident" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="accident">Description</label>
                        <textarea name="accident" id="accident" cols="30" rows="5"
                            class='placeholder:text-slate-400 bg-white w-full border border-slate-300 rounded-md py-2 pl-2 pr-3 shadow-sm focus:outline-none focus:border-[#8EC9C1] focus:ring-[#8EC9C1] focus:ring-1 sm:text-sm'></textarea>
                        <button type='submit' class='text-sm border p-2 rounded-md bg-[#57cc99]'>VALIDER</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
