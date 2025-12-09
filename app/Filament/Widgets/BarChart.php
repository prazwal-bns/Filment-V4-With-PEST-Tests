<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BarChart extends ChartWidget
{
    protected ?string $heading = 'Bar Chart';

    protected function getData(): array
    {
        return [
        'datasets' => [
            [
                'label' => 'Pie Data',
                'data' => [12, 19, 3, 5, 2],
                'backgroundColor' => [
                    '#FF6384',
                    '#36A2EB',
                    '#FFCE56',
                    '#4BC0C0',
                    '#9966FF',
                ],
            ],
        ],
        'labels' => ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
