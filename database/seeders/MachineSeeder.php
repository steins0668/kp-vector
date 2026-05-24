<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Machine;
use App\Enums\StationType;
use App\Enums\MachineAsset;

class MachineSeeder extends Seeder
{
    public function run(): void
    {
        // Wipe old records to ensure safe, repeatable seed runs
        Machine::truncate();

        // --- LINE 1: HIGH-VOLUME CORRUGATED BOX LINE ---
        Machine::create([
            'name' => MachineAsset::SLITTER_SLOTTER->value,
            'code' => 'L1-SLIT',
            'line_number' => 1,
            'station_type' => StationType::CUTTING,
            'throughput_rate_per_min' => 150,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::EQOS_FLEXO->value,
            'code' => 'L1-FLEXO',
            'line_number' => 1,
            'station_type' => StationType::PRINTING,
            'throughput_rate_per_min' => 200,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::ETERNA_DIECUT->value,
            'code' => 'L1-ETERNA',
            'line_number' => 1,
            'station_type' => StationType::DIECUTTING,
            'throughput_rate_per_min' => 100,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::SEMI_AUTO_GLUE->value,
            'code' => 'L1-GLUE',
            'line_number' => 1,
            'station_type' => StationType::GLUING,
            'throughput_rate_per_min' => 60,
            'status' => 'operational',
        ]);

        // --- LINE 2: DIGITAL & AUTOMATED CUSHION ASSEMBLY LINE ---
        Machine::create([
            'name' => MachineAsset::SLICING_CUTTER->value,
            'code' => 'L2-SLICE',
            'line_number' => 2,
            'station_type' => StationType::CUTTING,
            'throughput_rate_per_min' => 80,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::HIGHJET_DIGITAL->value,
            'code' => 'L2-HIGHJET',
            'line_number' => 2,
            'station_type' => StationType::PRINTING,
            'throughput_rate_per_min' => 40,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::LAMINATION_MCH->value,
            'code' => 'L2-LAM',
            'line_number' => 2,
            'station_type' => StationType::LAMINATION,
            'throughput_rate_per_min' => 30,
            'status' => 'operational',
        ]);

        Machine::create([
            'name' => MachineAsset::ROBOT_PAD_ASSY->value,
            'code' => 'L2-ROBOT',
            'line_number' => 2,
            'station_type' => StationType::ASSEMBLY,
            'throughput_rate_per_min' => 25,
            'status' => 'operational',
        ]);
    }
}
