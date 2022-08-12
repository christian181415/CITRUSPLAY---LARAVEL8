<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer hover:text-gray-400">Descripción del video</h1>
            </header>
            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="destroy" type="button" class="btn btn-danger text-sm">Eliminar</button>
                            <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                        </div>
                    </form>

                @else
                    <div>
                        <textarea wire:model="name" class="form-input w-full" placeholder="Agrega una descripción"></textarea>
                        @error('name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex justify-end">
                            <button wire:click="store" class="btn btn-primary text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
