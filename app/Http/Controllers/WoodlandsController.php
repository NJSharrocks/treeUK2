<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Woodland;

class WoodlandsController extends Controller
{
  function __construct(Request $request)
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the woodlands
        $woodlands = Woodland::all();

        return view('/admin/woodlands/index', ['woodlands' => $woodlands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/woodlands/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $woodland = Woodland::create($request->all());

        return redirect('admin/woodlands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $woodland = Woodland::where('id', $id)->first();

        if(!$woodland) {
          return redirect('/admin/woodlands');
        }
        return view('/admin/woodlands/show')->withWoodland($woodland);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $woodland = Woodland::where('id',$id)->first();

          // if user does not exist return to list
          if(!$woodland)
          {
              return redirect('/admin/woodlands');
              // you could add on here the flash messaging of article does not exist.
          }
          return view('admin/woodlands/edit')->with('woodland', $woodland);
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
      $woodland = Woodland::findOrFail($id);

      return view('admin/woodlands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $woodland = Woodland::find($id);

      $woodland->delete();

      return redirect('admin/woodlands');
    }
}
