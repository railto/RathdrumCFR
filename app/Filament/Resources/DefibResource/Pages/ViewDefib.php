<?php

namespace App\Filament\Resources\DefibResource\Pages;

use App\Filament\Resources\DefibResource;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ViewDefib extends Page
{
    public static $resource = DefibResource::class;

    public static $view = 'filament.resources.defib-resource.pages.view-defib';

    public $record;

    public function mount($record)
    {
        $this->fillRecord($record);
    }

    protected function fillRecord($key)
    {
        $this->callHook('beforeFill');

        $this->record = $this->resolveRecord($key);

        $this->callHook('afterFill');
    }

    protected function resolveRecord($key)
    {
        $model = static::getModel();

        $record = (new $model())->resolveRouteBinding($key);

        if ($record === null) {
            throw (new ModelNotFoundException())->setModel($model, [$key]);
        }

        return $record;
    }
}
