<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\coderumed;
use Illuminate\Support\Collection;

class SearchCoderumed extends Component
{
    public $query;
    public $search_results;
    public $how_many;

    public function mount()
    {
        $this->query = '';
        $this->how_many = 5;
        $this->search_results = Collection::empty();
    }

    public function render()
    {
        return view('livewire.search-coderumed');
    }

    public function updatedQuery()
    {
        $this->search_results = coderumed::where("user_id",auth()->id())->where('name_coderumed', 'like', '%' . $this->query . '%')
            ->orWhere('code_coderumed', 'like', '%' . $this->query . '%')
            ->take($this->how_many)->get();
    }

    public function loadMore()
    {
        $this->how_many += 6;
        $this->updatedQuery();
    }

    public function resetQuery()
    {
        $this->query = '';
        $this->how_many = 5;
        $this->search_results = Collection::empty();
    }

    public function SelectCoderumed($coderumed)
    {
        $this->dispatch('SelectCoderumed', $coderumed);
    }
}