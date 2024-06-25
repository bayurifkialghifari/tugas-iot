<?php

namespace App\Livewire;

use App\Models\LogKebocoran;
use Livewire\Component;

class Dashboard extends Component
{
    public $title = 'Dashboard';
    public $kebocoranHariIni = 0;
    public $kebocoranMingguIni = 0;
    public $kebocoranBulanIni = 0;

    public function mount()
    {
        $this->kebocoranHariIni = LogKebocoran::today()->count();
        $this->kebocoranMingguIni = LogKebocoran::last7Days()->count();
        $this->kebocoranBulanIni = LogKebocoran::last30Days()->count();
    }

    public function render()
    {
        return view('livewire.dashboard')->title($this->title);
    }
}
