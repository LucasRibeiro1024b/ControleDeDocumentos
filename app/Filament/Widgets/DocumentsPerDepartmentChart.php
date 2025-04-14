<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use Filament\Widgets\ChartWidget;

class DocumentsPerDepartmentChart extends ChartWidget
{
    protected static ?string $heading = 'Documentos por Departamento';

    protected function getData(): array
    {
        $departments = Department::withCount([
            'documents' => function($query)
            {
                $query->whereBetween('created_at', [now()->startOfYear(), now()]);
            }
        ])->get();

        return [
            'datasets' => [
                [
                    'label' => 'N° Documentos',
                    'data' => $departments->pluck('documents_count'),
                ]
            ],
            'labels' => $departments->pluck('titulo'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
