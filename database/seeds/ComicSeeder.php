<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_arrey = config('(2)comics');
        foreach ($comics_arrey as $item){
            $_item = new Comic();
            $_item -> title = $item['title'];
            $_item -> thumb = $item['thumb'];
            $_item -> price = $item['price'];
            $_item -> series = $item['series'];
            $_item -> sale_date = $item['sale_date'];
            $_item -> type = $item['type'];
            $_item -> save();
        }
    }
}
