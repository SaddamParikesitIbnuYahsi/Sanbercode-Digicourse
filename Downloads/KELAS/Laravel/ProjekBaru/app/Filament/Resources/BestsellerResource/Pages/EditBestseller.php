<?php

namespace App\Filament\Resources\BestsellerResource\Pages;

use App\Filament\Resources\BestsellerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBestseller extends EditRecord
{
    protected static string $resource = BestsellerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
