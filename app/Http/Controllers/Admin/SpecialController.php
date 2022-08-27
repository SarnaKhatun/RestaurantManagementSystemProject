<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Special;
use App\Models\SpecialCategory;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.special.manage', [
            'specials' => Special::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.special.add', [
            'specialCategories' => SpecialCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Special::saveSpecialData($request);
        return back()->with('message', 'Added successfully');
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
        return view('admin.special.edit', [
            'specialCategories' => SpecialCategory::all(),
            'special' => Special::where('id', $id)->first(),
        ]);
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
        Special::saveSpecialData($request, $id);
        return redirect(route('specials.index'))->with('message', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    protected static $specials;
    public function destroy($id)
    {
        self::$specials = Special::where('id', $id)->first();
        if (isset(self::$specials->image))
        {
            unlink(self::$specials->image);
        }
        self::$specials->delete();
        return back()->with('message', 'Deleted successfully');
    }
}
