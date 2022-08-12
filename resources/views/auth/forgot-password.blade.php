<x-app-layout>
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <img src="http://citrusplay/img/CitrusPlay.png" alt="Logo_CitrusPlay" style="width: 80px">
            </x-slot>

            <div class="mb-4 text-sm text-gray-300">
                <div class="text-xl">
                    Recuperación de contraseña
                </div>
                <div>
                    Recupera tu contraseña, es muy facil, simplemente indica el correo electronico con el cual te registraste y recibiras un enlace para ingresar.
                </div>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Correo electronico') }}" style="color: white"/>
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Recupera tu contraseña') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>
