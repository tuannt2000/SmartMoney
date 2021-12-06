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
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 1,'category_id' => 26,'created_at' => new \DateTime()],
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 2,'category_id' => 30,'created_at' => new \DateTime()],
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 1,'category_id' => 45,'created_at' => new \DateTime()],
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 2,'category_id' => 26,'created_at' => new \DateTime()],
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 1,'category_id' => 28,'created_at' => new \DateTime()],
            ['date' => new \DateTime(),'amount' => 100000,'wallet_id' => 1,'category_id' => 26,'created_at' => new \DateTime()],
        ]);
    }
}
