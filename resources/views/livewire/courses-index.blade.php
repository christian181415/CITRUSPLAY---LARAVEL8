<div>
    <div class="mt-16 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8">
        <h1 style="background: #889ccf" class="p-2 text-center w-full rounded-2xl text-white">CURSOS INSTITUCIONALES</h1>
    </div>
    <div class="mt-5 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-8">
        @foreach ($t1 as $course)
            <article class="card" >
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>
                    <div class="flex">
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t2 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
        
        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
    </div>


    <div class="mt-10 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8">
        <h1 style="background: #085c74" class="p-2 text-center w-full rounded-2xl text-white">CURSOS POR AREA</h1>
    </div>
    <div class="mt-5 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($t1 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>
                    <div class="flex">
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t2 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
        
        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <p class="text-gray-500 text-sm mb-2">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
    </div>



    <div class="mt-10 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 gap-x-6 gap-y-8">
        <h1 style="background: black" class="p-2 text-center w-full rounded-2xl text-white">CURSOS DE APRENDIZAJE GENERAL</h1>
    </div>
    <div class="mt-5 max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-8 gap-x-6 gap-y-8">
        @foreach ($t1 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <div class="flex">
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t2 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
        
        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t1 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>
                    <div class="flex">
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t2 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
        
        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach

        @foreach ($t3 as $course)
            <article class="card">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{$course->title}}</h1>

                    <div class="flex">

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="btn-block mt-4 btn btn-primary">
                        Más información
                    </a>
                </div>
            </article>
        @endforeach
    </div>

    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-8">
        {{$t1->links()}}
    </div>
    <br>
</div>

