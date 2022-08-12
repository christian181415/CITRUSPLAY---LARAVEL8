<div>

    <h1 class="text-2xl font-bold mb-4 text-gray-300">PERSONAS REGISTRADAS</h1>
    <hr class="mt-2 mb-6">

    <x-table-responsive>
        <div class="px-6 py-4">
            <input wire:model="search" class="form-input w-full flex-1 shadow-sm mt-1 block py-2 px-3 border border-gray-300 bg-white rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
            placeholder="Ingrese el nombre del empleado">
        </div>

        @if ($registered->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rol
                        </th> --}}
                    </tr>
                </thead>

                <tbody class=" divide-y divide-gray-300">
                    @foreach ($registered as $register)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover object-center" src="{{$register->profile_photo_url}}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-300">
                                            {{$register->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-300">{{$register->email}}</div>
                            </td>

                            {{-- <td>
                                {!! Form::model($register) !!}
                                    @foreach ($roles as $role)
                                        <div>
                                            <label>
                                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                                {{$role->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                {!! Form::close() !!}
                            </td> --}}
                        </tr>
                    @endforeach
                <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{$registered->links()}}
            </div>
            
        @else
            <div class="ml-8">
                No hay ninguna conicidencia o registro.
            </div>
        @endif
    </x-table-responsive>
</div>
