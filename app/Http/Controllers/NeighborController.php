<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Neighbor;

class NeighborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neighbors = Neighbor::all();
        return view ('neighbors.index')->with('neighbors', $neighbors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('neighbors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Neighbor::create($input);
        return redirect('neighbor')->with('flash_message', 'Neighbor Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $neighbor = Neighbor::find($id);
        return view('neighbors.show')->with('neighbor', $neighbor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $neighbor= Neighbor::find($id);
        return view('neighbors.edit')->with('neighbors', $neighbor);
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
        $neighbor = Neighbor::find($id);
        $input = $request->all();
        $neighbor->update($input);
        return redirect('neighbor')->with('flash_message', 'Neighbor Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Neighbor::destroy($id);
        return redirect('neighbor')->with('flash_message', 'Neighbor removed!'); 
    }
}
