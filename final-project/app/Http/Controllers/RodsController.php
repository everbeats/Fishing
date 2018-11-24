<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishing_rod;

class RodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rod = Fishing_rod::all()->toArray();
        return view('work2/ad_rod',compact('rod'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_rod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['rod_name' => 'required',
                                  'rod_length' => 'required',
                                  'rod_color' => 'required',
                                  'rod_action' => 'required',
                                  'rod_power' => 'required',
                                  'rod_line' => 'required',
                                  'rod_lure' => 'required',
                                  'rod_type' => 'required',
                                  'rod_brand' => 'required',
                                  'rod_price' => 'required'
                                  
        ]);
        $rod = new Fishing_rod(['rod_name' => $request->get('rod_name'),
                                'rod_length' => $request->get('rod_length'),
                                'rod_color' => $request->get('rod_color'),
                                'rod_action' => $request->get('rod_action'),
                                'rod_power' => $request->get('rod_power'),
                                'rod_line' => $request->get('rod_line'),
                                'rod_lure' => $request->get('rod_lure'),
                                'rod_type' => $request->get('rod_type'),
                                'rod_brand' => $request->get('rod_brand'),
                                'rod_price' => $request->get('rod_price')
                                        
        ]);
        $rod->save();
        return redirect()->route('rod.create');
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
        $rod = Fishing_rod::find($id);
        return view('work/edit_rod',compact('rod','id'));
        
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
        $this->validate($request,['rod_name' => 'required',
                                  'rod_length' => 'required',
                                  'rod_color' => 'required',
                                  'rod_action' => 'required',
                                  'rod_power' => 'required',
                                  'rod_line' => 'required',
                                  'rod_lure' => 'required',
                                  'rod_type' => 'required',
                                  'rod_brand' => 'required',
                                  'rod_price' => 'required'
                                  
        ]);
        $rod = Fishing_rod::find($id);
        $rod->rod_name = $request->input('rod_name');
        $rod->rod_length = $request->input('rod_length');
        $rod->rod_color = $request->input('rod_color');
        $rod->rod_action = $request->input('rod_action');
        $rod->rod_power = $request->input('rod_power');
        $rod->rod_line = $request->input('rod_line');
        $rod->rod_lure = $request->input('rod_lure');
        $rod->rod_type = $request->input('rod_type');
        $rod->rod_brand = $request->input('rod_brand');
        $rod->rod_price = $request->input('rod_price');
        $rod->save();
        return redirect()->route('rod.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rod = Fishing_rod::find($id);
        $rod -> delete();
        return redirect()->route('rod.index');
    }
}
