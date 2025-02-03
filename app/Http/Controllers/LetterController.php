<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    function assignLetterToNumber($numChain)
{
    if (strlen($numChain) != 8) {
        return "Introduce a valid number";
    }

    $mod = (int)$numChain % 23;
    $letter = Letter::find($mod + 1);
    return $numChain . $letter->letter;
}
}
