@extends('layouts.master')
@section('content')

        
        <div class='container mb-30 max-w-full'>

            

                {{-- Section header --}}
                <article class="zoneRouge mb-5 rounded-md bg-gradient-to-r from-red-900 via-red-800 to-red-600 p-5 sm:py-8">
                  <h1 class="titreZoneRouge  text-6xl font-bold text-white ">
                    Vos celliers
                  </h1>
                    <p class="text-sm font-normal text-white">Votre espace cellier personnalisé</p>
                </article>

                  <!-- Feedback success -->
                @if (session()->has('success'))
                    <div class="text-emerald-600 text-center font-semibold my-10">{{ session('success') }}</div>
                @endif

            @if (count($celliers) == 0)
                <h3 class="titreSecondaire font-semibold">Bienvenue!</h3>
                <p class="mb-2">Veuillez créer votre premier cellier</p>

                {{-- Section créé cellier --}}
                <a class="block text-center w-full max-w-sm border border-gray-200 rounded-lg shadow" href='cellier/nouveau'>
                    <svg class="mx-auto my-10" height="150px" width="150px"  viewBox="0 0 50 50"><rect fill="none" height="50" width="50"/><line fill="none" stroke="#bfbfbf" stroke-miterlimit="10" stroke-width="2" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="#bfbfbf" stroke-miterlimit="10" stroke-width="2" x1="25" x2="25" y1="9" y2="41"/></svg>
                        <h5 class="mb-1 text-l font-medium text-gray-900 uppercase">Ajouter un cellier</h5>
                </a>

            @endif



            {{-- Section Carte Cellier --}}
            <div class="flexPerso">
            @if ($celliers)
                @foreach ($celliers as $info)

                    <div class="vinoCarte cellierCarte  m-2 border border-gray-200 rounded-lg shadow">   
                        


                    {{-- Section carte cellier --}}
                    <div class="relative rounded-3xl  p-3 text-right">
                          <!-- zone edition cellier-->


                            <!-- zone edit cellier-->
                            <span class="inline-block text-xl text-gray-700 mr-2">
                                <a href="{{ route('cellier.edit', ['id' => $info->id]) }}">
                                <i class="far fa-edit"></i></a>
                            </span>
                            <!-- zone delete cellier-->
                            <span class="inline-block text-xl  text-gray-700">
                                <form action="{{ route('cellier.supprime', ['id' => $info->id]) }}" method="POST">
                                    @csrf
                                    <button data-modal="modal-{{$info->id}}"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </span>
                        </div>

                        <div class="pb-5 flex flex-col">
                       {{-- <svg class="mx-auto" width="200px" height="200px" viewBox="-51.2 -51.2 614.40 614.40" xmlns="http://www.w3.org/2000/svg" fill="#bfbfbf" ><path fill="#bfbfbf" d="M266.5 45.39c-19.9 0-39.8 1.51-59.7 4.51-29.6 26.08-45.4 71.3-45.4 115.4 0 20.2 3.3 39.8 9.6 57 6.5-.3 12.9-.5 19.4-.5 18.5-.8 31.2 0 46.6 2.6-6.1-18.4-9.1-38.7-9.1-59.1 0-43.7 13.6-89.1 42.1-119.83h-3.5zm28.9 1.14c-32.3 25.42-49.5 72.67-49.5 118.77 0 22.2 3.9 43.6 11.5 61.9 12 1.9 23.9 4.3 35.9 7.2 5.8.2 11.5 1.4 16.9 3.4-12-21.2-19-48.7-19-78.8 0-31.8 7.8-60.77 21.1-82.38 6.2-10.15 13.9-18.81 22.6-25.13-13.2-2.3-26.3-3.97-39.5-4.96zm-118.3 8.95c-3.2.74-6.5 1.51-9.8 2.33l-.4.1-.3.1C96.79 69.64 80.62 173.7 118.1 228.1c11.4-2 22.8-3.5 34.2-4.6-5.9-18.1-8.9-38.1-8.9-58.2 0-39.2 10.9-79.7 33.7-109.82zm190.7 2.71c-14.7 0-29 9.74-40.1 27.87-11.2 18.14-18.5 44.14-18.5 72.94 0 28.8 7.3 54.8 18.5 72.9 11.1 18.2 25.4 27.9 40.1 27.9 14.7 0 29-9.7 40.1-27.9 11.2-18.1 18.5-44.1 18.5-72.9 0-28.8-7.3-54.8-18.5-72.94-11.1-18.13-25.4-27.87-40.1-27.87zm-.1 134.01h.2c7.2.1 11.6 5.3 13.9 10 2.3 4.7 3.4 10 3.4 15.9s-1.1 11.2-3.4 15.9c-2.3 4.7-6.7 9.9-13.9 10h-.2c-7.2-.1-11.6-5.3-13.9-10-2.3-4.7-3.4-10-3.4-15.9s1.1-11.2 3.4-15.9c2.3-4.7 6.7-9.9 13.9-10zm-177.3 47.5c-19.8 0-39.7 1.5-59.6 4.5-29.6 26.1-45.45 71.2-45.45 115.3 0 42 14.04 81.3 40.35 101.9 21.1 3.4 42.2 5.2 63.2 5.2-25-25.9-37-66.3-37-107 0-43.8 13.5-89.2 42.1-119.9zm29 1.1c-32.4 25.4-49.6 72.7-49.6 118.8 0 45 16.2 87 46.5 106.2 14.2-1 28.4-2.7 42.6-5.1-8.7-6.4-16.3-15-22.5-25.1-13.3-21.7-21.1-50.6-21.1-82.4 0-31.8 7.8-60.7 21.1-82.3 6.2-10.1 13.8-18.8 22.4-25.1-13.2-2.3-26.3-4-39.4-5zM101 249.9c-3.31.7-6.5 1.5-9.73 2.3h-.43l-.31.1c-90.831 15.1-90.831 186.8 0 201.9l.31.1h.43l3.65.9c-18.61-25.6-27.52-60.5-27.52-95.7 0-39.1 10.88-79.6 33.6-109.6zm190.8 2.5c-14.7 0-28.9 9.8-40.1 27.9-11.2 18.1-18.5 44.1-18.5 72.9 0 28.9 7.3 54.8 18.5 73 11.2 18.1 25.4 27.9 40.1 27.9 14.7 0 28.9-9.8 40.1-27.9 11.2-18.2 18.5-44.1 18.5-73 0-28.8-7.3-54.8-18.5-72.9-11.2-18.1-25.4-27.9-40.1-27.9zm139 0c-8.9.1-17.7 3.7-25.8 10.7-.2.2-.4.4-.6.5-4.9 4.4-9.5 10-13.6 16.8-11.1 18.1-18.4 44-18.4 72.8 0 28.8 7.3 54.8 18.5 72.9C402 444.3 416.3 454 431 454c14.7 0 29-9.7 40.1-27.9 11.2-18.1 18.5-44.1 18.5-72.9 0-28.8-7.3-54.8-18.5-72.9-11.1-18.2-25.4-27.9-40.1-27.9zm-139 134.1c7.2 0 11.7 5.2 14.1 9.9 2.3 4.7 3.3 10 3.3 16 0 5.9-1 11.3-3.3 15.9-2.4 4.8-6.9 9.9-14.1 9.9-7.2 0-11.7-5.1-14-9.9-2.4-4.6-3.4-10-3.4-15.9 0-6 1-11.3 3.4-16 2.3-4.7 6.8-9.9 14-9.9zm139.1 0h.2c7.2.1 11.6 5.3 13.9 10 2.3 4.7 3.4 10 3.4 15.9s-1.1 11.2-3.4 15.9c-2.3 4.7-6.7 9.9-13.9 10h-.2c-7.2-.1-11.6-5.3-13.9-10-2.3-4.7-3.4-10-3.4-15.9s1.1-11.2 3.4-15.9c2.3-4.7 6.7-9.9 13.9-10zm-69.5 16.8c-3.5 11.9-8.3 22.8-14.1 32.3-8.5 13.6-19.4 24.6-31.9 30.8 27.5.9 55.1-.9 82.6-5.7-8.6-6.3-16.3-15-22.5-25.1-5.8-9.5-10.6-20.4-14.1-32.3z"></path></svg> --}}
                                    <img src="https://images.assetsdelivery.com/compings_v2/yupiramos/yupiramos1901/yupiramos190109446.jpg" alt="">
                                    {{-- <img class=" justify-center"  src="https://cdn-icons-png.flaticon.com/512/2727/2727964.png" alt=""> --}}
                                    <div class="text-center justify-center">
                                        <h2 class="cellierTitre px-2 mb-2  text-xl uppercase font-semibold"> {{ $info->nom_cellier }}</h2>
                                            {{-- Section pour le nombre de bouteille --}}
                                            <i class=" text-stone-600 fa-solid fa-wine-bottle  text-3xl"></i> <strong>({{ $info->bouteilles_count }}) </strong>

                                    </div>
                        </div>
                        <div class="flexboutonCellier flex gap-y-px">

                            @if ($info->bouteilles_count != 0)
                            <a class="w-full text-center bg-slate-800 text-white  py-2 px-4   border-white" href='{{ route('bouteille.liste', ['id' => $info->id]) }}'>Voir bouteille</a>
                            @endif
                            <a class="w-full text-center bg-slate-700 text-white  py-2 px-4  " href='{{ route('bouteille.nouveau', ['id' => $info->id]) }}'>Ajouter bouteille</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal" id="modal-{{$info->id}}">
                        <div class="modal-bg modal-exit"></div>
                        <div class="modal-container">
                            <button data-action="no-supprimer" class="modal-close modal-exit"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                            <div><i class="block text-amber-600 mx-auto fa-solid fa-triangle-exclamation text-5xl"></i></div>
                            <h1 class="text-2xl font-bold">Voulez-vous supprimer</h1>
                            <h2 class="font-semibold uppercase text-2xl text-amber-800">{{$info->nom_cellier}}</h2>

                             <p class="mb-3">
                            @if ($info->bouteilles_count != 0)
                                @if ($info->bouteilles_count == 1)
                                    {{ $info->bouteilles_count }} bouteille
                                @else
                                    {{ $info->bouteilles_count }} bouteilles
                            @endif
                            seront  supprimées
                            @endif
                        </p>
                        <div class="flex justify-end space-x-1">
                            <button class="bg-red-900 text-white font-bold py-2 px-4 rounded modal-exit" data-action="supprimer" class="modal-exit">Supprimer</button>
                            <button class="bg-slate-900 text-white font-bold py-2 px-4 rounded modal-exit" data-action="no-supprimer" class="modal-exit">Non</button>
                            
                            
                        </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>

            <!-- Bouton ajouter un cellier -->
            @if (!$celliers)
                <a class="block text-center w-full max-w-sm border border-gray-200 rounded-lg shadow" href='cellier/nouveau'>
                    <svg class="mx-auto my-10" height="150px" width="150px"  viewBox="0 0 50 50"><rect fill="none" height="50" width="50"/><line fill="none" stroke="#bfbfbf" stroke-miterlimit="10" stroke-width="2" x1="9" x2="41" y1="25" y2="25"/><line fill="none" stroke="#bfbfbf" stroke-miterlimit="10" stroke-width="2" x1="25" x2="25" y1="9" y2="41"/></svg>
                        <h5 class="mb-1 text-l font-medium text-gray-900 uppercase">Ajouter un cellier</h5>
                </a>
            @endif

        </div>
    </div>

      {{-- Section pour le navbar du bas --}}
    @include('layouts.bottomNav')
@endsection




<style>

</style>

<!--
    /**
    * Script qui gere l'ajout et la suppression d'une bouteille dans la carte
    */

-->
<script>

    window.addEventListener("load",function(){


    //Détecter si url =  vue liste bouteille


        //Gestionnaire d'evenement du bouton delete

        const modals = document.querySelectorAll("[data-modal]");

        modals.forEach(function (trigger) {
        trigger.addEventListener("click", function (event) {
            event.preventDefault();
            let form = event.target.parentElement.parentElement
            console.log(event.target.parentElement.parentElement);
            //console.log(trigger.dataset.modal)
            const modal = document.getElementById(trigger.dataset.modal);
            console.log(modal);
            modal.classList.add("open");
            const exits = modal.querySelectorAll(".modal-exit");
           // console.log(exits);
            exits.forEach(function (exit) {
            exit.addEventListener("click", function (event) {
                event.preventDefault();
                console.log(form)
                console.log(event.target.dataset.action)
                if(event.target.dataset.action == "supprimer"){
                    console.log(form)
                    form.submit();
                }
                modal.classList.remove("open");
            });
            });
        });
        });

    });

</script>
