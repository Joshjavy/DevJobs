<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('
        ¿Olvidates tu password? Coloca tu password y enviaremos un enlace para que puedas crear un nuevo password.
        ') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between mb-5 mt-2">
            <x-link :href="route('register')">
                Crear cuenta
            </x-link>
            <x-link :href="route('login')">
                Iniciar sesión
            </x-link>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Enviar instrucciones') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
