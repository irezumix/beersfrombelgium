<?php

use App\Beer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //php namespace resolver

        DB::table('beers')->truncate();


        // Eloquent : Mass Assignment

        Beer::create([
            'name' => 'duvel',
            'alcohol' => 5,
            'score' => 4
        ]);
        Beer::create([
            'name' => 'leffe blond',
            'alcohol' => 2,
            'score' => 3
        ]);
        Beer::create([
            'name' => 'leffe donker',
            'alcohol' => 1,
            'score' => 6
        ]);
    }
}
