<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ( $vacantes as $vacante)
            <div class="p-1 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

                <div class=" leading-10">
                    <a href="{{ route('vacantes.show',$vacante->id)}}" class="text-xl font-bold">
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

                    <a href="{{ route('vacantes.edit',$vacante->id)}}"
                    class=" bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar
                    </a>


                    <button 
                    wire:click="$emit('mostrarAlerta',{{ $vacante->id}})"

                    class=" bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Eliminar
                    </button>

                </div>


            </div>    
        @empty 
        <!--212. Finalizando el Listado de Vacantes!-->
        <div class="p-6 text-gray-900 dark:text-gray-100">
            No hay vacantes a mostrar
        </div>
        @endforelse
    </div>
    <div class=" mt-10">
    {{ $vacantes->links() }}
    </div>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Livewire.on('prueba',vacanteId =>{
        //     alert('hola' + vacanteId);
        // });
        Livewire.on('mostrarAlerta',vacanteId =>{
            Swal.fire({
            title: '¿Eliminar Vacante?',
            text: "Una vacante eliminada no se puede recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si,¡ eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                // eliminar la vacante seleccionada
                Livewire.emit('eliminarVacante',vacanteId);
                Swal.fire(
                'Se elimino la Vacante!',
                'Eliminado Correctamente',
                'success'
                )
            }
        })

        });
        

    </script>
@endpush