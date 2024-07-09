<?php

namespace Processton\ProcesstonTabs;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ProcesstonTabs
{
    public static function generateTabs($tabs = [], $attachments = [], $width = false){
        return [
            'type' => 'tabs',
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : ProcesstonInteraction::width(12, 12, 12)->toArray(),
            'tabs' => $tabs,
        ];
    }

    public static function generateTab($title, $rows = [], $width = false)
    {
        return [
            'title' => $title,
            'rows' => [
                $rows
            ],
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : ProcesstonInteraction::width(12, 12, 12)->toArray(),
        ];
    }
}
