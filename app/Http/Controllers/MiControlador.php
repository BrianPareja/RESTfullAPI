<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 2/11/2016
 * Time: 12:30 PM
 */
use App\MiModel;

class MiControlador extends Controller{



    function index()
    {

        $modelo = new MiModel();
        $resultado = $modelo->saludar("Benjaman");
        return view("prueba.vista",["saludo"=>$resultado]);



        }

}
