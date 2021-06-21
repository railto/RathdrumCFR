<?php

namespace App\Filament\Resources\DefibResource\Pages;

use App\Filament\Resources\DefibResource;
use Filament\Resources\Pages\Page;

class ViewDefib extends Page
{
    public static $resource = DefibResource::class;

    public static $view = 'filament.resources.defib-resource.pages.view-defib';
}
