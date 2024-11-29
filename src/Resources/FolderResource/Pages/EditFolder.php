<?php

namespace TomatoPHP\FilamentMediaManager\Resources\FolderResource\Pages;

use App\Filament\Resources\BaseClasses\EditRecord;
use TomatoPHP\FilamentMediaManager\Resources\FolderResource;
use Filament\Actions;

class EditFolder extends EditRecord
{
    protected static string $resource = FolderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->icon('heroicon-o-trash'),
        ];
    }
}
