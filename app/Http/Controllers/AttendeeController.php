<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{

    public function index(): \Illuminate\Http\JsonResponse
    {
        $attendees = Attendee::paginate(10);
        return response()->json($attendees);
    }
}
