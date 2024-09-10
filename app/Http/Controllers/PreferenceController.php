<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    
    public function index()
    {
        $preferences = Preference::paginate(10);
        return response()->json($preferences);
    }
}
