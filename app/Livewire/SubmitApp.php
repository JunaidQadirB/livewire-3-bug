<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubmitApp extends Component
{
    use WithFileUploads;

    #[Rule('required|image|mimes:png|max:1024|dimensions:width=512,height=512')]
    public $icon;

    public function submit()
    {
        $data = $this->validate();

        dd($data);
        // Persist the post.
    }

    public function render()
    {
        return view('livewire.submit-app');
    }
}
