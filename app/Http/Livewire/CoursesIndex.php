<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;

use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;

    public $category_id;


    public function render()
    {
        $categories = Category::all();

        $t1 = Course::where('status', 3)
                        ->where('title', 'Inducción', 'Induccion')
                        ->category($this->category_id)
                        ->latest('id')
                        ->paginate(8);

        $t2 = Course::where('status', 3)
                        ->where('title', 'Código de vestimenta')
                        ->category($this->category_id)
                        ->latest('id')
                        ->paginate(8);

        $t3 = Course::where('status', 3)
                        ->where('title', 'Código de ética y conducta')
                        ->category($this->category_id)
                        ->latest('id')
                        ->paginate(8);

        return view('livewire.courses-index', compact('t1', 't2', 't3', 'categories'));
    }

    public function resetFilters()
    {
        $this->reset(['category_id']);
    }
}
