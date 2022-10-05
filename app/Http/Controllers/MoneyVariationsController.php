<?php

namespace App\Http\Controllers;

use App\Models\MoneyVariations;
use Illuminate\Http\Request;

class MoneyVariationsController extends Controller
{
    function index()
    {
        return MoneyVariations::all();
    }
}
