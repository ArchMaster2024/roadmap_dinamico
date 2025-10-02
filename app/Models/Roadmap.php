<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Roadmap extends Model
{
    /** @use HasFactory<\Database\Factories\RoadmapFactory> */
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];

    /**
     * Get the user that owns the roadmap.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the steps associated with the roadmap.
     *
     * @return HasOne
     */
    public function step(): HasOne
    {
        return $this->hasOne(Step::class);
    }
}
