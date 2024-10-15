<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrphanageResource\Pages;
use App\Filament\Resources\OrphanageResource\RelationManagers;
use App\Models\Orphanage;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrphanageResource extends Resource
{
    protected static ?string $model = Orphanage::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $label = "Orphelinat";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('ID Orphelinat')
                    ->statePath('data_identity')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->columnSpanFull(),
                        TextInput::make('email')
                            ->label('email')
                            ->email(),
                        TextInput::make('website')
                            ->label('Site web')
                            ->url(),
                        TextInput::make('arret_number')
                            ->label('Numero d\'arrete'),
                        RichEditor::make('history')
                            ->label('Histoire')
                            ->columnSpanFull(),
                        Textarea::make('mini_description')
                            ->label('Mini Description')
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('profile_images')
                        // TextInput::make('withonoh')
                        //     ->label(''),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('ID du promotteur')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Adresse de l\'orphelinat')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Informations financières')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Statistiques')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Education dans l\'orphelinat')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Besoins de l\'orphelinat')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('Projets de l\'orphelinat')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
                Section::make('ONOH et l\'orphelinat')
                    ->collapsible()
                    ->collapsed()
                    ->persistCollapsed()
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom'),
                TextColumn::make('visites')
                    ->label('Nb. visites'),
                TextColumn::make('city.name'),
                // TextColumn::make('dons_sum_amount')
                //     ->sum('dons', function (Builder $query) {
                //         $query->where('status', true);
                //     })
                //     ->label('Dons')
                //     ->money('XAF')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrphanages::route('/'),
            'create' => Pages\CreateOrphanage::route('/create'),
            'edit' => Pages\EditOrphanage::route('/{record}/edit'),
        ];
    }
}
