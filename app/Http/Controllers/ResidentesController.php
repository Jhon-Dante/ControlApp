<?php

namespace App\Http\Controllers;

use App\Residentes;
use App\User;
use Illuminate\Http\Request;

class ResidentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Residentes::orderBy('id','DESC')->paginate();
        return Residentes::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    return Residentes::orderBy('id','DESC')->paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        // $user = new User;
        // $user->name =           $request->nombres;
        // $user->rut =            $request->rut;
        // $user->email =          $request->email;
        // $user->password =       bcrypt($request->nombres;
        // $user->tipo_usuario =   'Residente';
        // $user->save();

        // $user=\DB::table('residentes')->insert([
        //     'nombres' => $request->nombres;
        //     'apellidos' => $request->apellidos;
        //     'rut' => $request->rut;
        //     'telefono' => $request->talefono;
        //     'id_usuario' => 10
        // ]);

        // $residente = new Residentes;
        // $residente->nombres =       $request['nombres'];
        // $residente->apellidos =     $request['apellidos'];
        // $residente->rut =           $request['rut'];
        // $residente->telefono =      $request['telefono'];
        // $residente->id_usuario =    $user->id;
        // $residente->save();

        return Response::json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Residentes  $residentes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Residentes::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Residentes  $residentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Residentes $residentes, $id)
    {
        $residente = Residentes::find($id);
        return $residente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Residentes  $residentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residentes $residentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Residentes  $residentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $eliminar = User::where('id', $id)->first();
        $eliminar->delete();

        // return true;
    }
}
