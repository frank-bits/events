<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function index()
    {
        $tickets = Ticket::paginate(10);
        return response()->json($tickets);
    }
}
