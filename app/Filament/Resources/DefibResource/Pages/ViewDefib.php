<?php

namespace App\Filament\Resources\DefibResource\Pages;

use App\Filament\Resources\DefibResource;
use Filament\Resources\Forms\Form;
use Filament\Resources\Forms\HasForm;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class ViewDefib extends Page
{
    use HasForm;

    public static $resource = DefibResource::class;

    public static $view = 'filament.resources.defib-resource.pages.view-defib';

    public $record;

    public function mount($record): void
    {
        $this->fillRecord($record);
    }

    public static function getBreadcrumbs(): array
    {
        return [
            static::getResource()::generateUrl() => (string) Str::title(static::getResource()::getPluralLabel()),
        ];
    }

    protected function form(Form $form): Form
    {
        $resource = static::getResource()::form(
            $form->model(static::getModel()),
        );

        $schema = array_map(function ($row) {
            $row->disabled(true);
            return $row;
        }, $resource->getSchema());

        $resource->schema($schema);

        return $resource;
    }

    protected function fillRecord($key): void
    {
        $this->callHook('beforeFill');

        $this->record = $this->resolveRecord($key);

        $this->callHook('afterFill');
    }

    protected function resolveRecord($key): mixed
    {
        $model = static::getModel();

        $record = (new $model())->resolveRouteBinding($key);

        if ($record === null) {
            throw (new ModelNotFoundException())->setModel($model, [$key]);
        }

        return $record;
    }
}
