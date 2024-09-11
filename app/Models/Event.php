<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Define the relationship between the Event and Ticket models
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
