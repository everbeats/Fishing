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
        $line = Fishing_line::all()->toArray();
        return view('work2/ad_line',compact('line'));
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
        $line = new Fishing_line(['line_name' => $request->get('line_name'),
                                  'line_size' => $request->get('line_size'),
                                  'line_color' => $request->get('line_color'),
                                  'line_type' => $request->get('line_type'),
                                  'line_brand' => $request->get('line_brand'),
                                  'line_price' => $request->get('line_price')
        ]);
        $line->save();
        return redirect()->route('line.create');
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
        $line = Fishing_line::find($id);
        return view('work/edit_line',compact('line','id'));
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
        $this->validate($request,['line_name' => 'required',
                                  'line_size' => 'required',
                                  'line_color' => 'required',
                                  'line_type' => 'required',
                                  'line_brand' => 'required',
                                  'line_price' => 'required'        
        ]);
        $line = Fishing_line::find($id);
        $line->line_name = $request->input('line_name');
        $line->line_size = $request->input('line_size');
        $line->line_color = $request->input('line_color');
        $line->line_type = $request->input('line_type');
        $line->line_brand = $request->input('line_brand');
        $line->line_price = $request->input('line_price');
        $line->save();
        return redirect()->route('line.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $line = Fishing_line::where('line_id',$id);
        $line -> delete();
        return redirect()->route('line.index');
        
    }
}
