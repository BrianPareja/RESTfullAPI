<?php namespace App\Http\Controllers;

use App\Fabricante;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehiculo;
use Illuminate\Http\Request;

class FabricanteVehiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index($id)
	{
		$fabricante=Fabricante::find($id);
		if (!$fabricante){
			return response()->json(['mensaje'=>'No se encuentra al fabricante','codigo'=>404],404);
		}
		$vehiculos=$fabricante->vehiculos;
		return response()->json(['datos'=>$vehiculos],202);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($idFabricante, $idVehiculo)
	{
		return "Mostrando el formulario para editar el vehiculo ".$idVehiculo. " del fabricante " .$idFabricante;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idFabricante, $idVehiculo)
	{
		return "mostrando el vehiculo con $idFabricante";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idFabricante,$idVehiculo)
	{
		return "mostrando el formulario para editar el vehiculo con $idVehiculo -  del fabricante $idFabricante";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idFabricante,$idVehiculo)
	{
		return "mostrando el formulario para actualizar el vehiculo con $idVehiculo -  del fabricante $idFabricante";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
