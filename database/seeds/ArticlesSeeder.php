<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<100; $i++){
            Article::create([
                'titulo' => 'receta 6'.$i,
                'autor' => 'antonio'.$i,
                'descripcion' => 'receta tiramisú'.$i
            ]);
        }
    }
}

