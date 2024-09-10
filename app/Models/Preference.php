<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    protected $fillable = ['attendee_id','preferences'];

    public function attendee()
    {
        return $this->belongsTo(Attendee::class);
    }
}
