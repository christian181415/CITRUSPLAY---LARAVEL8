<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;

use Livewire\WithPagination;

class CoursesAll extends Component
{
    use WithPagination;

    public $category_id;


    public function render()
    {
        $categories = Category::all();

        $courses = Course::where('status', 3)
                        ->category($this->category_id)
                        ->latest('id')
                        ->paginate(8);

        return view('livewire.courses-all', compact('courses', 'categories'));
    }

    public function resetFilters()
    {
        $this->reset(['category_id']);
    }
}
