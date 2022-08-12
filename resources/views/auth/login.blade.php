<x-app-layout>
        <x-jet-authentication-card >
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <img src="http://citrusplay/img/CitrusPlay.png" alt="Logo_CitrusPlay" style="width: 80px">
            </x-slot>
        
            <x-jet-validation-errors class="mb-4" />
        
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
            
                <div>
                    <x-jet-label for="usuario" value="{{ __('Usuario') }}" style="color:white"/>
                    <x-jet-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" :value="old('usuario')" required autofocus />
                </div>
            
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Contraseña') }}" style="color:white"/>
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
            
                <div class="flex items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-300" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña? Recupérala aquí') }}
                        </a>
                    @endif
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-jet-button >
                        {{ __('Iniciar sesión') }}
                    </x-jet-button>
                </div>

                <div class="flex items-center justify-center mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-300" href="{{ route('register') }}">
                            {{ __('Necesitas una cuenta? Regístrate aquí') }}
                        </a>
                </div>
            </form>
        </x-jet-authentication-card>
</x-app-layout>
