<div class=" w-2/4">
<form class="md:w1/2 space-y-5">
    <!--!-->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo"
            class="block mt-1 w-full"
            type="text" name="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select id="salario" name="salario" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario )
                <option value="{{ $salario->id}}"> {{ $salario->salario}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categória')" />
        <select id="categoria" name="categoria" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            
        </select>
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa"
            class="block mt-1 w-full"
            type="text" name="empresa"
            :value="old('empresa')"
            placeholder="Empresa: Ej. Netflix, uber, Spotify" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularte')" />
        <x-text-input id="ultimo_dia"
            class="block mt-1 w-full"
            type="date" name="ultimo_dia"
            :value="old('ultimo_dia')"
            placeholder="Último día para postularte" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Descripción Puesto')" />
        <textarea
        name="descripcion"
        id="descripcion"
        placeholder="Descripción general del puesto, experiencia"
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-72"
    
        > </textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen"
            class="block mt-1 w-full"
            type="file"
            name="imagen"
            
             />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    
    <x-primary-button class=" w-full justify-center">
        {{ __('Crear Vacante') }}
    </x-primary-button>    
</form>
</div>