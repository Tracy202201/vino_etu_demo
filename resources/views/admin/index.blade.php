@extends ('layouts.master')
@section('content')

<!-- component -->

  <!-- Gestion des cellier -->
  <div class="container  max-w-3xl mx-auto">
    <div class="mb-4">
        <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">Gestion SAQ</h1>
      <div class="flex justify-end">
        <button class="px-4 py-2 rounded-md bg-red-900 text-sky-100 hover:bg-red-500">Mis a jour</button>
      </div>
    </div>
</div>

<!-- Gestion des usagers -->
<body class="antialiased font-sans bg-gray-200">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">{{ __('Admin Tableau') }}</h2>
            </div>
           
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                @if ($users)
                                <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Usager
                                </th>
                                <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Nom
                                </th>
                                <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Detail
                                </th>
                                <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Supprimer
                                </th>
                                </tr>
                        </thead>
                                
                                    @foreach ($users as  $info)
                                    @if ($info->id >1)
                                    <tbody class="bg-white">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                              <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                        alt="" />
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                  {{$info->name}}
                                                </div>
                                            </td>
                                            <!--<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                 <!-- zone detail usager-->
                                                <!--<form action="{{ route('admin.supprime', ['id' => $info->id]) }}" method="POST">
                                                    @csrf
                                                    <button>Detail</button>
                                                </form>-->
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="flex items-center">
                                                 <!-- zone delete usager-->
                                                <form action="{{ route('admin.supprime', ['id' => $info->id]) }}" method="POST">
                                                    @csrf
                                                    <button data-modal="modal-{{$info->id}}"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                </div>
                                            </td>
                                    </tbody>
                                    @endif
                                    @endforeach
                                @endif
                                </th>
                            </tr>
                    </table>
                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
                        </div>

                         <!-- Modal copy dans admin-->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



  @endsection

  <!--
    /**
    * Script qui gere la suppression d'un usager
    */

-->
<script>

    window.addEventListener("load",function(){



        //Gestionnaire d'evenement du bouton delete

        const modals = document.querySelectorAll("[data-modal]");

        modals.forEach(function (trigger) {
        trigger.addEventListener("click", function (event) {
            event.preventDefault();
            let form = event.target.parentElement.parentElement
            console.log(event.target.parentElement.parentElement);
            //console.log(trigger.dataset.modal)
            const modal = document.getElementById(trigger.dataset.modal);
            //console.log(modal);
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

