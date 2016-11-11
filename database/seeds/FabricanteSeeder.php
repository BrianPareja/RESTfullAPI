<?php
/**
 * Created by PhpStorm.
 * User: BenjaminPareja
 * Date: 11/11/2016
 * Time: 3:15 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Fabricante;
use Faker\Factory as Faker;


class FabricanteSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
        for ($i=4; $i < 30; $i++)
        {
            Fabricante::create
            ([
               'nombre'=>$faker->word(),
                'telefono'=>$faker->randomNumber(7)
            ]);
        }
    }


}
