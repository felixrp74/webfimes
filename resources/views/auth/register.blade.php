<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
 
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                {{-- ESTE TIPO SELECCION FUNCION CON id --}}
                {{-- <x-jet-input id="escuela" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /> --}}
                {{-- <select>
                    <option value="ingenieria-mecanica">ingenieria-mecanica</option>
                    <option value="ingenieria-electronica">ingenieria-electronica</option>
                    <option value="ingenieria-sistemas">ingenieria-sistemas</option>
                </select> --}}


                {{-- ESTE TIPO DE SELECCION FUNCIONA CON name --}}
                <x-jet-label for="escuela" value="{{ __('Escuela Profesional') }}" />

                <input type="radio" id="ingenieria-mecanica" name="escuela" value="{{ __('ingenieria-mecanica') }}">
                <label for="ingenieria-mecanica">INGENIERIA MECANICA</label><br>

                <input type="radio" id="ingenieria-electronica" name="escuela" value="{{ __('ingenieria-electronica') }}">
                <label for="ingenieria-electronica">INGENIERIA ELECTRONICA</label><br>

                <input type="radio" id="ingenieria-sistemas" name="escuela" value="{{ __('ingenieria-sistemas') }}">
                <label for="ingenieria-sistemas">INGENIERIA SISTEMAS</label>
            </div>

            <div class="mt-4">
                 
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('ya registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
