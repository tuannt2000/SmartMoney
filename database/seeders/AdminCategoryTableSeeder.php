<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_categories')->insert([
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_27.svg','title' => 'Business','type' => 'income','color' => 'rgb(255, 162, 0)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_5.svg','title' => 'Extra Income','type' => 'income','color' => 'rgb(114, 197, 65)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_26.svg','title' => 'Gifts','type' => 'income','color' => 'rgb(24, 178, 114)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_56.svg','title' => 'Insurance Payout','type' => 'income','color' => 'rgb(69, 167, 230)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_58.svg','title' => 'Loan','type' => 'income','color' => 'rgb(224, 100, 118)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_12.svg','title' => 'Other','type' => 'income','color' => 'rgb(103, 104, 108)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_57.svg','title' => 'Parental Leave','type' => 'income','color' => 'rgb(249, 100, 160)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_28.svg','title' => 'Salary','type' => 'income','color' => 'rgb(24, 178, 114)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_52.svg','title' => 'Beauty','type' => 'outcome','color' => 'rgb(121, 68, 208)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_5.svg','title' => 'Bills & Fees','type' => 'outcome','color' => 'rgb(94, 196, 172)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_1.svg','title' => 'Car','type' => 'outcome','color' => 'rgb(69, 167, 230)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_19.svg','title' => 'Education','type' => 'outcome','color' => 'rgb(58, 117, 173)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_6.svg','title' => 'Entertainment','type' => 'outcome','color' => 'rgb(255, 168, 1)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_4.svg','title' => 'Family & Personal','type' => 'outcome','color' => 'rgb(69, 167, 230)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_3.svg','title' => 'Food & Drink','type' => 'outcome','color' => 'rgb(255, 168, 1)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_26.svg','title' => 'Gifts','type' => 'outcome','color' => 'rgb(24, 178, 114)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_15.svg','title' => 'Groceries','type' => 'outcome','color' => 'rgb(221, 129, 56)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_11.svg','title' => 'Healthcare','type' => 'outcome','color' => 'rgb(224, 100, 118)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_7.svg','title' => 'Home','type' => 'outcome','color' => 'rgb(182, 152, 92)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_12.svg','title' => 'Other','type' => 'outcome','color' => 'rgb(103, 104, 108)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_9.svg','title' => 'Shopping','type' => 'outcome','color' => 'rgb(227, 106, 239)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_17.svg','title' => 'Sport & Hobbies','type' => 'outcome','color' => 'rgb(96, 208, 202)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_14.svg','title' => 'Transport','type' => 'outcome','color' => 'rgb(252, 206, 0)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_2.svg','title' => 'Travel','type' => 'outcome','color' => 'rgb(249, 100, 160)'],
            ['created_at' => new \DateTime(),'icon' => 'https://api.spendee.com/categories/cat_27.svg','title' => 'Work','type' => 'outcome','color' => 'rgb(109, 110, 138)'],
        ]);
    }
}
