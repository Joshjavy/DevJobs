<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ( $vacantes as $vacante)
        <div class="p-1 text-gray-900 dark:text-gray-100">

            <div class=" leading-10">
                <a href="#" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
            </div>

        </div>    
    @empty
    <div class="p-6 text-gray-900 dark:text-gray-100">
        Aun no has registrado ninguna Vacante
    </div>
    @endforelse
    
</div>