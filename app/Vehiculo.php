<?php namespace App;
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 2/11/2016
 * Time: 12:31 PM
 */
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model{

    protected $table = "vehiculos";
    protected $primary = "serie";
    protected $fillable = array('color','cilindraje','potencia','peso');

    public function Fabricante(){

        $this->belongsTo('Fabricante');
    }

}