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


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombres' => 'required',
            'apellidos' => 'required',
            'rut' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

            

        $user=\DB::table('users')->insert([
            'name' =>           $request->nombres,
            'rut' =>            $request->rut,
            'email' =>          $request->email,
            'password' =>       bcrypt($request->rut),
            'tipo_usuario' =>   'Residente'
        ]);

        $user=User::where('email',$request->email)->first();

        $residente=\DB::table('residentes')->insert([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'rut' => $request->rut,
            'telefono' => $request->telefono,
            'id_usuario' => $user->id
        ]);
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Residentes  $residentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nombres' => 'required',
            'apellidos' => 'required',
            'rut' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

            
        $residente= Residentes::find($id);

        $residente->nombres=$request->nombres;
        $residente->apellidos=$request->apellidos;
        $residente->rut=$request->rut;
        $residente->telefono=$request->telefono;
        $residente->save();

        $user=User::find($residente->id_usuario);

        $user->name=$request->nombres;
        $user->rut=$request->rut;
        $user->email=$request->email;
        $user->password=bcrypt($request->rut);
        $user->save();
        

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
