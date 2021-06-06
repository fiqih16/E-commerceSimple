<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Model\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nama;
    public $banner;
    public $active;

    public function submit()
    {
        $this->validate([
            'nama' => 'required|min:20',
            'banner' => ''
        ]);

        $category = Category::create([
            'nama' => $this->nama,
            'banner' => $this->banner,
            'slug' => Str::slug($this->nama),
            'status' => $this->active
        ]);

        $this->banner->store('public');
    }

    public function render()
    {
        return view('livewire.admin.category.create');
    }
}