<div class="bg-gray-200 p-5 mt-5 flex flex-col justify-center items-center ">
    <h3 class="text-center text-2xl fond-bold my-4">Postularme a esta vacante</h3>
    <form class="w-96 mt-5" wire:submit.prevent='postularme'>
        <div class="mb-4">
            <x-input-label for="vc" :value="__('Curriculum o Hoja de vida (PDF)')" />
            <x-text-input id="cv" type="file" 
                accept=".pdf"
                wire:model="cv"
                class="block mt-1 w-full"
                />
        </div>
        @error('cv')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
        <x-primary-button class=" w-full justify-center mt-5">
            {{ __('Postularme') }}
        </x-primary-button>    
    </form>
</div>
