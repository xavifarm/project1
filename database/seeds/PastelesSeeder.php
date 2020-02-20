<?php

use App\Pastel;
use Illuminate\Database\Seeder;

class PastelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pastel::create([
            'nombre' => 'Tarta Banoffee'
        ]);
    }
}
