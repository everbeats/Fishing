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
        $fishing_reels = Fishing_reel::all()->toArray();
        return view('lib/index_reel',compact('fishing_reels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/work.create_reel');
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
        $fishing_reel = new Fishing_reel(['reel_name' => $request->get('reel_name'),
                                          'reel_size' => $request->get('reel_size'),
                                          'reel_color' => $request->get('reel_color'),
                                          'reel_type' => $request->get('reel_type'),
                                          'reel_brand' => $request->get('reel_brand'),
                                          'reel_price' => $request->get('reel_price')
        ]);
        $fishing_reel->save();
        return redirect()->route('reel.create')->with('success','บันทึกข้อมูลเรียบร้อย');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
