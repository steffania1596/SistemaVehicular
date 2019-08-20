<?php

namespace App\Http\Controllers;

use App\Dueno;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Dato)
    {
        if ($Dato=='A765'){
            return view('index');
        }else {
            return view('zonaprohibida');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('RegistrarVehiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dueno = new Dueno();
        $vehiculo = new Vehiculo();
        $vehiculo ->fill($request->all());
        $dueno ->fill($request->all());
        $validacion =$request -> validate(
            [
                'NombreDueno' => 'required|string',
                'Documento' => 'required|integer|min:0',
                'Marca' => 'required|in:Mazda,Toyota,Chevrolet',
                'Placa' => 'required|regex:/[a-z][a-z][a-z][0-9][0-9][0-9]/',
            ],[ 'Documento.min'=>'Se debe insertar valor numerico positivo',
            'Nombre.required'=>'Se debe diligenciar el campo Nombre',
            'Documento.required'=>'Se debe diligenciar el campo Documento',
            'Marca.required'=>'Se debe diligenciar el campo Marca',
            'Placa.required'=>'Se debe diligenciar el campo Placa',
            'Placa.regex'=>'El formato de la placa no es valido',
            'Documento.integer'=>'El campo Documento debe ser  un valor numerico positivo',

        ]);
        $dueno->save();
        $vehiculo->save();
        return redirect('/A765')->with('message', 'El registro fue exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vehiculos = Vehiculo::all();
        return view('ListarVehiculos',compact('vehiculos'));
    }
    public function estadisticasvehiculos()
    {
        $sumMazda = Vehiculo::where('Marca','=','Mazda')->count();
        $sumToyota = Vehiculo::where('Marca','=','Toyota')->count();
        $sumChevrolet = Vehiculo::where('Marca','=','Chevrolet')->count();

        return view('EstadisticasVehiculos',compact('sumMazda','sumToyota','sumChevrolet'));
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
