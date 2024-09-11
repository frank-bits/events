<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    // Display a listing of the resource.
    public function index(): \Illuminate\Http\JsonResponse
    {
        $tickets = Ticket::paginate(10);
        return response()->json($tickets);
    }
}
