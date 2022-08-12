<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoursesRegistered extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $course, $search;

    public function mount(Course $course)
    {
        $this->course = $course;

        $this->authorize('dicatated', $course);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $registered = $this->course->students()
                    ->where('name', 'LIKE', '%' . $this->search . '%')
                    ->paginate(3);
        $roles = Role::all();

        return view('livewire.instructor.courses-registered', compact('registered', 'roles'))->layout('layouts.instructor', ['course' => $this->course]);
    }
}
