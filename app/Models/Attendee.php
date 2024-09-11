<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Attendee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];

    // Define the relationship between the Attendee and Preference models
    public function preferences():HasOne
    {
        return $this->hasOne(Preference::class);
    }
    // Define the relationship between the Attendee and Ticket models
    public function tickets():HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
