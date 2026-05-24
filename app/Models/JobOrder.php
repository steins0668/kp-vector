<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobOrder extends Model
{
    use HasUuids;

    protected $fillable = [
        'jo_number',
        'client_tier',
        'total_units_required',
        'setup_overhead_minutes',
        'routing_sequence',
    ];

    /**
     * Automatically cast the JSONB field into a clean, readable array.
     */
    protected $casts = [
        'routing_sequence' => 'array',
    ];

    /**
     * Get all active capacity allocations for this job order across the factory floor.
     */
    public function schedules(): HasMany
    {
        return $this->hasMany(QueueSchedule::class);
    }
}
