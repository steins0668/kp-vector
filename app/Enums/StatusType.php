<?php

namespace App\Enums;

enum StationType: string
{
    case CUTTING = 'cutting';
    case PRINTING = 'printing';
    case DIECUTTING = 'diecutting';
    case GLUING = 'gluing';
    case LAMINATION = 'lamination';
    case ASSEMBLY = 'assembly';

    /**
     * Optional helper to get a clean, human-readable label for the UI
     */
    public function label(): string
    {
        return match ($this) {
            self::CUTTING => 'Precision Cutting',
            self::PRINTING => 'High-Speed Printing',
            self::DIECUTTING => 'Structural Die-Cutting',
            self::GLUING => 'Flap Gluing & Sealing',
            self::LAMINATION => 'Sheet Lamination',
            self::ASSEMBLY => 'Robotic Pad Assembly',
        };
    }
}
