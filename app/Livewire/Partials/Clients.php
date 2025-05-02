<?php

namespace App\Livewire\Partials;

use App\Models\Partner;
use Livewire\Component;

class Clients extends Component
{
    public function render()
    {
        $clients = Partner::all();
        return view('livewire.partials.clients', [
            'clients' => $clients
        ]);
    }
}
