<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicleId)
    {
        //
        return view("pages.admin.addTrip", compact("vehicleId"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $trip = new Trip();
        $trip->vehicleId = $request->vehicleId;
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date = $request->startTime;
        $trip->startTime = $request->startTime;
        $trip->endTime = $request->endTime;
        $trip->odoMeterStart = $request->odoMeterStart;
        $trip->odoMeterEnd = $request->odoMeterEnd;
        $trip->amount = $request->amount;
        $trip->mileage = $request->mileage;
        $trip->journeyStart = $request->journeyStart;
        $trip->journeyEnd = $request->journeyEnd;
        $trip->createdBy =  Auth::id();
        $trip->save();
        return redirect()->route('admin.vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
