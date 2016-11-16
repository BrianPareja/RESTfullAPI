<?php namespace App\Http\Controllers;

use App\Fabricante;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class FabricanteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['datos'=>Fabricante::all()]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return "MOSTRANDO MENU DE LA CREACION";
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
	public function show($id)
	{
		$fabricante = Fabricante::find($id);
		if (!$fabricante){
			return response()->json(['mensaje'=>'no se encontró fabricante','codigo'=>'404'],404);
		}
		return response()->json(['datos'=>$fabricante],202);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Editando el fabricante $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Actualizando el fabricante con $id";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Eliminando el fabricante con $id";
	}

}
