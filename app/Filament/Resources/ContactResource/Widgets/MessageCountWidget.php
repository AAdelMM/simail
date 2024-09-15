<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MessageCountWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.message-count-widget';

    public function getMessageCount(): int
    {
        return Message::count();
    }
}
