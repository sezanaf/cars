<?php

namespace App\Http\Controllers;

use App\Models\Cars;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars', compact('cars'));
    }

    public function show(Cars $car)
    {
        return view('car', compact('car'));
    }
}
