<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class CreateIdea extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer',
        'description' => 'required|min:4'
    ];

    public function createIdea()
    {
        $this->validate();

        if(auth()->check()) {
            Idea::create([
                'user_id' => auth()->id(),
                'category_id' => $this->category,
                'status_id' => 1,
                'title' => $this->title,
                'description' => $this->description
            ]);

            session()->flash('success_message', 'Idea was added OK');

            $this->reset();

            return redirect()->route('ideas.index');
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    public function render()
    {
        return view('livewire.create-idea', [
            'categories' => Category::all()
        ]);
    }
}
