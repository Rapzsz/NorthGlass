<?php

namespace App\Filament\Resources\ProjectInquiries\Pages;

use App\Filament\Resources\ProjectInquiries\ProjectInquiryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProjectInquiry extends EditRecord
{
    protected static string $resource = ProjectInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
