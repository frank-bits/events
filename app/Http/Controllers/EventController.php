<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Event;
// use App\Http\Requests\StoreEventRequest;
// use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
 
       $events = Event::where('status', 1)->paginate(10);

       return response()->json($events);
    }
}
