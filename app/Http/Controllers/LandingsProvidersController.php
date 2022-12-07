<?php

namespace App\Http\Controllers;

use App\Models\LandingProvider;
use Illuminate\Http\Request;
use App\Auxs\Response;
use App\Auxs\ErrorMessage;
use Exception;

class LandingsProvidersController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandingProvider  $landingProvider
     * @return \Illuminate\Http\Response
     */
    public function show(LandingProvider $landingProvider)
    {
        try {
            $landingProvider->fullLanding;
            return Response::successful(['landing' => $landingProvider]);
        } catch (Exception $e) {
            $message = new ErrorMessage($e->getMessage(), 'NOT_OBTAINED');
            return Response::error($message);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandingProvider  $landingProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingProvider $landingProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandingProvider  $landingProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingProvider $landingProvider)
    {
        //
    }
}
