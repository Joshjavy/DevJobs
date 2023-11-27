<div>
    <livewire:filtrar-vacantes/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">
                Nuestras Vacantes Disponibles
            </h3>
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-300">
                @forelse ( $vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-6">
                        <div class="med:flex-1">
                            <a href="{{ route('vacantes.show',$vacante->id) }}"
                                class=" p-3 text-sm uppercase font-bold rounded-lg text-gray-600"    
                                > {{$vacante->titulo}} </a>
                                <p class="p-3 text-base text-gray-600"> {{$vacante->empresa }}  </p>
                                <p class="p-3 font-bold text-xs text-gray-600 ">
                                    Último día para posptularse:
                                    <span class="font-normal"> {{$vacante->ultimo_dia->format('d/m/Y') }}  </span>
                                </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a href="{{ route('vacantes.show',$vacante->id) }}"
                                class="bg-indigo-800 p-3 text-sm uppercase font-bold rounded-lg text-white block text-center"    
                            > ver vacante</a>
                                
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600"> No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
