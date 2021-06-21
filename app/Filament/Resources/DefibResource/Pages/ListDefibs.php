<?php

namespace App\Filament\Resources\DefibResource\Pages;

use App\Filament\Resources\DefibResource;
use Filament\Filament;
use Filament\Resources\Pages\ListRecords;

class ListDefibs extends ListRecords
{
    public static $resource = DefibResource::class;

    public static $editRecordActionLabel = 'View';

    public $recordRoute = 'view';

    public function canDelete(): bool
    {
        return false;
    }
}
