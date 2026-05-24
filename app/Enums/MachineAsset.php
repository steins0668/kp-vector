<?php

namespace App\Enums;

enum MachineAsset: string
{
    // Line 1 Hardware
    case SLITTER_SLOTTER = 'Slitter/Slotter Machine';
    case EQOS_FLEXO = 'EQOS Flexographic Printing Machine';
    case ETERNA_DIECUT = 'ETERNA Diecut Machine';
    case SEMI_AUTO_GLUE = 'Semi-Auto Gluing Machine';

    // Line 2 Hardware
    case SLICING_CUTTER = 'Slicing Cutting Machine';
    case HIGHJET_DIGITAL = 'HIGHJET2500D Digital Printing Machine';
    case LAMINATION_MCH = 'Lamination Machine';
    case ROBOT_PAD_ASSY = 'Robot Pad Block Assy Machine';
}
