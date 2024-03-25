<?php

namespace App\Livewire\Tables;

use App\Models\generator;
use Livewire\Component;
use Livewire\WithPagination;

class generatorTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = '';

    public $sortField = 'reference';

    public $sortAsc = false;

    public function sortBy($field): void
    {
        if($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;

        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.tables.generator-table', [
            'generators' => generator::where("user_id",auth()->id())
                ->with(['generatorDetails', 'coderumed'])
                ->search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate()
        ]);
    }
}