<?php

namespace App\Filament\Resources\ProjectInquiries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectInquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('phone')
                    ->label('Telepon')
                    ->required(),

                TextInput::make('company')
                    ->label('Perusahaan'),

                Select::make('service_id')
                    ->label('Service')
                    ->relationship('service', 'title')
                    ->searchable()
                    ->preload(),

                TextInput::make('budget')
                    ->label('Budget'),

                Textarea::make('message')
                    ->label('Pesan')
                    ->required()
                    ->columnSpanFull(),

                Select::make('status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'completed' => 'Selesai',
                    ])
                    ->default('new')
                    ->required(),
            ]);
    }
}