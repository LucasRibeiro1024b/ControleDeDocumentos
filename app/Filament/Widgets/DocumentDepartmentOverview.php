<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Document;
use App\Models\People;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DocumentDepartmentOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Documentos', Document::count()),
            Stat::make('Departamentos', Department::count()),
            Stat::make('Responsáveis', People::count())
        ];
    }
}
