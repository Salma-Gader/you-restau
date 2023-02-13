<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Dishe;
class DishescController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dishes.index',[
            'dishes'=> Dishe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'dishe-name'=>'required',
        //     'dishe-date'=>'required',
        //     'dishe-description'=>'required',
        //     'dishe-image'=>'required',
        // ]);
       $dishe= new Dishe();
       $dishe->name= strip_tags($request->input('dishe-name'));
       $dishe->date= $request->input('dishe-date');
       $dishe->description= $request->input('dishe-description');
       $dishe->image= $request->file('dishe-image')->store('dishe-image', 'public');
       $dishe->save();
       return redirect()->route('dishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dishes.show',[
            'dishe' => Dishe::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dishe)
    {
        return view('dishes.edit',[
            'dishe'=>Dishe::findOrFail($dishe)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$dishe)
    {
        $request->validate([
            'dishe-name'=>'required',
            'dishe-date'=>'required',
            'dishe-description'=>'required',
            'dishe-image'=>'required',
        ]);
       $toUpdate=Dishe::findOrFail($dishe);
       $toUpdate->name= strip_tags($request->input('dishe-name'));
       $toUpdate->date= $request->input('dishe-date');
       $toUpdate->description= $request->input('dishe-description');
       $toUpdate->image= $request->file('dishe-image')->store('dishe-image', 'public');
       $toUpdate->save();
       return redirect()->route('dishes.show',$dishe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dishe)
    {
        $toDelet=Dishe::findOrFail($dishe);
        $toDelet->delete();
        return redirect()->route('dishes.index');
    }

}
