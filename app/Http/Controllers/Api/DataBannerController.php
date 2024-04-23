<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DataBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d') . '%:%:%';
//        $dTwo = date('Y-m-d') . '%:5%:%';
//        $dThree = date('Y-m-d') . '%:0%:%';

        $data = Demand::select(DB::raw('drawn_time,fesco + gepco + hesco + iesco + kesc + lesco + mepco + pesco + qesco + sepco + tesco as totalLoad'))
            ->where('drawn_time', 'like', $date)
            ->get();
        return $data;
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $dOne = date('Y-m-d', time() - 60 * 60 * 24) . '%:00:%';
        $dTwo = date('Y-m-d', time() - 60 * 60 * 24) . '%:5%:%';
        $dThree = date('Y-m-d', time() - 60 * 60 * 24) . '%:0%:%';
        $data = Demand::select(DB::raw('drawn_time,fesco + gepco + hesco + iesco + kesc + lesco + mepco + pesco + qesco + sepco + tesco as totalLoad'))
            ->where('drawn_time', 'like', $dOne)
            ->orWhere('drawn_time', 'like', $dTwo)
            ->orWhere('drawn_time', 'like', $dThree)
            ->get();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
