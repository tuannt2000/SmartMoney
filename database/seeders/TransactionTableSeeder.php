<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transactions')->insert([
            ['date' => new \DateTime(),'created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_27.svg','title' => 'Business','type' => 'income','color' => 'rgb(255, 162, 0)','create_by' => 0],
        ]);
    }
}
