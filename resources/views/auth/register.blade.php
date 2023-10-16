<x-guest-layout>
    <x-slot name="logo">
        <a href="">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Que roll tienes -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('¿Que tipo de cuenta deseas en DebJobs')" />
            <select id="rol" name="rol" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                <option value="">-- seleccion un rol -- </option>
                <option value="1">-- Developer - Obtner Empleo</option>
                <option value="2">-- Reclutador - Publica Empleos</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex justify-between mb-5 mt-2">
            <x-link :href="route('password.request')">
                ¿Olvidate tu password?
            </x-link>
            <x-link :href="route('login')">
                Iniciar sesión
            </x-link>
        </div>
        <x-primary-button class=" w-full justify-center">
            {{ __('Crear cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>
