<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wallets')->insert([
            ['created_at' => new \DateTime(),'name' => 'Ví tiền mặt','user_id' => 6],
            ['created_at' => new \DateTime(),'name' => 'Ví 2','user_id' => 6],
        ]);
    }
}
