<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hook;

class HooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hook = Hook::all()->toArray();
        return view('work2/ad_hook',compact('hook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work/create_hook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['hook_name' => 'required',
                                  'hook_size' => 'required',
                                  'hook_color' => 'required',
                                  'hook_type' => 'required',
                                  'hook_brand' => 'required',
                                  'hook_price' => 'required',   
        ]);
        $hook = new Hook(['hook_name' => $request->get('hook_name'),
                          'hook_size' => $request->get('hook_size'),
                          'hook_color' => $request->get('hook_color'),
                          'hook_type' => $request->get('hook_type'),
                          'hook_brand' => $request->get('hook_brand'),
                          'hook_price' => $request->get('hook_price'),
        ]);
        $hook->save();
        return redirect()->route('hook.create');
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
        $hook = Hook::find($id);
        return view('work/edit_hook',compact('hook','id'));
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
        $this->validate($request,['hook_name' => 'required',
                                  'hook_size' => 'required',
                                  'hook_color' => 'required',
                                  'hook_type' => 'required',
                                  'hook_brand' => 'required',
                                  'hook_price' => 'required'        
        ]);
        $hook = Hook::find($id);
        $hook->hook_name = $request->input('hook_name');
        $hook->hook_size = $request->input('hook_size');
        $hook->hook_color = $request->input('hook_color');
        $hook->hook_type = $request->input('hook_type');
        $hook->hook_brand = $request->input('hook_brand');
        $hook->hook_price = $request->input('hook_price');
        $hook->save();
        return redirect()->route('hook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hook = Hook::find($id);
        $hook -> delete();
        return redirect()->route('hook.index');
    }

}
