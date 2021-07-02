<?php

namespace App\Http\Livewire;

use App\Models\Defib;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class DefibMap extends Component
{
    public Collection $locations;
    public string $googleMapsAPIKey;

    public function mount(): void
    {
        $this->googleMapsAPIKey = config('services.google.maps.api_key');
        $this->locations = Defib::public()->map(
            function ($defib) {
                $coordinates = explode(',', $defib->coordinates);
                return ['lat' => $coordinates[0], 'lng' => $coordinates[1], 'name' => $defib->name];
            }
        );
    }

    public function render(): View
    {
        return view('livewire.defib-map');
    }
}
