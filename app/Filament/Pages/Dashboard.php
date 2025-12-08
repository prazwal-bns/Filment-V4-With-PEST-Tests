<?php

namespace App\Filament\Pages;

use Shreejan\CustomizeDashboardWidget\Traits\HasCustomizableDashboard;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    use HasCustomizableDashboard;

    protected string $view = 'customize-dashboard-widget::dashboard';

    public function mount(): void
    {
        
        // Initialize customizable dashboard functionality
        $this->mountHasCustomizableDashboard();
    }

    public function getTitle(): string|Htmlable
    {
        return '';
    }

    public static function getNavigationIcon(): string|Htmlable|null
    {
        return null; // Customize as needed
    }
}