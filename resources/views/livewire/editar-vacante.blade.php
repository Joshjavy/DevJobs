<div class=" w-2/4">
    <form class="md:w1/2 space-y-5" wire:submit.prevent='crearVacante'>
        <!--!-->
        <div>
            <x-input-label for="titulo" :value="__('Titulo Vacante')" />
            <x-text-input id="titulo"
                class="block mt-1 w-full"
                type="text"
                wire:model="titulo"
                :value="old('titulo')"
                placeholder="Titulo Vacante" />
            {{-- <x-input-error :messages="$errors->get('titulo')" class="mt-2" /> --}}
                @error('titulo')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
    
        </div>
    
        <div>
            <x-input-label for="salario" :value="__('Salario Mensual')" />
            <select id="salario" wire:model="salario" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                <option>-- Seleccione --</option>
                @foreach ($salarios as $salario )
                    <option value="{{ $salario->id}}"> {{ $salario->salario}}</option>
                @endforeach
            </select>
            @error('salario')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
        </div>
    
        <div>
            <x-input-label for="categoria" :value="__('Categória')" />
            <select id="categoria" wire:model="categoria" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                <option>-- Seleccione --</option>
                @foreach ($categorias as $categoria )
                    <option value="{{ $categoria->id}}"> {{ $categoria->categoria}}</option>
                @endforeach
            </select>
            @error('categoria')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    
        <div>
            <x-input-label for="empresa" :value="__('Empresa')" />
            <x-text-input id="empresa"
                class="block mt-1 w-full"
                type="text"
                wire:model="empresa"
                :value="old('empresa')"
                placeholder="Empresa: Ej. Netflix, uber, Spotify" />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
                @error('empresa')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
        </div>
    
        <div>
            <x-input-label for="ultimo_dia" :value="__('Último día para postularte')" />
            <x-text-input id="ultimo_dia"
                class="block mt-1 w-full"
                type="date"
                wire:model="ultimo_dia"
                :value="old('ultimo_dia')"
                placeholder="Último día para postularte" />
            {{-- <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" /> --}}
            @error('ultimo_dia')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    
        <div>
            <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
            <textarea
            wire:model="descripcion"
            id="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-72"
        
            > </textarea>
            @error('descripcion')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    
        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen"
                class="block mt-1 w-full"
                type="file"
                wire:model="imagen"
                accept="image/*"
                
                 />
                 <div class="my-5 w-80">
                    {{-- @if ($imagen)
                        <img src="{{ $imagen->temporaryUrl() }}" />
                    @endif
                 </div>
            @error('imagen')
                <livewire:mostrar-alerta :message="$message" />
             @enderror --}}
            {{-- <x-input-error :messages="$errors->get('imagen')" class="mt-2" /> --}}
        </div>
        
        <x-primary-button class=" w-full justify-center">
            {{ __('Crear Vacante') }}
        </x-primary-button>    
    </form>
    </div>