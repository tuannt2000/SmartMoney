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
            ['date' => '2021/12/07','note' => 'công việc','amount' => 100000,'wallet_id' => 1,'category_id' => 2,'created_at' => new \DateTime()],
            ['date' => '2021/12/07','note' => null,'amount' => 100000,'wallet_id' => 1,'category_id' => 3,'created_at' => new \DateTime()],
            ['date' => '2021/12/07','note' => null,'amount' => -100000,'wallet_id' => 1,'category_id' => 20,'created_at' => new \DateTime()],
            ['date' => '2021/12/07','note' => 'du lịch','amount' => 100000,'wallet_id' => 1,'category_id' => 7,'created_at' => new \DateTime()],
            ['date' => '2021/12/07','note' => null,'amount' => 100000,'wallet_id' => 1,'category_id' => 2,'created_at' => new \DateTime()],
            ['date' => '2021/12/05','note' => null,'amount' => -400000,'wallet_id' => 1,'category_id' => 10,'created_at' => new \DateTime()],
            ['date' => '2021/12/05','note' => 'sinh nhật','amount' => 100000,'wallet_id' => 1,'category_id' => 5,'created_at' => new \DateTime()],
            ['date' => '2021/12/06','note' => null,'amount' => 100000,'wallet_id' => 1,'category_id' => 1,'created_at' => new \DateTime()],
            ['date' => '2021/12/06','note' => null,'amount' => -150000,'wallet_id' => 1,'category_id' => 21,'created_at' => new \DateTime()],
        ]);
    }
}
