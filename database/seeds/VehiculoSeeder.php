<?php
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 11/11/2016
 * Time: 3:15 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vehiculo;
use App\Fabricante;
use Faker\Factory as Faker;


class VehiculoSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $cantidad=Fabricante::all()->count();
        for ($i=0; $i <$cantidad; $i++)
        {
            Vehiculo::create
            ([
            'color'=>$faker->safeColorName(),
            'cilindraje'=>$faker->randomFloat(),
            'potencia'=>$faker->randomNumber(),
            'peso'=>$faker->randomFloat(),
            'fabricante_id'=>$faker->numberBetween(1,$cantidad)
            ]);
        }
    }


}
