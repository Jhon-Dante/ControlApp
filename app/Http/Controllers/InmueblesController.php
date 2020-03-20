<?php

namespace App\Http\Controllers;

use App\Inmuebles;
use Illuminate\Http\Request;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return Inmuebles::get();
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'idem' => 'required',
        //     'tipo' => 'required',
        // ]);  

        // $inmuebles=\DB::table('inmuebles')->insert([
        //     'idem' => $request->idem,
        //     'tipo' => $request->tipo,
        //     'status' =>  'Disponible',
        // ]);

        return 1;
        
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'idem' => 'required',
            'tipo' => 'required',
            'status' => 'required',
        ]);  

        $inmueble=Inmuebles::find($id);
        $inmueble->idem=$request->idem;
        $inmueble->tipo=$request->tipo;
        $inmueble->status=$request->status;
        $inmueble->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmuebles  $inmuebles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmuebles $inmuebles,$id)
    {
        $eliminar = Inmuebles::where('id', $id)->first();
        $eliminar->delete();
    }
}
