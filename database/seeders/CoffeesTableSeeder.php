<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/coffee/hot');
        $data = json_decode($data);

        foreach ($data as $coffee) {
            $new_coffee = new Coffee();

            $new_coffee->title = $coffee->title;
            $new_coffee->slug = Coffee::generateSlug($new_coffee->title);
            $new_coffee->description = $coffee->description;
            $new_coffee->ingredients = implode(', ', $coffee->ingredients);
            $new_coffee->image = $coffee->image;

            $new_coffee->save();
        }
    }
}
