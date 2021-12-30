<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(UserColorTableSeeder::class);
        $this->call(WalletTableSeeder::class);
        $this->call(UserCategoryTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(AdminCategoryTableSeeder::class);
    }
}
