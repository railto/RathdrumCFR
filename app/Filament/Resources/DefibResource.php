<?php

namespace App\Filament\Resources;

use Filament\Resources\Forms\Components\DateTimePicker;
use Filament\Resources\Resource;
use Filament\Resources\Forms\Form;
use Filament\Resources\Tables\Table;
use Filament\Resources\Tables\Columns\Text;
use App\Filament\Resources\DefibResource\Pages;
use Filament\Resources\Forms\Components\TextInput;

class DefibResource extends Resource
{
    public static $icon = 'heroicon-o-lightning-bolt';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                TextInput::make('location')->required(),
                TextInput::make('model')->required(),
                TextInput::make('serial'),
                TextInput::make('owner')->default('Rathdrum CFR'),
                TextInput::make('last_inspected_by'),
                DateTimePicker::make('last_inspected_at'),
                DateTimePicker::make('pads_expire_at'),
                DateTimePicker::make('last_serviced_at'),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Text::make('location'),
                Text::make('last_inspected_by'),
                Text::make('last_inspected_at')->dateTime(),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListDefibs::routeTo('/', 'index'),
            Pages\CreateDefib::routeTo('/create', 'create'),
            Pages\EditDefib::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
