<!-- Navigation footer fixed-->

{{-- <div class="w-full h-screen">

<div class="w-full fixed bottom-20">
	<section id="bottom-navigation" class=" block bg-white fixed inset-x-0 bottom-3 z-10">

		<div id="tabs" class="flex justify-between">

			<a href="/cellier" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                <i class="fa-solid fa-house"></i>
				<span class="tab tab-kategori block text-xs">Cellier</span>
			</a>
			@if($titre == 'cellier')
			<a href="/cellier/nouveau" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                <i class="fa-solid fa-plus"></i>
				<span class="tab tab-explore block text-xs">Ajouter</span>
			</a>
			@endif
			
			@if($titre == 'bouteille')
				@isset($id_cellier)
					<a href={{ route('bouteille.nouveau', ['id' => $id_cellier])}} class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
						<i class="fa-solid fa-wine-bottle"></i>
						<span class="tab tab-explore block text-xs">Ajouter</span>
					</a>
					@endisset
			@endif

			
			 
			@if($titre == 'formBouteille')
				@isset($id_cellier)
					<a href={{ route('bouteille.liste', ['id' => $id_cellier])}} class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
						<i class="fa-solid fa-wine-bottle"></i>
						<span class="tab tab-explore block text-xs">Liste</span>
					</a>
					@endisset
			@endif

			


			<a href="/logout" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                <i class="fa-solid fa-right-from-bracket"></i>
				<span class="tab tab-whishlist block text-xs">Déconnexion</span>
			</a>
		</div>
	</section>
</div> --}}




  <!-- fixed nav -->
  <nav class="fixed bottom-0 inset-x-0 bg-gray-100 flex justify-between text-sm text-blue-900 uppercase font-mono">

    <a href="#" class="w-full block py-5 px-3 text-center hover:bg-gray-300 hover:text-gray-800 transition duration-300">
      <svg class="w-6 h-6 mb-2 mx-auto" width="800px" height="800px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M266.5 45.39c-19.9 0-39.8 1.51-59.7 4.51-29.6 26.08-45.4 71.3-45.4 115.4 0 20.2 3.3 39.8 9.6 57 6.5-.3 12.9-.5 19.4-.5 18.5-.8 31.2 0 46.6 2.6-6.1-18.4-9.1-38.7-9.1-59.1 0-43.7 13.6-89.1 42.1-119.83h-3.5zm28.9 1.14c-32.3 25.42-49.5 72.67-49.5 118.77 0 22.2 3.9 43.6 11.5 61.9 12 1.9 23.9 4.3 35.9 7.2 5.8.2 11.5 1.4 16.9 3.4-12-21.2-19-48.7-19-78.8 0-31.8 7.8-60.77 21.1-82.38 6.2-10.15 13.9-18.81 22.6-25.13-13.2-2.3-26.3-3.97-39.5-4.96zm-118.3 8.95c-3.2.74-6.5 1.51-9.8 2.33l-.4.1-.3.1C96.79 69.64 80.62 173.7 118.1 228.1c11.4-2 22.8-3.5 34.2-4.6-5.9-18.1-8.9-38.1-8.9-58.2 0-39.2 10.9-79.7 33.7-109.82zm190.7 2.71c-14.7 0-29 9.74-40.1 27.87-11.2 18.14-18.5 44.14-18.5 72.94 0 28.8 7.3 54.8 18.5 72.9 11.1 18.2 25.4 27.9 40.1 27.9 14.7 0 29-9.7 40.1-27.9 11.2-18.1 18.5-44.1 18.5-72.9 0-28.8-7.3-54.8-18.5-72.94-11.1-18.13-25.4-27.87-40.1-27.87zm-.1 134.01h.2c7.2.1 11.6 5.3 13.9 10 2.3 4.7 3.4 10 3.4 15.9s-1.1 11.2-3.4 15.9c-2.3 4.7-6.7 9.9-13.9 10h-.2c-7.2-.1-11.6-5.3-13.9-10-2.3-4.7-3.4-10-3.4-15.9s1.1-11.2 3.4-15.9c2.3-4.7 6.7-9.9 13.9-10zm-177.3 47.5c-19.8 0-39.7 1.5-59.6 4.5-29.6 26.1-45.45 71.2-45.45 115.3 0 42 14.04 81.3 40.35 101.9 21.1 3.4 42.2 5.2 63.2 5.2-25-25.9-37-66.3-37-107 0-43.8 13.5-89.2 42.1-119.9zm29 1.1c-32.4 25.4-49.6 72.7-49.6 118.8 0 45 16.2 87 46.5 106.2 14.2-1 28.4-2.7 42.6-5.1-8.7-6.4-16.3-15-22.5-25.1-13.3-21.7-21.1-50.6-21.1-82.4 0-31.8 7.8-60.7 21.1-82.3 6.2-10.1 13.8-18.8 22.4-25.1-13.2-2.3-26.3-4-39.4-5zM101 249.9c-3.31.7-6.5 1.5-9.73 2.3h-.43l-.31.1c-90.831 15.1-90.831 186.8 0 201.9l.31.1h.43l3.65.9c-18.61-25.6-27.52-60.5-27.52-95.7 0-39.1 10.88-79.6 33.6-109.6zm190.8 2.5c-14.7 0-28.9 9.8-40.1 27.9-11.2 18.1-18.5 44.1-18.5 72.9 0 28.9 7.3 54.8 18.5 73 11.2 18.1 25.4 27.9 40.1 27.9 14.7 0 28.9-9.8 40.1-27.9 11.2-18.2 18.5-44.1 18.5-73 0-28.8-7.3-54.8-18.5-72.9-11.2-18.1-25.4-27.9-40.1-27.9zm139 0c-8.9.1-17.7 3.7-25.8 10.7-.2.2-.4.4-.6.5-4.9 4.4-9.5 10-13.6 16.8-11.1 18.1-18.4 44-18.4 72.8 0 28.8 7.3 54.8 18.5 72.9C402 444.3 416.3 454 431 454c14.7 0 29-9.7 40.1-27.9 11.2-18.1 18.5-44.1 18.5-72.9 0-28.8-7.3-54.8-18.5-72.9-11.1-18.2-25.4-27.9-40.1-27.9zm-139 134.1c7.2 0 11.7 5.2 14.1 9.9 2.3 4.7 3.3 10 3.3 16 0 5.9-1 11.3-3.3 15.9-2.4 4.8-6.9 9.9-14.1 9.9-7.2 0-11.7-5.1-14-9.9-2.4-4.6-3.4-10-3.4-15.9 0-6 1-11.3 3.4-16 2.3-4.7 6.8-9.9 14-9.9zm139.1 0h.2c7.2.1 11.6 5.3 13.9 10 2.3 4.7 3.4 10 3.4 15.9s-1.1 11.2-3.4 15.9c-2.3 4.7-6.7 9.9-13.9 10h-.2c-7.2-.1-11.6-5.3-13.9-10-2.3-4.7-3.4-10-3.4-15.9s1.1-11.2 3.4-15.9c2.3-4.7 6.7-9.9 13.9-10zm-69.5 16.8c-3.5 11.9-8.3 22.8-14.1 32.3-8.5 13.6-19.4 24.6-31.9 30.8 27.5.9 55.1-.9 82.6-5.7-8.6-6.3-16.3-15-22.5-25.1-5.8-9.5-10.6-20.4-14.1-32.3z"/></svg>
      Cellier
    </a>

    <a href="#" class="w-full block py-5 px-3 text-center hover:bg-gray-300 hover:text-gray-800">
        <svg class="w-6 h-6 mb-2 mx-auto" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z" fill="#292D32"/>
            </svg>
      Ajouter
    </a>

    <a href="#" class="w-full block py-5 px-3 text-center hover:bg-gray-300 hover:text-gray-800">
      <svg class="w-6 h-6 mb-2 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
      </svg>
      Deconnexion
    </a>


  </nav>
