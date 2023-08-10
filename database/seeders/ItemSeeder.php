<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'name' => 'コロンビア',
            'memo' => 'ミディアムロースト',
            'price' => 1250,
            ],
            [
                'name' => 'ミナスゼライス',
                'memo' => 'ミディアムロースト',
                'price' => 1300,
            ],
            [
                'name' => 'ライトノートブレンド',
                'memo' => 'ブロンドロースト',
                'price' => 1200,
            ]
        ]);
    }
}
