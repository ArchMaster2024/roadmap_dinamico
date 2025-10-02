<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Step extends Model
{
    /** @use HasFactory<\Database\Factories\StepFactory> */
    use HasFactory;

    /**
     * @var array
     */
    protected $with = ['tasks'];

    /**
     * @var array
     */
    protected $fillable = [
        'roadmap_id',
    ];

    /**
     * @var array
     */
    protected $guarded = [
        'steps',
    ];

    /**
     * Get the roadmap that owns the step.
     *
     * @return BelongsTo
     */
    public function roadmap(): BelongsTo
    {
        return $this->belongsTo(Roadmap::class);
    }

    /**
     * Get the tasks associated with the step.
     *
     * @return HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
