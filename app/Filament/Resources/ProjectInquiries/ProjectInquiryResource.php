<?php

namespace App\Filament\Resources\ProjectInquiries;

use App\Filament\Resources\ProjectInquiries\Pages\CreateProjectInquiry;
use App\Filament\Resources\ProjectInquiries\Pages\EditProjectInquiry;
use App\Filament\Resources\ProjectInquiries\Pages\ListProjectInquiries;
use App\Filament\Resources\ProjectInquiries\Schemas\ProjectInquiryForm;
use App\Filament\Resources\ProjectInquiries\Tables\ProjectInquiriesTable;
use App\Models\ProjectInquiry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ProjectInquiryResource extends Resource
{
    protected static ?string $model = ProjectInquiry::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Project Inquiries';

    public static function form(Schema $schema): Schema
    {
        return ProjectInquiryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectInquiriesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjectInquiries::route('/'),
            'create' => CreateProjectInquiry::route('/create'),
            'edit' => EditProjectInquiry::route('/{record}/edit'),
        ];
    }
}