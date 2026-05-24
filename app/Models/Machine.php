<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Machine extends Model
{
    use HasUuids;

    protected $fillable = ['name', 'code', 'line_number', 'station_type', 'throughput_rate_per_min', 'status'];

    /**
     * Get all scheduled items allocated to this machine, ordered by sequence.
     */
    public function schedules(): HasMany
    {
        return $this->hasMany(QueueSchedule::class)->orderBy('queue_order');
    }
}
