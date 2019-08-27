<?php

use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 1,
            'text' => '海の写真です',
            'img' => 'img/sample.jpg',
        ];

        DB::table('texts')->insert($param);
    }
}
