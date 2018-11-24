<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishing_reel;


class ReelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reel = Fishing_reel::all()->toArray();
        return view('work2/ad_reel',compact('reel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_reel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['reel_name' => 'required',
                                  'reel_size' => 'required',
                                  'reel_color' => 'required',
                                  'reel_type' => 'required',
                                  'reel_brand' => 'required',
                                  'reel_price' => 'required'        
        ]);
        $reel = new Fishing_reel(['reel_name' => $request->get('reel_name'),
                                  'reel_size' => $request->get('reel_size'),
                                  'reel_color' => $request->get('reel_color'),
                                  'reel_type' => $request->get('reel_type'),
                                  'reel_brand' => $request->get('reel_brand'),
                                  'reel_price' => $request->get('reel_price')
        ]);
        $reel->save();
        return redirect()->route('reel.create');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reel = Fishing_Reel::find($id);
        return view('work/edit_reel',compact('reel','id'));
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
        $this->validate($request,['reel_name' => 'required',
                                  'reel_size' => 'required',
                                  'reel_color' => 'required',
                                  'reel_type' => 'required',
                                  'reel_brand' => 'required',
                                  'reel_price' => 'required'        
        ]);
        $reel = Fishing_Reel::find($id);
        $reel->reel_name = $request->input('reel_name');
        $reel->reel_size = $request->input('reel_size');
        $reel->reel_color = $request->input('reel_color');
        $reel->reel_type = $request->input('reel_type');
        $reel->reel_brand = $request->input('reel_brand');
        $reel->reel_price = $request->input('reel_price');
        $reel->save();
        return redirect()->route('reel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reel = Fishing_reel::find($id);
        $reel -> delete();
        return redirect()->route('reel.index');
    }
}
