<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $tempComic = new Comic();

            $tempComic->title = $comic['title'];
            $tempComic->description = $comic['description'];
            $tempComic->thumb = $comic['thumb'];
            $tempComic->price = $comic['price'];
            $tempComic->series = $comic['series'];
            $tempComic->sale_date = $comic['sale_date'];
            $tempComic->type = $comic['type'];

            $tempComic->save();
        }


    }
}
