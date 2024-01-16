<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'start',
        'end',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scheduledNotifications(): MorphMany
    {
        return $this->morphMany(ScheduledNotification::class, 'notifiable');
    }
}
