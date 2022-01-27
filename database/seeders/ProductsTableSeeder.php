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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 21,
                'price' => 200.10,
                'image' => 'https://www.bitovayahimiyaoptom.ru/wp-content/uploads/2020/09/Mylo-hozyai-stvennoe-EFKO-22Rus-7222-200-g.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => "Мыло №2",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 400,
                'price' => 1600.21,
                'image' => 'https://cdn1.ozone.ru/multimedia/1036104606.jpeg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => "Мыло №3",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'price' => 378.00,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Savonette_2008.jpg/1200px-Savonette_2008.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ],
            [
                'name' => 'Мыло мыльное №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'price' => 21.10,
                'image' => 'https://media.nashaspravka.ru/attachments/ncg/publications/0/24/24996/thumb_1448865975-f336df00f0.jpg',
                'created_at' => new \DateTime(),
                'updated_at' => null,
            ]
        ];

        DB::table('products')->insert($products);
    }
}
