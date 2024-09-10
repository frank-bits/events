<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;
    protected $fillable = ['name','email'];

    public function preferences()
    {
        return $this->hasMany(Preference::class);
    }

  public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
