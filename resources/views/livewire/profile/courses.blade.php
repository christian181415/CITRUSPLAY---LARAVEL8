<div class="container py-8">
    <!-- This example requires Tailwind CSS v2.0+ -->
    
    <x-table-responsive>

        @if ($courses)
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cursos
                        </th>

                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                            Cursos Registrados
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($courses as $course)
                    {{-- @can('enrolled', $course) --}}
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @isset($course->image)
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
                                        @else
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src="http://citrusplay/img/CitrusPlay.png" alt="">
                                        @endisset
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$course->title}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$course->category->name}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- <div class="flex items-center">
                                    <a class="btn btn-success btn-block mt-4" href="{{ route('courses.status', $course) }}">Continuar con el curso</a>
                                </div> --}}
                                @can('enrolled', $course)
                                    <a class="btn btn-success btn-block mt-4" href="{{--{{ route('courses.status', $course) }}--}}">Continuar con el curso</a>
                                @else
                                    {{-- <form action="{{ route('courses.enrolled', $course) }}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        <button class="btn btn-danger btn-block mt-4" type="submit">Llevar este curso</button>
                                    {{-- </form> --}}
                                @endcan
                            </td>
                        </tr>
                        {{-- @endcan --}}
                    @endforeach
                <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{$courses->links()}}
            </div>
            
        @else
            <div>
                No hay ninguna conicidencia.
            </div>
        @endif
    </x-table-responsive>
</div>
