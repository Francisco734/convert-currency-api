<?php

namespace App\Http\Controllers;

use App\Models\Historical;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HistoricalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $historical = Historical::all()
                ->groupBy('transaction_id');
                return response()->json([
                    'success' => true,
                    'historical' => $historical
                ],  Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
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
        try {
            DB::beginTransaction();
            $historical = Historical::create($request->all());
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Operation Successfully Registered'
            ],  Response::HTTP_OK);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(historical $historical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(historical $historical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, historical $historical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(historical $historical)
    {
        //
    }
}
