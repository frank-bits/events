<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    
    public function index()
    {
        $attendees = Attendee::paginate(10);
        return response()->json($attendees);
    }
}
