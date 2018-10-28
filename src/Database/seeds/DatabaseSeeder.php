<?php

namespace Kgregorywd\Currencies\Database\Seed;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( )
    {
        $this->call(CurrenciesTableSeeder::class);
    }
}
