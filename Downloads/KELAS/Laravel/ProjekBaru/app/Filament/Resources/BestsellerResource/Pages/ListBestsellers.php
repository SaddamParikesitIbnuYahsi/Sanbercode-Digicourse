<?php

namespace App\Filament\Resources\BestsellerResource\Pages;

use App\Filament\Resources\BestsellerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBestsellers extends ListRecords
{
    protected static string $resource = BestsellerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
