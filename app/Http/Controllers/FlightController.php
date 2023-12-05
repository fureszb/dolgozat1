<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
   
    public function travels() {
        return $this->hasMany(Travel::class, 'flight_id');
    }

    public function toroltJarat() {
        $tomorrowDate = new DateTime('tomorrow');
        $tomorrow = $tomorrowDate->format('Ymd');
    
        Flight::where('date', $tomorrow)->delete();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
    public function inditottUt($airline) {
        $user = Auth::user();
    
        $flights = Flight::select('flights.*')
            ->join('travel', 'travel.flight_id', '=', 'flights.flight_id')
            ->where('travel.user_id', $user->id)
            ->where('flights.airline_id', $airline)
            ->get();
    
        return $flights;
    }
   

   
        
}
