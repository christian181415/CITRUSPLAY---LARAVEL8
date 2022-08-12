<div class="card" x-data="{open: false}">
    <div class="card-body ">
        <header>
            <h1 x-on:click="open = !open" class="cursor-pointer hover:text-gray-400">Recursos del video</h1>
        </header>

        <div x-show="open">
            <hr class="my-2">
            @if ($lesson->resource)
                <div class="flex justify-between items-center">
                    <p>
                        <i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>
                        {{$lesson->resource->url}}
                    </p>
                    <i wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
                </div>
            @else
                <form wire:submit.prevent="save">
                    <div class="flex items-center">
                        <input wire:model="file" type="file" class="form-input flex-1 mt-1 w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <button type="submit" class="btn btn-primary text-sm ml-2">Guardar</button>
                    </div>

                    <div class="text-blue-500 font-bold mt-1 animate-bounce" wire:loading wire:target="file">
                        Cargando...
                    </div>
                    @error('file')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </form>
            @endif
        </div>
    </div>
</div>
