<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\Course;
use App\Models\User;
use Livewire\WithPagination;

class Courses extends Component
{
    use WithPagination;

    public $search;


    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
                        ->where('user_id', auth()->user()->id)
                        ->where('status', '3')
                        ->latest('id')
                        ->paginate(8);

        // $users = User::all();
        // $courses = Course::all();

        return view('livewire.profile.courses', compact('courses'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }

    public function enrolled(Course $course)
    {
        $course->users();
        return redirect()->route('courses.status', $course);
    }
}