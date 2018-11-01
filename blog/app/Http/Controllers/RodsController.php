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
        $fishing_rods = Fishing_rod::all()->toArray();
        return view('lib/index_rod',compact('fishing_rods'));
      
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
        $fishing_rod = new Fishing_rod(['rod_name' => $request->get('rod_name'),
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
        $fishing_rod->save();
        return redirect()->route('rod.create')->with('success','บันทึกข้อมูลเรียบร้อย');
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
