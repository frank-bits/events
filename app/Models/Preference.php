<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preference extends Model
{
    use HasFactory;

    protected $fillable = ['attendee_id', 'preferences'];

    public function attendee(): BelongsTo
    {
        return $this->belongsTo(Attendee::class);
    }
}
