<?php namespace App;
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 2/11/2016
 * Time: 12:31 PM
 */
use Illuminate\Database\Eloquent\Model;

class MiModel extends Model{

    function saludar($nomnbre){
        return "Hola $nomnbre";
    }
}