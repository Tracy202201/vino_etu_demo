idUsager = {{$id_usager}}
<a href="/SAQ">Importer le catalogue</a>
<h1>Espace cellier</h1>

@if (session()->has('success'))
<span style="color:green">{{ session('success') }}</span>
@endif

@if ($celliers)
<h3>Vos celliers</h3>
@foreach ($celliers as  $info)
    <div>

       
    <h3>  {{$info->nom_cellier}} </h3> 
    <p> nombre de bouteille :   {{$info->bouteilles_count}} </p>
     <!-- zone edit cellier-->
     <a href="{{ route('cellier.edit', ['id' => $info->id ]) }}">Éditer</a>
     <a href="{{ route('bouteille.nouveau', ['id' => $info->id ]) }}">Ajouter une bouteille</a>
     <!-- zone delete cellier-->
     <form action="{{ route('cellier.supprime', ['id' => $info->id]) }}" method="POST">
         @csrf
         <button>Supprimer</button>
     </form>
    </div>
@endforeach
@endif

<a href='cellier/nouveau'>Ajouter un cellier</a>