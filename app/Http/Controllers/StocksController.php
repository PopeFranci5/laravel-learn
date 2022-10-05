<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    function index()
    {
        return Stocks::all();
    }
}
