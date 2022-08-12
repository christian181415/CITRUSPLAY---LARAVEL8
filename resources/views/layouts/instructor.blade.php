<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') CitrusPlay</title>
        <!-- core CSS -->
        <link rel="shortcut icon" href="http://citrusplay/img/CitrusPlay.png">
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen" style="background: #000">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">
                <aside>
                    <h1 class="font-bold text-lg mb-4">Edición del curso</h1>
                    <ul class="text-sm text-gray-200 mb-4">
                        <li class="leading-7 mb-1 border-l-4 hover:text-gray-300 @routeIs('instructor.courses.edit', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.edit', $course)}}">Informacion del video</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 hover:text-gray-300  @routeIs('instructor.courses.curriculum', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.curriculum', $course)}}">Partes del video</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 hover:text-gray-300 @routeIs('instructor.courses.goals', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.goals', $course)}}">Etiquetas del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 hover:text-gray-300 @routeIs('instructor.courses.registered', $course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.registered', $course)}}">Registrados</a>
                        </li>
                    </ul>

                    @switch($course->status)
                        @case(1)
                            <form action="{{route('instructor.courses.status', $course)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Solicitar revisión</button>
                            </form>
                            @break
                        @case(2)
                            <button type="submit" class="btn btn-primary">Curso en revisión</button>
                            @break
                        @case(3)
                            <button type="submit" class="btn btn-green cursor-default">Curso publicado</button>
                            @break
                        @default
                            
                    @endswitch

                    
                </aside>
        
                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                        {{$slot}}
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

            @isset($js)
                {{ $js }}
            @endisset
    </body>
</html>
