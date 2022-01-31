<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $products = [
            [
                'name' => "Мыло №1",
                'title' => "Мыло №1",
                'cat_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 21,
                'stock' => 5,
                'status' => 1,
                'price' => 200.10,
                'image' => 'https://www.bitovayahimiyaoptom.ru/wp-content/uploads/2020/09/Mylo-hozyai-stvennoe-EFKO-22Rus-7222-200-g.jpg',
                'default_img' =>'https://www.bitovayahimiyaoptom.ru/wp-content/uploads/2020/09/Mylo-hozyai-stvennoe-EFKO-22Rus-7222-200-g.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => "Мыло №2",
                'title' =>"Мыло №2",
                'cat_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 400,
                'stock' => 5,
                'price' => 1600.21,
                'image' => 'https://cdn1.ozone.ru/multimedia/1036104606.jpeg',
                'default_img' => 'https://media.nashaspravka.ru/attachments/ncg/publications/0/24/24996/thumb_1448865975-f336df00f0.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => "Мыло №3",
                'title' =>"Мыло №3",
                'cat_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'stock' => 5,
                'price' => 378.00,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Savonette_2008.jpg/1200px-Savonette_2008.jpg',
                'default_img' => 'https://media.nashaspravka.ru/attachments/ncg/publications/0/24/24996/thumb_1448865975-f336df00f0.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => 'Мыло мыльное №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№',
                'title' =>'Мыло мыльное №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№',
                'cat_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'stock' => 5,
                'price' => 21.10,
                'image' => 'https://media.nashaspravka.ru/attachments/ncg/publications/0/24/24996/thumb_1448865975-f336df00f0.jpg',
                'default_img' => 'https://media.nashaspravka.ru/attachments/ncg/publications/0/24/24996/thumb_1448865975-f336df00f0.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ]
        ];

        DB::table('products')->insert($products);
    }
}
