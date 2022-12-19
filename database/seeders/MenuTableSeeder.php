<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new \App\Models\Menu([
            'name_item'=> 'Jedzonko',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 1,
            'ingredients' => 'potatoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Kaszanka',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 1,
            'ingredients' => 'potatoes, gtyos, ksjud',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Możliwości będa',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 2,
            'ingredients' => 'potdjdndjd,d ddjjd atoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Jedzonko',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 2,
            'ingredients' => 'potatoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Kotek będzie',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 1,
            'ingredients' => 'kot, nkjois, djhdhd potatoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Jedz',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 1,
            'ingredients' => 'Podretshs, potatoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Mięso',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 1,
            'ingredients' => 'potatoes',
        ]);
        $menu->save();

        $menu = new \App\Models\Menu([
            'name_item'=> 'Niznanu',
            'imagepath' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/aadbcc1b4eff6d3d2a32361f1ad74c72/Derivates/755a4e73c9b36ccdaaa5886cd70948fae9ae7e03.jpg',
            'price' => 22,
            'type_id' => 2,
            'ingredients' => 'ponsjjdd ddd, tatoes',
        ]);
        $menu->save();
    }
}
