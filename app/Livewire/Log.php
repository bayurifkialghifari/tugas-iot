<?php

namespace App\Livewire;

use App\Models\LogKebocoran;
use BaseComponent;

class Log extends BaseComponent
{
    public $title = 'Log Kebocoran';

    public $searchBy = [
            [
                'name' => 'PPM',
                'field' => 'ppm',
            ],
            [
                'name' => 'Tanggal',
                'field' => 'created_at',
            ],
        ],
        $isUpdate = false,
        $search = '',
        $paginate = 10,
        $orderBy = 'created_at',
        $order = 'asc';

    public function render()
    {
        $get = $this->getDataWithFilter(new LogKebocoran(), [
            'orderBy' => $this->orderBy,
            'order' => $this->order,
            'paginate' => $this->paginate,
            's' => $this->search,
        ], $this->searchBy);

        if ($this->search != null) {
            $this->resetPage();
        }

        return view('livewire.log', compact('get'))->title($this->title);
    }
}
