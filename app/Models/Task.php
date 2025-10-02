<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'status',
        'progress',
        'step_id',
    ];

    /**
     * Get the step that owns the task.
     *
     * @return BelongsTo
     */
    public function step(): BelongsTo
    {
        return $this->belongsTo(Step::class);
    }

    /**
     * Get the subtasks associated with the task.
     *
     * @return HasMany
     */
    public function subtasks(): HasMany
    {
        return $this->hasMany(Subtask::class);
    }
}
