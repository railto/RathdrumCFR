<?php

namespace App\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Forms\Form;
use Filament\Resources\Tables\Table;
use Filament\Resources\Tables\Columns\Text;
use App\Filament\Resources\DefibResource\Pages;
use Filament\Resources\Forms\Components\TextInput;
use Filament\Resources\Forms\Components\DatePicker;
use Filament\Resources\Forms\Components\DateTimePicker;

class DefibResource extends Resource
{
    public static $icon = 'heroicon-o-lightning-bolt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    TextInput::make('name')->required(),
                    TextInput::make('location')->required(),
                    TextInput::make('coordinates'),
                    TextInput::make('model')->required(),
                    TextInput::make('serial'),
                    TextInput::make('owner')->default('Rathdrum CFR'),
                    TextInput::make('last_inspected_by'),
                    DatePicker::make('last_inspected_at')->displayFormat('l j F Y')->maxDate('today')->label('Last inspected on'),
                    DatePicker::make('last_serviced_at')->displayFormat('l j F Y')->maxDate('today')->label(
                        'Last serviced on'
                    ),
                    DatePicker::make('pads_expire_at')->displayFormat('l j F Y')->label('Pads expire on'),
                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                    Text::make('name'),
                    Text::make('location'),
                    Text::make('last_inspected_by'),
                    Text::make('last_inspected_at')->dateTime('l j F Y')->label('Last Inspected On'),
                    Text::make('pads_expire_at')->date('l j F Y')->label('Pads Expire On'),
                ]
            );
    }

    public static function relations(): array
    {
        return [
            //
        ];
    }

    public static function routes(): array
    {
        return [
            Pages\ListDefibs::routeTo('/', 'index'),
            Pages\CreateDefib::routeTo('/create', 'create'),
            Pages\EditDefib::routeTo('/{record}/edit', 'edit'),
            Pages\ViewDefib::routeTo('/{record}', 'view'),
        ];
    }
}
