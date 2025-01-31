<?php

namespace App\Http\Controllers\Api;

use App\Models\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LetterController extends Controller
{
    public function getLetter($dni) 
    {
        if (!is_numeric($dni) || strlen($dni) !== 8) {
        return response()->json(['error' => 'DNI incorrecto'], 400);
        }

        $position = $dni % 23;
        $letter = Letter::where('position', $position)->first();
        return response()->json(['dni' => $dni, 'letter' => $letter->letter]);
    
    }
}
