<?php

use Illuminate\Database\Seeder;

class CorretoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        for ($i=1; $i < 100; $i++) {
            DB::table('corretores')->insert(
                [
                    'nome_corretor' => $faker->name,
                    'creci' => $faker->randomNumber(7),
                    'fone' => $faker->cellphoneNumber,
                    'email' => $faker->safeEmail,
                    'nome_corretora' => $faker->name,
                ]
            );
        }
    }
}
