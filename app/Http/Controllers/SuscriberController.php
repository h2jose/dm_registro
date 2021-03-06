<?php

namespace App\Http\Controllers;

use App\Suscriber;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\SuscriberRequest;

class SuscriberController extends Controller
{

    public function __construct()
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
        //return view('suscribers.new');

        $suscribers = Suscriber::orderBy('apellido', 'asc')->paginate(10);
        return view('suscribers.grid',compact('suscribers'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suscribers.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuscriberRequest $request)
    {
        $post_data = $request->all();

        $formobj = new Suscriber;
        $formobj->fill($post_data);
        $formobj->save();
        $id = $formobj->id;

        return redirect()->action('SuscriberController@show', ['id' => $id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $suscriber = Suscriber::find($id);

        return view('suscribers.show',['suscriber' => $suscriber]);
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
