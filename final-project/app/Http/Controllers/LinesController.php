<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishing_line;

class LinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishing_lines = Fishing_line::all()->toArray();
        return view('lib/index_line',compact('fishing_lines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_line');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['line_name' => 'required',
                                  'line_size' => 'required',
                                  'line_color' => 'required',
                                  'line_type' => 'required',
                                  'line_brand' => 'required',
                                  'line_price' => 'required'        
        ]);
        $fishing_line = new Fishing_line(['line_name' => $request->get('line_name'),
                                          'line_size' => $request->get('line_size'),
                                          'line_color' => $request->get('line_color'),
                                          'line_type' => $request->get('line_type'),
                                          'line_brand' => $request->get('line_brand'),
                                          'line_price' => $request->get('line_price')
        ]);
        $fishing_line->save();
        return redirect()->route('line.create')->with('success','บันทึกข้อมูลเรียบร้อย');
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
