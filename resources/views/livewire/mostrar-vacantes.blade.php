<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ( $vacantes as $vacante)
        <div class="p-1 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

            <div class=" leading-10">
                <a href="#" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold"> {{ $vacante->empresa}}</p>
                <p class="text-sm text-gray-500"> Último día: {{ $vacante->ultimo_dia->format('d/m/Y')}}</p>
            </div>

            <div class=" flex flex-col md:flex-row items-strech gap-3  mt-5 md:mt-0">
                <a href="#"
                class=" bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Candidatos
                </a>

                <a href="#"
                class=" bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Editar
                </a>


                <a href="#"
                class=" bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Eliminar
                </a>

            </div>


        </div>    
    @empty
    <div class="p-6 text-gray-900 dark:text-gray-100">
        Aun no has registrado ninguna Vacante
    </div>
    @endforelse
    
</div>