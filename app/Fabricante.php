<?php namespace App;
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 2/11/2016
 * Time: 12:31 PM
 */
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model{

    protected $table = "fabricantes";
    //protected $primary = "id";
    protected $fillable = array('nombre','telefono');
    protected $hidden = ['created_at', 'updated_at'];

    public function vehiculos(){

       return $this->hasMany('App\Vehiculo');
    }

}