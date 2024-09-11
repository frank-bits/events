<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    // Display a listing of the resource.
    public function index(): \Illuminate\Http\JsonResponse
    {
        $preferences = Preference::paginate(10);
        return response()->json($preferences);
    }
}
