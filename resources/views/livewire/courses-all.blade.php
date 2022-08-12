<div>
    <div class="bg-black py-4 mb-8">
        <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 flex ">
            {{-- Navbar Search --}}
                @livewire('search')
            {{-- Navbar Search --}}
        </div>
    </div>


    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
        @can('enrolled', $course)
            <a class="card flex flex-col" href="{{ route('courses.status', $course) }}">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                <div class="card-body flex-1 flex flex-col">
                    <h1 class="card-title" style="color: white">{{Str::limit($course->title, 20)}}</h1>
                    <p class="text-gray-500 text-sm mb-2 mt-auto">Autor: {{$course->teacher->name}}</p>

                    <div class="flex">
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                    </div>
                </div>
            </a>
        @else
            <form action="{{ route('courses.enrolled', $course) }}" method="POST">
                @csrf
                <button>
                    <a class="card flex flex-col">
                        <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                        <div class="card-body flex-1 flex flex-col">
                            <h1 class="card-title" style="color: white">{{Str::limit($course->title, 20)}}</h1>
                            <p class="text-gray-500 text-sm mb-2 mt-auto">Autor: {{$course->teacher->name}}</p>
        
                            <div class="flex">
                                <p class="text-sm text-gray-500 ml-auto">
                                    <i class="fas fa-users"></i>
                                    ({{$course->students_count}})
                                </p>
                            </div>
                        </div>
                    </a>
                </button>
            </form>
        @endcan  


        @endforeach
    </div>

    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-8">
        {{$courses->links()}}
    </div>

    <br>
</div>

